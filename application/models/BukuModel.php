<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuModel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // Fungsi untuk menambah data anggota
    public function create_buku($data) {
        return $this->db->insert('buku', $data);
    }

    // Fungsi untuk mengambil semua data anggota
    public function get_all_buku() {
        return $this->db->get('buku')->result_array();
    }

    // Fungsi untuk mengambil data anggota berdasarkan NIS
    public function get_buku_by_kode($kode_buku) {
        return $this->db->get_where('buku', ['kode_buku' => $kode_buku])->row_array();
    }
    

    // Fungsi untuk mengupdate data anggota
    public function update_buku($kode_buku, $data) {
        $this->db->where('kode_buku', $kode_buku);
        return $this->db->update('buku', $data);
    }

    // Fungsi untuk menghapus data anggota
    public function delete_buku($kode_buku) {
        $this->db->where('kode_buku', $kode_buku);
        return $this->db->delete('buku');
    }
    public function get_admin($username) {
        return $this->db->get_where('admin', ['username' => $username])->row_array();
    }
}