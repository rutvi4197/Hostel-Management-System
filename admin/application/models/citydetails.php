<?php 
class Citydetails extends CI_Model
{
	public function getcitydetails()
	{
		$q=$this->db->query("select * from city");
		return $q->result();
	}

	
	

	

}

