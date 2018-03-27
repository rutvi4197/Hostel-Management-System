<?php 
class Studentattendence extends CI_Model
{
	public function absentstudentdetail($date)
	{
		$q=$this->db->query("select DISTINCT  * from student where Student_id NOT IN (select Student_id from attendence where Date='$date') and Student_id NOT IN (select Student_id from in_out where In_date=' ') ");
		return $q->result();
	}

	public function outstudentdetail()
	{
		$q=$this->db->query("select * from in_out as i,student as s where i.In_date=' ' and s.Student_id=i.Student_id ");
		return $q->result();
	}


	

	

}

