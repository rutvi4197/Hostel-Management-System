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
	public function doinentry($student_id)
	{
			date_default_timezone_set('Asia/Kolkata');
		$date=date('d/m/Y');
		$intime=date('H:i:s');
			$this->load->model('Studentattendence');
		if($this->Studentattendence->updateinentry($student_id,$date,$intime))
		{
			redirect('home');
		}
		else
		{
			redirect('admin/inoutentry');
		}
	}
	
	
}
