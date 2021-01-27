<?php
class Model_empresas extends CI_Model
{


	/**
	 * Retorna todas as empresas
	 */
	public function get_all()
	{
		$this->db->select('E.*');
		$this->db->from('empresas E');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get($id)
	{

		$this->db->select('E.*');
		$this->db->from('empresas E');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insert($data)
	{
		$this->db->insert('empresas', $data);

		// GET ID
		$id = $this->db->insert_id();
		//RETURN ID
		return $id;
	}

	public function edit($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('empresas', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('empresas');
	}
}
