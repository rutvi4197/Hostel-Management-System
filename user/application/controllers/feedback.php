<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback extends CI_Controller {

	
	public function index()
	{
		

		$this->load->view('user/feedbackForm');
	}	
	public function addfeedback()
	{

		redirect('home');
	}
}
