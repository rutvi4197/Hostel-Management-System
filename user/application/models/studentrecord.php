<?php 
class Studentrecord extends CI_Model
{
	
	public function getallcity()
	{
		$q=$this->db->query("select * from city  ");
		return $q->result();
	}
	
	public function addstudent($studentid,$studentName,$studentLastname,$fatherName,$motherName,$studentContact,$parentContact,$studentDOB,$studentroomno,$studentCourse,$studentEmail,$password,$tempAddress,$tempAddress2,$tempcity,$studentbg,$hmc,$Address,$Address2,$city)
	{
		$q=$this->db->query("insert into student values('$studentid','$studentName','$studentLastname','$fatherName','$motherName','$studentContact','$parentContact','$studentDOB','$studentroomno','$studentCourse','$studentEmail','$password','$tempAddress','$tempAddress2','$tempcity','$studentbg','$hmc','$Address','$Address2','$city')");

		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
	
}