<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function staff()
	{
		$this->load->view('admin/add_staff');
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
		$this->load->view('admin/markInOutEntry');

	}

	
	
	
}
