<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback extends CI_Controller {

	
	public function index()
	{
		$this->load->model('feedbackdetails');
		$arr['feedback']=$this->feedbackdetails->getfeedbackrecord();
		
		$this->load->view('admin/feedback',$arr);
	}	
}
