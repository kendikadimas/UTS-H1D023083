<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_all_alumni() {
        return $this->db->get('alumni')->result();
    }

    public function get_alumni_by_id($id) {
        return $this->db->get_where('alumni', array('id' => $id))->row();
    }

    public function tambah_alumni($data) {
        $this->db->insert('alumni', $data);
        return $this->db->insert_id();
    }

    public function update_alumni($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('alumni', $data);
    }

    public function hapus_alumni($id) {
        return $this->db->delete('alumni', array('id' => $id));
    }

    public function cari_alumni($keyword, $tahun_lulus = null) {
        $this->db->like('nama', $keyword);
        
        if ($tahun_lulus) {
            $this->db->where('tahun_lulus', $tahun_lulus);
        }
        
        return $this->db->get('alumni')->result();
    }

    public function get_statistik_alumni() {
        $this->db->select('tahun_lulus, COUNT(*) as jumlah');
        $this->db->group_by('tahun_lulus');
        $this->db->order_by('tahun_lulus', 'ASC');
        return $this->db->get('alumni')->result();
    }
}