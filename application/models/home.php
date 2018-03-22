<?php 
class Home extends CI_Model
{
	public function gettotalstudent()
	{
		$q=$this->db->query("select count(Student_id) from student ");
		return $q->result();
	}
	public function getabsent($date)
	{

			$q=$this->db->query("select count(*) from student as s,attendence as a,in_out as i where s.Student_id!=a.Student_id and s.Student_id!=i.Student_id and i.in_date=" " and a.Date='$date' ");
		return $q->result();

	}
	public function getoutentry()
	{
		$q=$this->db->query("select count(*) from student as s,in_out as i where s.Student_id!=i.Student_id and i.in_date=' ' ");
		return $q->result();
	}

	public function getcomplain()
	{
		$q=$this->db->query("select * from complaint where Status=0 order by complaint_id desc");
		return $q->result();
	}

}