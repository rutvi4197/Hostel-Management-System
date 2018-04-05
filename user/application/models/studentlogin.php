<?php 
class Studentlogin extends CI_Model
{
	public function confirmlogin($id,$password)
	{
		$q=$this->db->query("select * from student where Student_id='$id' and Password='$password'");
		if($q->num_rows())
		{
			return true;
		}
		else
			return false;

	}
	public function dologout($id)
	{
		date_default_timezone_set('Asia/Kolkata');
			$date=date('d/m/Y');
			$outtime=date('H:i:s');
			$q=$this->db->query("update staff_attendence set Out_time='$outtime' where Staff_id='$id' and Date='$date'");
			if($this->db->affected_rows() >= 0)
				return true;
			else
				return false;
	}
}