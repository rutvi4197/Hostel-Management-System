<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function staff()
	{
		$this->load->view('admin/add_attendance');
	}
	public function addstaff()
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

	public function view()
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
