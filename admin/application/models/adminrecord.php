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
	public function viewstaff()
	{
		$q=$this->db->query("select * from staff as s,city as c where c.City_id=s.City_id order by Staff_id desc");
		return $q->result();
	}
}