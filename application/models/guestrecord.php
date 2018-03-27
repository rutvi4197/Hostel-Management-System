<?php 
class Guestrecord extends CI_Model
{
	public function addguestentry($staffid,$guestName,$guestContact,$purpose,$studentRoomNo,$address,$address2,$city)
	{

		$q=$this->db->query("insert into guest values('null','$staffid','$guestName','$guestContact','$purpose','$studentRoomNo','$address','$address2','$city')");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
	public function viewguest()
	{
		$q=$this->db->query("select * from guest order by Guest_id desc");
		return $q->result();
	}
}