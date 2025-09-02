<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InternProjekModel extends CI_Model
{
    protected $table = 'intern_projek';

    public function __construct()
    {
        parent::__construct();
    }
    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    // Insert relasi internship ↔ project
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Insert batch relasi
    public function insert_batch($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }

    // Hapus semua relasi berdasarkan internship
    public function delete_by_internship($id_internship)
    {
        $this->db->where('id_internship', $id_internship);
        return $this->db->delete($this->table);
    }

    // Hapus semua relasi berdasarkan project
    public function delete_by_project($id_project)
    {
        $this->db->where('id_project', $id_project);
        return $this->db->delete($this->table);
    }

    // Ambil semua project yang dimiliki internship
    public function get_projects_by_internship($id_internship)
    {
        $this->db->select('ip.id as id_pk,p.*');
        $this->db->from($this->table . ' ip');
        $this->db->join('projek p', 'p.id = ip.id_projek');
        $this->db->where('ip.id_internship', $id_internship);
        return $this->db->get()->result();
    }

    // Ambil semua internship yang punya project tertentu
    public function get_interns_by_project($id_project)
    {
        $this->db->select('i.*');
        $this->db->from($this->table . ' ip');
        $this->db->join('internships i', 'i.id = ip.id_internship');
        $this->db->where('ip.id_project', $id_project);
        return $this->db->get()->result();
    }
}
