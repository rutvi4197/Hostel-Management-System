<?php 
class Complainrecord extends CI_Model
{
	
	public function getcomplain()
	{
		$q=$this->db->query("select * from complaint as c,Type_of_complaint as tc,student as s where c.Type_of_complaint=tc.Type_id and Status=0 and s.Student_id=c.Student_id order by c.Type_of_complaint ");
		return $q->result();
	}
	public function changestatus($id)
	{
		$q=$this->db->query("update complaint set Status=1 where complaint_id='$id'");
		if($this->db->affected_rows() > 0)
				return true;
			else
				return false;
	}
	public function getallcomplain()
	{
		$q=$this->db->query("select * from complaint as c,Type_of_complaint as tc,student as s where c.Type_of_complaint=tc.Type_id and Status!=0 and s.Student_id=c.Student_id order by c.Type_of_complaint ");
		return $q->result();
	}
}