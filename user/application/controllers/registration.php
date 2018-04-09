<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Registration extends CI_Controller {
// var $studentid;//,$studentName,$studentlastname,$studentDOB,$studentroomno,$studentCourse;
// //var  $studentContact,$studentEmail,$Address,$Address2,$city,$tempAddress,$tempAddress2,$tempcity;
// //var $fatherName,$motherName,$parentContact;
	
	public function index()
	{
		$this->load->view('user/studentRegistration1');
	}
	

	public function form1()
	{
		$studentid=$this->input->post('studentid');
		$studentName=$this->input->post('firstName');
		$studentlastname=$this->input->post('studentlastname');
		$studentDOB=$this->input->post('studentDOB');
		$studentroomno=$this->input->post('studentroomno');
		$studentCourse=$this->input->post('studentCourse');
		$this->session->set_userdata('studentid',$studentid);
		$this->session->set_userdata('studentName',$studentName);
		$this->session->set_userdata('studentlastname',$studentlastname);
		$this->session->set_userdata('studentDOB',$studentDOB);
		$this->session->set_userdata('studentroomno',$studentroomno);
		$this->session->set_userdata('studentCourse',$studentCourse);
		redirect('registration/viewform2');
		
	}
	public function form2()
	{
		$studentContact=$this->input->post('studentContact');
		$studentEmail=$this->input->post('studentEmail');
		$studentbg=$this->input->post('studentbg');
		$Address=$this->input->post('Address');
		$Address2=$this->input->post('Address2');
		$city=$this->input->post('city');
		$tempAddress=$this->input->post('tempAddress');
		$tempAddress2=$this->input->post('tempAddress2');
		$tempcity=$this->input->post('tempcity');
		
		$this->session->set_userdata('studentContact',$studentContact);
		$this->session->set_userdata('studentEmail',$studentEmail);
		$this->session->set_userdata('studentbg',$studentbg);
		$this->session->set_userdata('Address',$Address);
		$this->session->set_userdata('Address2',$Address2);
		$this->session->set_userdata('city',$city);
		$this->session->set_userdata('tempAddress',$tempAddress);
		$this->session->set_userdata('tempAddress2',$tempAddress2);
		$this->session->set_userdata('tempcity',$tempcity);


		redirect('registration/viewform3');
		
	}
	public function form3()
	{
		$fatherName=$this->input->post('fatherName');
		$motherName=$this->input->post('motherName');
		$parentContact=$this->input->post('parentContact');

		$this->session->set_userdata('fatherName',$fatherName);
		$this->session->set_userdata('motherName',$motherName);
		$this->session->set_userdata('parentContact',$parentContact);

		
		redirect('registration/viewform4');
		
	}
	public function form4()
	{
		$password=$this->input->post('password');
		$password2=$this->input->post('password2');
		$hmc=0;

		$studentid = $this->session->userdata('studentid');
		$studentName = $this->session->userdata('studentName');
		$studentlastname = $this->session->userdata('studentlastname');
		$studentDOB = $this->session->userdata('studentDOB');
		$studentroomno = $this->session->userdata('studentroomno');
		$studentCourse = $this->session->userdata('studentCourse');
		$studentContact = $this->session->userdata('studentContact');
		$studentEmail = $this->session->userdata('studentEmail');
		$studentbg = $this->session->userdata('studentbg');
		$Address = $this->session->userdata('Address');
		$Address2 = $this->session->userdata('Address2');
		$city = $this->session->userdata('city');
		$tempAddress = $this->session->userdata('tempAddress');
		$tempAddress2 = $this->session->userdata('tempAddress2');
		$tempcity = $this->session->userdata('tempcity');
		$fatherName = $this->session->userdata('fatherName');
		$motherName = $this->session->userdata('motherName');
		$parentContact = $this->session->userdata('parentContact');
		

echo $studentid,$studentName,$studentlastname,$parentContact;
		if($password==$password2)
		{

			$this->load->model('studentrecord');
			if($this->studentrecord->addstudent($studentid,$studentName,$studentlastname,$fatherName,$motherName,$studentContact,$parentContact,$studentDOB,$studentroomno,$studentCourse,$studentEmail,$password,$tempAddress,$tempAddress2,$tempcity,$studentbg,$hmc,$Address,$Address2,$city))
			{
				$this->session->set_userdata('id',$studentid);
				$this->session->unset_userdata('studentid');
				$this->session->unset_userdata('studentName');
				$this->session->unset_userdata('studentlastname');
				$this->session->unset_userdata('studentDOB');
				$this->session->unset_userdata('studentroomno');
				$this->session->unset_userdata('studentCourse');
				$this->session->unset_userdata('studentContact');
				$this->session->unset_userdata('studentEmail');
				$this->session->unset_userdata('studentbg');
				$this->session->unset_userdata('Address');
				$this->session->unset_userdata('Address2');
				$this->session->unset_userdata('city');
				$this->session->unset_userdata('tempAddress');
				$this->session->unset_userdata('tempAddress2');
				$this->session->unset_userdata('tempcity');
				$this->session->unset_userdata('fatherName');
				$this->session->unset_userdata('motherName');
				$this->session->unset_userdata('parentContact');

				redirect('login');
			}
			else
			{
				redirect('registration');
			}

		}
		
	}


	public function viewform2()
	{
		$studentid = $this->session->flashdata('studentid');
		echo $studentid;
		$this->load->model('studentrecord');
		$arr['city']=$this->studentrecord->getallcity();
		$arr['tempcity']=$this->studentrecord->getallcity();
		$this->load->view('user/studentRegistration2',$arr);
	}	
	public function viewform3()
	{
		
		$this->load->view('user/studentRegistration3');
	}	
		public function viewform4()
	{
		
		$this->load->view('user/studentRegistration4');
	}	

	
}
