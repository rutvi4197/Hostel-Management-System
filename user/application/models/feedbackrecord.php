<?php 
class Feedbackrecord extends CI_Model
{
	
	

	public function addfeedback($id,$purpose,$feedback)
	{
		
		$q=$this->db->query("insert into feedback values('null','$id','$feedback','$purpose')");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
}