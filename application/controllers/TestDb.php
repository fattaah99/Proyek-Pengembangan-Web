<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestDB extends CI_Controller {

    public function index()
    {
        $this->load->database(); // Memuat database sesuai konfigurasi
        $query = $this->db->get('user'); // Mengambil data dari tabel tertentu
        
        echo "<pre>";
        print_r($query->result()); // Menampilkan hasil query
        echo "</pre>";
    }
}