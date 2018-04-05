<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

	
	public function add()
	{


		$this->load->view('admin/service_in');
	}

	public function view()
	{
		$this->load->model('servicerecord');
		$arr['service']=$this->servicerecord->viewservice();

		$this->load->view('admin/service_out',$arr);
	}
	public function addservice()
	{
		$name=$this->input->post('name');
		$purpose=$this->input->post('purpose');
		
		date_default_timezone_set('Asia/Kolkata');
		$date=date('d/m/Y');
		$intime=date('H:i:s');

		$this->load->model('Servicerecord');

		if($this->Servicerecord->addservicentry($name,$purpose,$intime,$date))
		{
				redirect('service/view');
		}
		else {
			$this->session->set_flashdata('loginerror','error');
			redirect('service/add');
		}

	}


	public function outentry($id)
	{
		date_default_timezone_set('Asia/Kolkata');
		
		$outtime=date('H:i:s');

		$this->load->model('Servicerecord');

		if($this->Servicerecord->updateinentry($id,$outtime))
		{
				redirect('service/view');
		}
		else {
			$this->session->set_flashdata('loginerror','error');
			redirect('service/view');
		}
	}
	
	
}