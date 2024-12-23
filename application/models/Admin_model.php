<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // Fungsi untuk menambah data anggota
    public function create_admin($data) {
        return $this->db->insert('admin', $data);
    }

    // Fungsi untuk mengambil semua data anggota
    public function get_all_admin() {
        return $this->db->get('admin')->result_array();
    }

    // Fungsi untuk mengambil data anggota berdasarkan NIS
    public function get_admin_by_id($id) {
        return $this->db->get_where('admin', ['id_admin' => $id])->row_array();
    }

    // Fungsi untuk mengupdate data anggota
    public function update_admin($id_admin, $data) {
        $this->db->where('id_admin', $id_admin);
        return $this->db->update('admin', $data);
    }

    // Fungsi untuk menghapus data anggota
    public function delete_admin($id) {
        $this->db->where('id_admin', $id);
        return $this->db->delete('admin');
    }
    public function get_admin($username) {
        return $this->db->get_where('admin', ['username' => $username])->row_array();
    }
}