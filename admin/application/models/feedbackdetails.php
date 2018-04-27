<?php 
class Feedbackdetails extends CI_Model
{
	public function getfeedbackrecord()
	{
		$q=$this->db->query("select * from feedback order by feedback_id desc");
		return $q->result();
	}

	
	

	

}

