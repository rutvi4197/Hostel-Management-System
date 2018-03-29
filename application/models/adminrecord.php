<?php 
class Adminrecord extends CI_Model
{
	public function adminentry($staffid,$password,$staffName,$staffContact,$staffAddress,$staffAddress2,$city)
	{

		$q=$this->db->query("insert into staff values('$staffid','$password','$staffName','$staffContact','$staffAddress','$staffAddress2','$city',1)");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
	
}