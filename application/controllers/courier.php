<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courier extends CI_Controller {

	
	public function add()
	{


		$this->load->view('admin/add_courier');
	}

	public function view()
	{


		$this->load->view('admin/courier');
	}
	public function addcourier()
	{
		$studentid=$this->input->post('studentid');
		$studentRoomNo=$this->input->post('studentroomno');
		$courierCompany=$this->input->post('courierCompany');
		
		date_default_timezone_set('Asia/Kolkata');
		$date=date('d/m/Y');
		$intime=date('H:i:s');
		$staffid=$this->session->userdata('id');
		$this->load->model('Courierrecord');

		if($this->Courierrecord->addcourierentry($intime,$date,$studentid,$studentRoomNo,$staffid))
		{
				redirect('courier/view');
		}
		else {
			$this->session->set_flashdata('loginerror','error');
			redirect('courier/add');
		}

	}
	
	
}