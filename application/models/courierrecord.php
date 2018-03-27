<?php 
class Courierrecord extends CI_Model
{
	public function addcourierentry($intime,$date,$studentid,$studentRoomNo,$staffid)
	{

		$q=$this->db->query("insert into courier values('null','$intime','$date','$studentid','$studentRoomNo','null','null','$staffid')");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
	public function viewcourier()
	{
		$q=$this->db->query("select * from courier order by Id desc");
		return $q->result();
	}
}