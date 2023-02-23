<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('vt');
	} 

	public function blog(){
		$postscount = $this->vt->postscount();
		$categorys = $this->vt->allCategory();
		$navbar = $this->vt->navbarget();
		$recommendation = $this->vt->allRecommendation();
		if($this->session->has_userdata('page')){
			$this->session->set_userdata('page',0);
		}
		$data["allPosts"] = $this->vt->allposts($this->session->userdata('page'),5);
		$data["allCategory"] = $categorys;
		$data["allNavbar"] = $navbar;
		$data["allRecommendation"] = $recommendation;
		$this->load->view('Blog/index',$data);
	}

	public function index()
	{
		$categorys = $this->vt->allCategory();
		$navbar = $this->vt->navbarget();
		$recommendation = $this->vt->allRecommendation();
		$data["allCategory"] = $categorys;
		$data["allNavbar"] = $navbar;
		$data["allRecommendation"] = $recommendation;
		$this->load->view('Blog/about2',$data);
	}

	public function nextPage(){
		$postscount = $this->vt->postscount();
		$categorys = $this->vt->allCategory();
		$navbar = $this->vt->navbarget();
		$recommendation = $this->vt->allRecommendation();
		$this->session->set_userdata('page',$this->session->userdata('page') + 5);
		$data["allPosts"] = $this->vt->allposts($this->session->userdata('page'),5);
		$data["allCategory"] = $categorys;
		$data["allNavbar"] = $navbar;
		$data["allRecommendation"] = $recommendation;
		$this->load->view('Blog/index',$data);
	}

	public function backPage(){
		$postscount = $this->vt->postscount();
		$categorys = $this->vt->allCategory();
		$navbar = $this->vt->navbarget();
		$recommendation = $this->vt->allRecommendation();
		$this->session->set_userdata('page',$this->session->userdata('page') - 5);
		$data["allPosts"] = $this->vt->allposts($this->session->userdata('page'),5);
		$data["allCategory"] = $categorys;
		$data["allNavbar"] = $navbar;
		$data["allRecommendation"] = $recommendation;
		$this->load->view('Blog/index',$data);
	}
    
	public function download() {
		// read file contents
		$data = file_get_contents(base_url("/downloads/EyyüpBiçerCv.pdf"));
		force_download("EyyüpBiçerCv.pdf", $data);
	}

   public function category($categoryName)
   {
	  $category = categoryNamesef($categoryName);
	  $conclusion = $this->vt->categorylist($category);
	  $categorys = $this->vt->allCategory();
	  $navbar = $this->vt->navbarget();
	  $recommendation = $this->vt->allRecommendation();
	  if($conclusion != NULL && $categorys!= Null && $navbar!= NULL)
	  {
		$data = new stdClass;
		$data->allPosts = $conclusion;
		$data->allCategory = $categorys;
		$data->allNavbar = $navbar;
		$data->allRecommendation = $recommendation;
		$this->load->view('Blog/category',$data);
	  }
	  else
	  {
		$this->session->set_flashdata('conclusion',' <p>Bir hatalı ile karşılaşıldı</p><br>');
			redirect('index.php'); 
	  }
	
   }

	public function post($link)
	{ 
		$conclusion = $this->vt->post($link); 
		$navbar = $this->vt->navbarget(); 
		$categorys = $this->vt->allCategory(); 
		$recommendation = $this->vt->allRecommendation(); 
		$advertisements = $this->vt->allAdvertisement();
		$data = new stdClass; 
		$data->post = $conclusion; 
		$data->allNavbar = $navbar; 
		$data->allCategory = $categorys;
		$data->allRecommendation = $recommendation; 
		$data->allAdvertisement = $advertisements;
		$this->load->view('Blog/post',$data); 
	}

	public function about()
	{
	   $this->load->view('Blog/about');  
	}

    public function cv()
	{
		$navbar = $this->vt->navbarget();
		$data = new stdClass;
		$data->allNavbar = $navbar;
		$this->load->view('Blog/cv2',$data);
	}

	public function contact()
	{
		$navbar = $this->vt->navbarget();
		$categorys = $this->vt->allCategory();
		$data = new stdClass;
		$data->allNavbar = $navbar;
		$data->allCategory = $categorys;
		$this->load->view('Blog/contact',$data);
	}
    public function page404()
	{
		$this->load->view('Blog/page404');
	}

	function messageSend()
	{
		$nameSurName = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
        $date = date('d-m-Y');
		$data = array('messageSubName'=> $nameSurName ,
					  'messageEmail'=> $email,
					  'message' => $message,
					  'messageDate' => $date,
					  'readMessage' => "true"
		);
		$conclusion = $this->vt->messageSend($data);
		if($conclusion!= null)
		{ 
			$this->session->set_flashdata('conclusion',' <div class="btn btn-success">
													<span class="closebtn" >&times;</span> 
													<strong></strong> 
													Mesaj Gönderilmiştir.
		  										</div><br>');	
			redirect('index.php/Manager/contact'); 									
		} 
	}
}
