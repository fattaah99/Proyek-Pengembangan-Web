<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PeminjamanModel');
        $this->load->model('Anggota_model');
        $this->load->model('BukuModel');
        $this->load->helper('auth_helper');
        check_login(); // Pastikan pengguna sudah login


        // Pastikan admin sudah login
        if (!$this->session->userdata('id_admin')) {
            redirect('auth/login'); // Redirect ke halaman login jika belum login
        }
    }

    public function index() {
        $data['peminjaman'] = $this->PeminjamanModel->get_all_peminjaman();
        $this->load->view('layout/nav');
        $this->load->view('peminjaman/index', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $kode_buku = $this->input->post('kode_buku');
            
            // Cek stok buku
            $buku = $this->BukuModel->get_buku_by_kode($kode_buku);
            if ($buku['stok_buku'] <= 0) {
                $this->session->set_flashdata('error', 'Stok buku habis.');
                redirect('peminjaman/create');
            }

            $data = [
                'id_admin' => $this->session->userdata('id_admin'), // Ambil dari session
                'nis' => $this->input->post('nis'),
                'kode_buku' => $this->input->post('kode_buku'),
                'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
                'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
                'status_peminjaman' => 'dipinjam',
            ];

            // Insert data dan kurangi stok
            $this->PeminjamanModel->insert_peminjaman($data);

            // Redirect ke halaman peminjaman
            redirect('peminjaman');
        } else {
            $data['anggota'] = $this->Anggota_model->get_all_anggota();
            $data['buku'] = $this->BukuModel->get_all_buku();
            $this->load->view('layout/nav');
            $this->load->view('peminjaman/create', $data);
        }
    }
}