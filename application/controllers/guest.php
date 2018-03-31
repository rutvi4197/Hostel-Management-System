<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guest extends CI_Controller {

	
	public function add()
	{
		$this->load->model('citydetails');
		$arr['city']=$this->citydetails->getcitydetails();


		$this->load->view('admin/add_guest',$arr);
	}

	public function view()
	{
 	$this->load->model('guestrecord');
		$arr['guest']=$this->guestrecord->viewguest();

		$this->load->view('admin/guest',$arr);
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
				redirect('guest/view');
		}
		else {
			$this->session->set_flashdata('loginerror','error');
			redirect('guest/add');
		}

	}
	
	
}