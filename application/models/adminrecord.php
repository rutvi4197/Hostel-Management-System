<?php 
class Adminrecord extends CI_Model
{
	public function attendenceentry($studentid,$date)
	{

		$q=$this->db->query("insert into attendence values('null','$studentid','$date')");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
	
}