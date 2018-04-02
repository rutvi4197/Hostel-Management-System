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
		$this->load->view('admin/markOutEntry');

	}

	public function doout()
	{
		$studentid=$this->input->post('studentid');
		$relativeName=$this->input->post('relativeName');
		$guestContact=$this->input->post('guestContact');
		$place=$this->input->post('place');




		date_default_timezone_set('Asia/Kolkata');
		$date=date('d/m/Y');
		$outtime=date('H:i:s');

		$this->load->model('attendencerecord');

		if($this->attendencerecord->outentry($studentid,$outtime,$date,$relativeName,$guestContact,$place))
		{
			
				redirect('attendence/inoutentry');
		}
		else {
			$this->session->set_flashdata('attendeceerror','error');
			redirect('addattendence/inout');
		}
	}
	
	
}
