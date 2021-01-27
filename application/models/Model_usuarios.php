<?php

class Model_usuarios extends CI_Model
{

	public function get_all()
	{
		return $this->db->get('usuarios')
			->result();
	}

	public function get($id)
	{

		$this->db->select('U.*');
		$this->db->from('usuarios U');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insert($data)
	{
		$this->db->insert('usuarios', $data);

		// GET ID
		$id = $this->db->insert_id();
		//RETURN ID
		return $id;
	}

	public function edit($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('usuarios', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('usuarios');
	}
}
