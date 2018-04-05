<?php 
class Checkoutrecord extends CI_Model
{
	
	public function docheckout($id,$studentName,$studentroomno,$date,$outtime)
	{
		$q=$this->db->query("insert into checkout values('null','$id','$studentName','$studentroomno','$date','$outtime',0)");
		if($this->db->affected_rows() >= 0)
			{
				$q=$this->db->query("delete from student where Student_id='$id'");
				if($this->db->affected_rows()>=0)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		else
			return false;
	}
	
	
}