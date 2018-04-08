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
	public function approval()
	{
		$this->load->model('studentrecord');
		$arr['student']=$this->studentrecord->approvestudentdetail();

		$this->load->view('admin/approvestudent',$arr);
	}	


	public function approvestudent($id)
	{
		$this->load->model('studentrecord');
		if($this->studentrecord->updatestudentdetail($id))
		{
			redirect('Studentdetail/approval');
		}
		else
			redirect('Studentdetail/approval');

		
	}


	public function disapprovestudent($id)
	{
		$this->load->model('studentrecord');
		if($this->studentrecord->deletestudent($id))
		{
			redirect('Studentdetail/approval');
		}
		else
			redirect('Studentdetail/approval');

		
	}
	public function leave()
	{
		$this->load->model('studentrecord');
		$arr['student']=$this->studentrecord->leavestudentdetail();

		$this->load->view('admin/leaveapprove',$arr);
	}
	public function leavestudent($id)
	{
		$staffid=$this->session->userdata('id');

		$this->load->model('studentrecord');
		if($this->studentrecord->checkoutstudent($id,$staffid))
		{
			redirect('Studentdetail/leave');
		}
		else
			redirect('Studentdetail/leave');

		
	}
}