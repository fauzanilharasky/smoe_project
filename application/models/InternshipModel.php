<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InternshipModel extends CI_Model {

    private $table = 'master_internship';

    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
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

    // contoh join dengan departemen
    public function get_with_departemen() {
        $this->db->select('master_internship.*, departemen.nama as nama_departemen');
        $this->db->from($this->table);
        $this->db->join('departemen', 'departemen.id = master_internship.id_dept', 'left');
        return $this->db->get()->result();
    }
}
