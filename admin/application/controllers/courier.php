<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courier extends CI_Controller {

	
	public function add()
	{


		$this->load->view('admin/add_courier');
	}

	public function view()
	{
		$this->load->model('courierrecord');
		$arr['courier']=$this->courierrecord->viewcourier();

		$this->load->view('admin/courier',$arr);
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

		if($this->Courierrecord->addcourierentry($intime,$date,$studentid,$courierCompany,$studentRoomNo,$staffid))
		{
				redirect('courier/view');
		}
		else {
			$this->session->set_flashdata('loginerror','error');
			redirect('courier/add');
		}

	}
	public function outentry($id)
	{
		date_default_timezone_set('Asia/Kolkata');
		$outdate=date('d/m/Y');
		$outtime=date('H:i:s');

		$this->load->model('Courierrecord');
		

		if($this->Courierrecord->updateinentry($id,$outtime,$outdate))
		{
				redirect('courier/view');
		}
		else {
			$this->session->set_flashdata('loginerror','error');
			redirect('courier/view');
		}
	}
	
	
}