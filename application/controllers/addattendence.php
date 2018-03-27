<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addattendence extends CI_Controller {

	
	public function dailyentry()
	{
		$this->load->view('admin/add_attendance');
	}
	public function doattendence()
	{
		$studentid=$this->input->post('studentid');
		date_default_timezone_set('Asia/Kolkata');
		$date=date('d/m/Y');

		$this->load->model('attendencerecord');

		if($this->attendencerecord->attendenceentry($studentid,$date))
		{
				redirect('home');
		}
		else {
			$this->session->set_flashdata('attendeceerror','error');
			redirect('addattendence/dailyentry');
		}
	}

	public function inout()
	{
		$this->load->view('admin/markInOutEntry');

	}

	public function doout()
	{
		$studentid=$this->input->post('studentid');
		date_default_timezone_set('Asia/Kolkata');
		$date=date('d/m/Y');

		$this->load->model('attendencerecord');

		if($this->attendencerecord->attendenceentry($studentid,$date))
		{
			
				redirect('home');
		}
		else {
			$this->session->set_flashdata('attendeceerror','error');
			redirect('addattendence/dailyentry');
		}
	}
	
	
}
