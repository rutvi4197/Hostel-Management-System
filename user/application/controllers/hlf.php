<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hlf extends CI_Controller {

	
	public function index()
	{
		

		$this->load->view('user/hostelLeavingForm');
	}	




	public function leaving()
	{
		$studentName=$this->input->post('studentName');
		$studentroomno=$this->input->post('studentroomno');
		date_default_timezone_set('Asia/Kolkata');
		$date=date('d/m/Y');
		$outime=date('H:i:s');

		$id=$this->session->userdata('id');

		$this->load->model('checkoutrecord');
		if($this->checkoutrecord->docheckout($id,$studentName,$studentroomno,$date,$outtime))
		{
			redirect('home');
		}
		else
		{
			redirect('hlf');
		}
	}
}
