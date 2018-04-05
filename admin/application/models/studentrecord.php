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
}