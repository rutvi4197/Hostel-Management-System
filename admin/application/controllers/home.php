<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$date=date('d/m/Y',time()-86400);
		$this->load->model('homepage');
		$arr['total']=$this->homepage->gettotalstudent();

		$this->load->model('homepage');
		$arr['out']=$this->homepage->getoutentry();

		$this->load->model('homepage');
		$arr['absent']=$this->homepage->getabsent($date);

		$this->load->model('homepage');
		$arr['complain']=$this->homepage->getcomplain();

		$this->load->view('admin/home',$arr);
	}	
}
