<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback extends CI_Controller {

	
	public function index()
	{
		

		$this->load->view('user/feedbackForm');
	}	
	public function addfeedback()
	{

		$purpose=$this->input->post('purpose');
		$feedback=$this->input->post('feedback');
		$id=$this->session->userdata('id');

		$this->load->model('feedbackrecord');
		if($this->feedbackrecord->addfeedback($id,$purpose,$feedback))
		{
			redirect('home');
		}
		else
		{

		}

		
	}
}
