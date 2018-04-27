<?php 
class Studentattendence extends CI_Model
{
	public function absentstudentdetail($date)
	{
		$q=$this->db->query("select DISTINCT  * from student where Student_id NOT IN (select Student_id from attendence where Date='$date') and Student_id NOT IN (select Student_id from in_out where In_date='null')  ");
		return $q->result();
	}

	public function outstudentdetail()
	{
		$q=$this->db->query("select * from in_out as i,student as s where s.Student_id=i.Student_id ");
		return $q->result();
	}
 	public function updateinentry($id,$date,$intime)
	{
		$q=$this->db->query("update in_out set In_time='$intime',In_date='$date' where Id='$id'");

			if($this->db->affected_rows() > 0)
				return true;
			else
				return false;
	}

	

	

}

