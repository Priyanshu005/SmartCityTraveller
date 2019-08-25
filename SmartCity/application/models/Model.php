<?php
/**
 * 
 */
class Model extends CI_Model
{
	
	function __construct()
	{
		
	}

	function login($data)
	{
	   
		if ($q=$this->db->get_where('admin',$data)->row()) 
		{
			if ($q->status!=1) 
			{
				return 0;
			}
			return true;
		}
		return false;
	}

	function add($tb,$data)
	{
		if($this->db->insert($tb,$data))
		{
			return true;
		}
		return false;
	}

	function update($tb,$data,$id)
	{
		$this->db->where('id',$id);
		if($this->db->update($tb,$data))
		{
			return true;
		}
		return false;
	}

	function delete($tb,$data)
	{
		$this->db->where($data);
		if($this->db->delete($tb))
		{
			return true;
		}
		return false;

	}

	function get($tb,$data=0)
	{
		if ($data==0) 
		{
			if($query=$this->db->get($tb))
			{
				return $query->result();
			}
			return false;
		}
		else
		{
			if ($query=$this->db->get_where($tb,$data)) 
			{
				return $query->result();
			}
			return false;
		}
	}
}

?>