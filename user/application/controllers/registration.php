<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	
	public function index()
	{
		$this->load->view('user/studentRegistration1');
	}	

	public function staff()
	{
		$this->load->model('citydetails');
		$arr['city']=$this->citydetails->getcitydetails();
		$this->load->view('user/studentRegistration2',$arr);
	}
	public function addstaff()
	{
		$staffid=$this->input->post('staffid');
		$password=$this->input->post('password');
		$staffName=$this->input->post('staffName');
		$staffContact=$this->input->post('staffContact');
		$staffAddress=$this->input->post('staffAddress');
		$staffAddress2=$this->input->post('staffAddress2');
		$city=$this->input->post('city');




		
		$this->load->model('adminrecord');

		if($this->adminrecord->adminentry($staffid,$password,$staffName,$staffContact,$staffAddress,$staffAddress2,$city))
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
		$this->load->model('adminrecord');
		$arr['staff']=$this->adminrecord->viewstaff();
		$this->load->view('admin/staff',$arr);

	}

	
}
