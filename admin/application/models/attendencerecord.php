<?php 
class Attendencerecord extends CI_Model
{
	public function attendenceentry($studentid,$date)
	{
		$q=$this->db->query("SELECT EXISTS(SELECT * FROM attendence WHERE Student_id='$studentid' && Date='$date')")
		if($this->db->affected_rows() == 0)
		{
		$q=$this->db->query("insert into attendence values('null','$studentid','$date')");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
		}
		else
		{
			return false;
		}
	}
	public function outentry($studentid,$outtime,$date,$relativeName,$Contact,$place)
	{
		$q=$this->db->query("insert into in_out values('null','$studentid','null','null','$outtime','$date','$place','$Contact','$relativeName')");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
}