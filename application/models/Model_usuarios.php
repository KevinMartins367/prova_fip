<?php

class Model_usuarios extends CI_Model
{

	public function get_all()
	{
		$this->db->select('U.*, E.nome as empresa_nome');
		$this->db->from('usuarios U');
		$this->db->join('empresas E', 'E.id = U.empresa_id');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get($id)
	{

		$this->db->select('U.*, E.nome as empresa_nome');
		$this->db->from('usuarios U');
		$this->db->join('empresas E', 'E.id = U.empresa_id');
		$this->db->where('U.id', $id);
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
