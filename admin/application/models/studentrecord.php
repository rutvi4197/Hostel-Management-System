<?php 
class Studentrecord extends CI_Model
{
	
	public function viewstudent()
	{
		$q=$this->db->query("select * from student as s,city as c where s.p_city_id=c.City_id order by Student_id desc");
		return $q->result();
	}
	public function viewroomdetails()
	{
		$q=$this->db->query("select * from room ");
		return $q->result();	
	}
	public function roomwisename($no)
	{
		$q=$this->db->query("select * from student where Room_no='$no'");
		return $q->result();
	}

	public function searcroomdetails($optradio,$floor)
	{
		if($floor=="all")
		{
			$q=$this->db->query("select * from room where Room_no like '$optradio%'");
		}
		else
		$q=$this->db->query("select * from room where Room_no like '$optradio$floor%'");
		return $q->result();
	}


	public function approvestudentdetail()
	{
		$q=$this->db->query("select * from student where valid=0");
		return $q->result();
	}


	public function updatestudentdetail($id)
	{
		$q=$this->db->query("update student set valid=1 where Student_id='$id'");
		if($this->db->affected_rows() > 0)
		{
			return true;	
		}
			else
		{
				return false;
		}
	}

	public function deletestudent($id)
	{
		$q=$this->db->query("delete from student  where Student_id='$id'");
		if($this->db->affected_rows() > 0)
				return true;
			else
				return false;
	}
	public function leavestudentdetail()
	{
		$q=$this->db->query("select * from checkout where Staff_id=0");
		return $q->result();
	}

	public function checkoutstudent($id,$staffid)
	{
		$q=$this->db->query("update checkout set Staff_id='$staffid' where Id='$id'");
		if($this->db->affected_rows() > 0)
				return true;
			else
				return false;
	}
}