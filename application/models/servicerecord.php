<?php 
class Servicerecord extends CI_Model
{
	public function addservicentry($name,$purpose,$intime,$date)
	{

		$q=$this->db->query("insert into visitor values('null','$name','$purpose','$intime','null','$date')");
		if($this->db->affected_rows() >= 0)
			return true;
		else
			return false;
	}
	public function viewservice()
	{
		$q=$this->db->query("select * from visitor order by V_id desc");
		return $q->result();
	}
}