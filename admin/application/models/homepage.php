<?php 
class Homepage extends CI_Model
{
	public function gettotalstudent()
	{
		$q=$this->db->query("select count(Student_id)'cnt' from student ");
		return $q->result();
	}
	public function getabsent($date)
	{

			$q=$this->db->query("select DISTINCT  count(*)'absent' from student where Student_id NOT IN (select Student_id from attendence where Date='$date') and Student_id NOT IN (select Student_id from in_out where In_date='null') ");
		return $q->result();

	}
	public function getoutentry()
	{
		$q=$this->db->query("select count(*)'out' from in_out where In_date='null'");
		return $q->result();
	}

	public function getcomplain()
	{
		$q=$this->db->query("select * from complaint as c,Type_of_complaint as tc,student as s where c.Type_of_complaint=tc.Type_id and Status=0 and s.Student_id=c.Student_id order by complaint_id desc");
		return $q->result();
	}



}