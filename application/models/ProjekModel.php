<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjekModel extends CI_Model {

    private $table = 'projek';

    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

	public function get_by_internship_id($internship_id) {
		return $this->db->get_where($this->table, ['id_internship' => $internship_id])->result();
	}

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete($this->table);
    }

    public function delete_by_internship($id) {
        return $this->db->where('id_internship', $id)->delete($this->table);
    }

    // join dengan internship
    public function get_with_internship() {
        $this->db->select('projek.*, master_internship.nama as nama_intern');
        $this->db->from($this->table);
        $this->db->join('master_internship', 'master_internship.id = projek.id_internship', 'left');
        return $this->db->get()->result();
    }
}
