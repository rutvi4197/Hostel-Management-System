<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/login');
	}

	public function loginverification()
	{
			$id=$this->input->post('id');
		$password=$this->input->post('password');
		$this->load->model('stafflogin');
		if($this->stafflogin->confirmlogin($id,$password))
		{
				$this->session->set_userdata('id',$id);
				redirect('home');
		}
		else {
			$this->session->set_flashdata('loginerror','error');
			redirect('login');
		}
	}
	
}
