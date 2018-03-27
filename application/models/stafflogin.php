<?php 
class Stafflogin extends CI_Model
{
	public function confirmlogin($id,$password)
	{
		$q=$this->db->query("select * from staff where Staff_id='$id' and Password='$password' and Is_active=1");
		if($q->num_rows())
		{
			date_default_timezone_set('Asia/Kolkata');
			$date=date('d/m/Y');
			$intime=date('H:i:s');
			$p=$this->db->query("select * from staff_attendence where Staff_id='$id' and Date='$date'");
			if($p->num_rows())
			{
				return true;
			}
			else{
			$q=$this->db->query("insert into staff_attendence values('null','$id','$intime','null','$date')");
			if($this->db->affected_rows() >= 0)
				return true;
			else
				return false;
			}
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