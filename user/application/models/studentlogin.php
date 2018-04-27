<?php 
class Studentlogin extends CI_Model
{
	public function confirmlogin($id,$password)
	{
		$q=$this->db->query("select * from student where Student_id='$id' and Password='$password' and valid=1");
		if($q->num_rows())
		{
			return true;
		}
		else
			return false;

	}
	
	
}