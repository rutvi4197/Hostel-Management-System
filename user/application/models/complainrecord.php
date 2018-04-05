<?php 
class Complainrecord extends CI_Model
{
	
	public function getcomplaintype()
	{
		$q=$this->db->query("select * from Type_of_complaint  ");
		return $q->result();
	}
	
	public function getallcomplain()
	{
		$q=$this->db->query("select * from complaint as c,Type_of_complaint as tc,student as s where c.Type_of_complaint=tc.Type_id and Status!=0 and s.Student_id=c.Student_id order by c.Type_of_complaint ");
		return $q->result();
	}

	public function addcomplain($id,$complaintType,$description)
	{
		date_default_timezone_set('Asia/Kolkata');
		$date=date('d/m/Y');
		$q=$this->db->query("insert into complaint values('null','$id','$complaintType','$description','$date',0)");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
}