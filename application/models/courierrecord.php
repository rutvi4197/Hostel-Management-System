<?php 
class Courierrecord extends CI_Model
{
	public function addcourierentry($intime,$date,$studentid,$company,$studentRoomNo,$staffid)
	{

		$q=$this->db->query("insert into courier values('null','$intime','$date','$studentid','$company','$studentRoomNo','null','null','$staffid')");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
	public function viewcourier()
	{
		$q=$this->db->query("select * from courier as c,staff as s,student as st where s.Staff_id=c.Staff_id and c.Student_id=st.Student_id order by Id desc");
		return $q->result();
	}
	public function updateinentry($id,$outtime,$date)
	{
		$q=$this->db->query("update courier set Out_time='$outtime',Out_date='$date' where Id='$id'");

			if($this->db->affected_rows() > 0)
				return true;
			else
				return false;
	}
}