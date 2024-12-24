<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuUser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Memuat library session
        $this->load->model('BukuModel');
       
    }

    // Menampilkan semua data anggota
    public function index() {
        $data['buku'] = $this->BukuModel->get_all_buku();
       
        $this->load->view('buku/user/index', $data);
    }

    
}