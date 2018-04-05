<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Complain extends CI_Controller {


	public function viewcomplain()
	{
		$this->load->model('complainrecord');
		
		$arr['complain']=$this->complainrecord->getcomplain();
		$this->load->view('admin/complain',$arr);
	}

	public function allcomplain()
	{
		$this->load->model('complainrecord');
		
		$arr['complain']=$this->complainrecord->getallcomplain();
		$this->load->view('admin/complain_status',$arr);
	}

	public function changestatus($id)
	{
		
		
		$this->load->model('complainrecord');

		if($this->complainrecord->changestatus($id))
		{
				redirect('complain/allcomplain');
		}
		else {
			$this->session->set_flashdata('loginerror','error');
			redirect('complain/viewcomplain');
		}

	}
	
	
}