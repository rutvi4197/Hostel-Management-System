<?php 
class Attendence extends CI_Model
{
	public function absentstudentdetail($date)
	{
		$q=$this->db->query("SELECT * from student as s,attendence as a where s.Student_id!=a.Student_id and a.Date='$date' ");
		return $q->result();
	}

	public function outstudentdetail($date)
	{
		$q=$this->db->query("SELECT * from in_out where In_date=' '");
		return $q->result();
	}


	

	

}