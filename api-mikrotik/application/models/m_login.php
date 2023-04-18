<?php

class M_login extends CI_Model
{
	function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambah_data_login($data)
	{
		$this->db->insert('login', $data);
	}

	public function data_login()
	{
		$query = $this->db->get('login');
		return $query->result();
	}

	public function autolog($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('login');
		return $query->result();
	}
}
