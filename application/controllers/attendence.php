<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attendence extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Studentattendence');
		$date=date('d/m/Y');
		$arr['absentstudent']=$this->Studentattendence->absentstudentdetail($date);


		$this->load->view('admin/attendance',$arr);
	}
	public function inoutentry()
	{
		$this->load->model('Studentattendence');
		$arr['outstudent']=$this->Studentattendence->outstudentdetail();


		$this->load->view('admin/markInOutEntry',$arr);
	}

	
	
}
