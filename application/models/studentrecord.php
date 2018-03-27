<?php 
class Studentrecord extends CI_Model
{
	
	public function viewstudent()
	{
		$q=$this->db->query("select * from student as s,city as c where s.p_city_id=c.City_id order by Student_id desc");
		return $q->result();
	}
}