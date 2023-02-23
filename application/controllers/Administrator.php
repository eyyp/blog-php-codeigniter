<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

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
	 public function Exit()
	 {
		 $this->session->sess_destroy();
		 redirect('index.php/Administrator');
	 }	 
	public function index()
	{
		if($this->session->userdata('control'))
		{
			redirect('index.php/AdminPanel/adminpanel');	
		}
		$this->load->view('Admin/login');
	}
	public function Panel()
	{
		$this->load->view('Admin/index');
	}

	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','UserName','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		$this->form_validation->set_message('required','<div class="alert alert-danger">
															%s the field cannot be left blank.
	  													</div>');
													
		if($this->form_validation->run())
		{
           $uname = $this->input->post('uname');
		   $password= $this->input->post('password');
		   $this->load->model('vt');
		   $conclusion = $this->vt->logincontrol($uname,md5($password));
		   if($conclusion)
		   {
              $this->session->set_userdata('control',true);
			  $this->session->set_userdata('info',$conclusion);
			  redirect('index.php/AdminPanel/adminpanel');
		   }
		   else
		   {
			    $this->session->set_flashdata('hata','<div class="alert alert-danger">
			   											Your username or password is incorrect
			 										</div>');
				redirect('index.php/Administrator');
		   }
		}
		else
		{													  
			$this->load->view('Admin/login');
		}
	}

}
