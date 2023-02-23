<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {
	var $file;
	 public function __construct()
	 {
        parent::__construct();
		{
          $this->security();
		}
		$config['upload_path'] = 'uploads';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']     = '9000';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';
		$this->upload->initialize($config);
	 }
	 
	 function security()
	 {
		 $control = $this->session->userdata('control');
		 if(!isset($control) || $control != true)
		 {
            redirect('index.php/Administrator');
		 }
	 }

     public function adminpanel()
     {
		$this->load->model('vt');
		$data = new stdClass;
		$conclusion = $this->vt->allMessages();
		$data->allMessage = $conclusion;
        $this->load->view('Admin/index',$data);         
     }

	 public function navbar()
	 {
		$this->load->model('vt');
		$navbar = $this->vt->navbarget();
		$msg = $this->vt->allMessages();
		$data = new stdClass;
		$data->allMessage = $msg;
		$data->allNavbar=$navbar;
		$this->load->view('Admin/navbar',$data);  
	 }

	 public function navbarinsert()
	 {
        $Tittle = $this->input->post('Tittle');
		$Preface = $this->input->post('Preface');
		$Instagram = $this->input->post('Instagram');
		$Linkedin = $this->input->post('Linkedin');
		$Github = $this->input->post('Github');
		$Stackoverflow = $this->input->post('Stackoverflow');
		$Codeopen = $this->input->post('Codeopen');
		$this->load->model('vt');
		$data = array('Tittle'=>$Tittle,
					  'preface'=>$Preface,
					  'instagram' =>$Instagram,
					  'linkedin'=>$Linkedin,
					  'github'=>$Github,
					  'stackoverflow'=>$Stackoverflow,
					  'codeopen'=>$Codeopen	
						);
    	$conclusion = $this->vt->navbarset($data);
		if($conclusion)
        {
            $this->session->set_flashdata('conclusion',' <div class="alert-success">
														<span class="closebtn" >&times;</span> 
														<strong>Effective</strong>
														Navbar successfully edited.
													</div><br>');
			redirect('index.php/AdminPanel/adminpanel');
		}
		else
		{
			  $this->session->set_flashdata('conclusion',' <div class="alert-danger">
														<span class="closebtn" >&times;</span> 
														<strong>Effective</strong>
														Navbar successfully edited.
													</div><br>');
			redirect('index.php/AdminPanel/adminpanel');
		}
	 }

	 public function abone()
	 {
		$email =$this->input->post('email');
		$this->load->model('vt');
		$email = array('email' => $email);
		$conclusion = $this->vt->abone($email);
		if($conclusion)
		{
            $this->session->set_flashdata('conclusion',' <div class="alert-success">
														<span class="closebtn" >&times;</span> 
														<strong>Effective</strong>
														Abone successfully edited.
													</div><br>');
			redirect('index.php');
		}
		else
		{
			  $this->session->set_flashdata('conclusion',' <div class="alert-danger">
														<span class="closebtn" >&times;</span> 
														<strong>Effective</strong>
														Abone successfully edited.
													</div><br>');
			redirect('index.php');
		}
	 }
    
     public function postsedit($id)
	 {
		$this->load->model('vt');
		$edit = $this->vt->oneposts($id);
		$allCategory = $this->vt->allcategory();
		$data['edit']=$edit;
		$data['allCategory'] = $allCategory;
		$this->load->view('Admin/postsedit',$data);	   
	 }
	 
	 public function postseditdata($id)
	 {
		$tittle = $this->input->post('Tittle');
		$body = $this->input->post('Body');
		$category = $this->input->post('Category');
		$date = date('d-m-Y');
		$data = array(
					   'Tittle' => $tittle,
					   'Body' => $body,
					   'Catagories' => $category,
					   'postslink' => permalink($tittle),
					   'postsSeen' => 0);
		$this->load->model('vt');
		$conclusion = $this->vt->postsedit($data,$id);
	    if($conclusion)
		{
			$this->session->set_flashdata('bilgi',' <div class="alert-success">
														<span class="closebtn" >&times;</span> 
														<strong>Effective</strong>
														Post successfully edited.
													</div><br>');
			redirect('index.php/AdminPanel/posts');
		}
		else
		{
			$this->session->set_flashdata('bilgi',' <div class="alert-danger">
														<span class="closebtn" >&times;</span> 
														<strong>Effective</strong>
														Post editing failed.
													</div><br>');
			redirect('index.php/AdminPanel/posts');
		}
	 }

	 public function posts()
	 {
		$this->load->model('vt');
		$allPosts = $this->vt->allpostsadmin();
		$msg = $this->vt->allMessages();
		$data = new stdClass;
		$data->allPosts=$allPosts;
		$data->allMessage = $msg;
		$this->load->view('Admin/posts',$data);   
	 }

	 public function postsadd()
	 {
		$this->load->model('vt');
		$allCategory = $this->vt->allcategory();
		$msg = $this->vt->allMessages();
		$data = new stdClass;
		$data->allCategory=$allCategory;
		$data->allMessage = $msg;
		$this->load->view('Admin/postsadd',$data);  
	 }

	 public function postsdelete($id)
	 { 
        $this->load->model('vt');
		$delete = $this->vt->postsdelete($id);
		if($delete)
		{
			$this->session->set_flashdata('bilgi',' <div class="alert-success">
														<span class="closebtn" >&times;</span> 
														<strong>Effective</strong>
														Post deletion successful.
													</div><br>');
            redirect('index.php/AdminPanel/posts');
		}
		else
		{
			$this->session->set_flashdata('bilgi',' <div class="alert-danger">
													<span class="closebtn" >&times;</span> 
													<strong>Effective</strong>
													An error occurred, the post could not be deleted.
			  </div><br>');
			redirect('index.php/AdminPanel/posts');
		}
	 }

	 public function postsinsert()
	 {
		 $tittle = $this->input->post('Tittle');
		 $body = $this->input->post('Body');
		 $category = $this->input->post('Category');
		 $date = date('d-m-Y');
		 if($this->upload->do_upload('image')){  
			$this->file = $this->upload->data();
			$data = array('title' => $tittle,
	                    'body' => $body,
						'categories' => $category,
						'createDate' =>$date,
						'postslink' => permalink($tittle),
						'postsSeen' => 0,
						'images'=>$this->file['file_name']);  
						$this->load->model('vt');
			$conclusion = $this->vt->postsdbinsert($data);
			if($conclusion)
			{
				$this->session->set_flashdata('bilgi','<div class="alert-success">
													<span class="closebtn" >&times;</span> 
													<strong>Effective</strong>
														Post added failed.
													</div><br>');
				redirect('index.php/AdminPanel/posts');
			}
			else
			{
				$this->session->set_flashdata('bilgi','<div class="alert-danger">
														<span class="closebtn" >&times;</span> 
														<strong>Effective</strong> 
														Post added 
														</div><br>');
				redirect('index.php/AdminPanel/posts');										  
			}	
		}
		else{
			$this->session->set_flashdata('bilgi','<div class="alert-danger">
														<span class="closebtn" >&times;</span> 
														<strong>Resim Dosyasını</strong> 
														'.$this->upload->display_errors().'
														</div><br>');
				redirect('index.php/AdminPanel/posts');
		} 
	 }

	 public function categorys()
	 {
		 $this->load->model('vt');
		 $conclusion = $this->vt->allCategory();
		 $data = new stdClass;
		 $data->allCategory = $conclusion;
		 $msg = $this->vt->allMessages();
		 $data->allMessage = $msg;
		 $this->load->view('Admin/categorys',$data);
	 }
	 public function messages()
	 {
		 $this->load->model('vt');
		 $this->vt->readMessage();
		 $data = new stdClass;
		 $msg = $this->vt->allMessages();
		 $data->allMessage = $msg;
		 if($msg)
		 {
			$this->load->view('Admin/messages',$data);
		 }
		 else
		 {
			$this->session->set_flashdata('bilgi','<div class="alert-danger">
													<span class="closebtn" >&times;</span> 
													<strong>Effective</strong> 
													Not found Message.
			  										</div><br>');
			 redirect('index.php/AdminPanel/adminpanel');
		 }
	 }
     public function categoryadd()
	 {
         $this->load->view('Admin/categorysadd');
	 }
	 public function categorydbadd()
	 {
		$categoryName= $this->input->post('categoryName');
		$data = array('categoryName' => $categoryName,
					  'categorySef' => permalink($categoryName));

	   $this->load->model('vt');
	   $conclusion = $this->vt->categoryinsert($data);
	   if($conclusion)
	   {
		   $this->session->set_flashdata('bilgi','	<div class="alert-success">
												  	<span class="closebtn" >&times;</span> 
												  	<strong>Effective</strong>
												   	Category added failed
													</div><br>');
		   redirect('index.php/AdminPanel/categorys');
	   }
	   else
	   {
		   $this->session->set_flashdata('bilgi','	<div class="alert-danger">
												   	<span class="closebtn" >&times;</span> 
												   	<strong>Effective</strong> 
												    Category added 
													</div><br>');
			redirect('index.php/AdminPanel/categorys');										  
	   }
	 }

	 public function categorysedit($id)
	 {
		$this->load->model('vt');
		$edit = $this->vt->onecategory($id);
		$msg = $this->vt->allMessages();
		$data['allMessage'] = $msg;
		$data['edit']=$edit;
		$this->load->view('Admin/categorysedit',$data);	   
	 }
	 
	 public function categoryseditdata($id)
	 {
		$this->load->model('vt');
		$categoryName = $this->input->post('categoryName');
		$data = array( 'categoryName' => $categoryName,
					   'categorySef' => permalink($categoryName));
		$ad = categoryName($id);
		$categoryedit = array('Catagories'=>$categoryName);
		$this->vt->postscategoryedit($ad,$categoryedit);   
		$conclusion = $this->vt->categorysedit($data,$id);
	    if($conclusion)
		{
			$this->session->set_flashdata('bilgi',' <div class="alert-success">
														<span class="closebtn" >&times;</span> 
														<strong>Effective</strong>
														Category successfully edited.
													</div><br>');
			redirect('index.php/AdminPanel/categorys');
		}
		else
		{
			$this->session->set_flashdata('bilgi',' <div class="alert-danger">
														<span class="closebtn" >&times;</span> 
														<strong>Effective</strong>
														Category editing failed.
													</div><br>');
			redirect('index.php/AdminPanel/categorys');
		}
	 }

	 public function categorysdelete($id)
	 { 
        $this->load->model('vt');
		 $delete = $this->vt->categorysdelete($id);
		 if($delete)
		 {
			$this->session->set_flashdata('bilgi',' <div class="alert-success">
														<span class="closebtn" >&times;</span> 
														<strong>Effective</strong>
														Category deletion successful.
													</div><br>');
            redirect('index.php/AdminPanel/categorys');
		 }
		 else
		 {
			$this->session->set_flashdata('bilgi',' <div class="alert-danger">
													<span class="closebtn" >&times;</span> 
													<strong>Effective</strong>
													An error occurred, the Category could not be deleted.
			  </div><br>');
			redirect('index.php/AdminPanel/categorys');
		 }
	 }

}     