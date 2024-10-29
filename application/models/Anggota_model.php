<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // Fungsi untuk menambah data anggota
    public function create_anggota($data) {
        return $this->db->insert('anggota', $data);
    }

    // Fungsi untuk mengambil semua data anggota
    public function get_all_anggota() {
        return $this->db->get('anggota')->result_array();
    }

    // Fungsi untuk mengambil data anggota berdasarkan NIS
    public function get_anggota_by_nis($nis) {
        return $this->db->get_where('anggota', ['nis' => $nis])->row_array();
    }

    // Fungsi untuk mengupdate data anggota
    public function update_anggota($nis, $data) {
        $this->db->where('nis', $nis);
        return $this->db->update('anggota', $data);
    }

    // Fungsi untuk menghapus data anggota
    public function delete_anggota($nis) {
        $this->db->where('nis', $nis);
        return $this->db->delete('anggota');
    }
}