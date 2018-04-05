<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Complain extends CI_Controller {


	public function addcomplain()
	{
		$this->load->model('complainrecord');
		$arr['type']=$this->complainrecord->getcomplaintype();
		$this->load->view('user/add_complaint',$arr);
	}

	public function viewcomplain()
	{
		
		$this->load->view('user/complaintCheckStatus');
	}

	public function docomplain()
	{
		$complaintType=$this->input->post('complaintType');
		$description=$this->input->post('description');

		$id=$this->session->userdata('id');

		$this->load->model('complainrecord');
		if($this->complainrecord->addcomplain($id,$complaintType,$description))
		{
			redirect('complain/viewcomplain');
		}
		else
		{

		}
	}
	
	
}