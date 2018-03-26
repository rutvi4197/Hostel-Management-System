<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

	
	public function add()
	{


		$this->load->view('admin/service_in');
	}

	public function view()
	{


		$this->load->view('admin/service_out');
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
				redirect('home');
		}
		else {
			$this->session->set_flashdata('loginerror','error');
			redirect('login');
		}

	}
	
	
}