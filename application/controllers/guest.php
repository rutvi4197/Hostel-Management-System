<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guest extends CI_Controller {

	
	public function add()
	{


		$this->load->view('admin/add_guest');
	}

	public function view()
	{


		$this->load->view('admin/guest');
	}
	public function addguest()
	{
		$guestName=$this->input->post('guestName');
		$guestContact=$this->input->post('guestContact');
		$purpose=$this->input->post('purpose');
		$studentRoomNo=$this->input->post('studentRoomNo');
		$address=$this->input->post('Address');
		$address2=$this->input->post('Address2');
		$city=$this->input->post('city');

		$staffid=$this->session->userdata('id');

		$this->load->model('guestrecord');

		if($this->guestrecord->addguestentry($staffid,$guestName,$guestContact,$purpose,$studentRoomNo,$address,$address2,$city))
		{
				redirect('home');
		}
		else {
			$this->session->set_flashdata('loginerror','error');
			redirect('login');
		}

	}
	
	
}