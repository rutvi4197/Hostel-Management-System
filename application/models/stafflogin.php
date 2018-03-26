<?php 
class Stafflogin extends CI_Model
{
	public function confirmlogin($id,$password)
	{
		$q=$this->db->query("select * from staff where Staff_id='$id' and Password='$password'");
		if($q->num_rows())
			return true;
		else
			return false;
	}
}