<?php 
class Login extends CI_Model
{
	public function confirmlogin($id,$password)
	{
		$q=$this->db->query("select * from staff where id='$id' and Password='$password'");
		return $q->result();
	}
}