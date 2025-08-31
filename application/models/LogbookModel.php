<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogbookModel extends CI_Model
{

	private $table = 'logbook';

	public function get_all()
	{
		return $this->db->get($this->table)->result();
	}

	public function get_by_id($id)
	{
		return $this->db->get_where($this->table, ['id' => $id])->row();
	}

	public function get_by_projek_and_intern_id($projek_id, $intern_id)
	{
		return $this->db->get_where($this->table, [
			'id_projek' => $projek_id,
			'id_internship' => $intern_id
		])->result();
	}


	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function update($id, $data)
	{
		return $this->db->where('id', $id)->update($this->table, $data);
	}

	public function delete($id)
	{
		return $this->db->where('id', $id)->delete($this->table);
	}

	// join dengan internship dan projek
	public function get_full_logbook()
	{
		$this->db->select('logbook.*, master_internship.nama as nama_intern, projek.nama as nama_projek');
		$this->db->from($this->table);
		$this->db->join('master_internship', 'master_internship.id = logbook.id_internship', 'left');
		$this->db->join('projek', 'projek.id = logbook.id_projek', 'left');
		return $this->db->get()->result();
	}
}
