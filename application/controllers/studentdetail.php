<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Studentdetail extends CI_Controller {

	
	public function viewroom()
	{
		$this->load->model('studentrecord');
		$arr['room']=$this->studentrecord->viewroomdetails();
		
		$this->load->view('admin/roomDetails',$arr);
	}
	public function viewstudentdetails()
	{
		$this->load->model('studentrecord');
		$arr['student']=$this->studentrecord->viewstudent();

		$this->load->view('admin/studentDetails',$arr);
	}
	public function searchroom()
	{
		$optradio=$this->input->post('optradio');
		$floor=$this->input->post('floor');
		$this->load->model('studentrecord');
		$arr['room']=$this->studentrecord->searcroomdetails($optradio,$floor);
		
		$this->load->view('admin/roomDetails',$arr);
		
	}

	
	
	
}