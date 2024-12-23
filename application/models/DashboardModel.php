<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // Fungsi untuk menjumlahkan nilai pada kolom tertentu
    public function count_nis() {
        $this->db->where('nis IS NOT NULL'); // Hanya hitung baris yang memiliki nilai
        return $this->db->count_all_results('anggota'); // Hitung total baris di tabel anggota
    }
    public function count_kode_buku() {
        $this->db->where('kode_buku IS NOT NULL'); // Hanya hitung baris yang memiliki nilai
        return $this->db->count_all_results('buku'); // Hitung total baris di tabel anggota
    }
    public function count_peminjaman() {
        $this->db->where('id_peminjaman IS NOT NULL'); // Hanya hitung baris yang memiliki nilai
        return $this->db->count_all_results('peminjaman'); // Hitung total baris di tabel anggota
    }
}