<?php

class d_register extends CI_Model
{
	function cek_login($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambah_data_register($data)
	{
		$this->db->insert('admin', $data);
	}

	public function data_admin()
	{
		$query = $this->db->get('admin');
		return $query->result();
	}
}
