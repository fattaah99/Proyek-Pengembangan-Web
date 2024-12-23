<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Memuat library session
        $this->load->model('BukuModel');
        $this->load->helper(['url', 'form']);
        $this->load->library('upload');
        $this->load->helper('auth_helper');
        check_login(); // Pastikan pengguna sudah login
    }

    // Menampilkan semua data anggota
    public function index() {
        $data['buku'] = $this->BukuModel->get_all_buku();
        $this->load->view('layout/nav'); // Include navigasi
        $this->load->view('buku/index', $data);
    }

    // Menambah data anggota
    public function create() {
        $data['message'] = ''; // Variabel untuk menampung pesan notifikasi
    
        if ($this->input->post()) {
            $config['upload_path'] = './uploads/buku/'; // Path untuk folder buku
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Jenis file yang diperbolehkan
            $config['max_size'] = 2048; // Ukuran maksimal file (2 MB)
            $config['file_name'] = uniqid(); // Nama file unik untuk menghindari konflik
    
            // // Cek apakah folder upload tersedia
            // if (!is_dir(FCPATH . 'uploads/buku/')) {
            //     mkdir(FCPATH . 'uploads/buku/', 0777, true); // Buat folder jika belum ada
            // }
    
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
    
            if (!$this->upload->do_upload('foto')) {
                // Jika gagal upload, simpan pesan error ke variabel
                $data['message'] = '<div class="alert alert-danger">' . $this->upload->display_errors() . '</div>';
            } else {
                $upload_data = $this->upload->data();
                $buku_data = [
                    'kode_buku' => $this->input->post('kode_buku'),
                    'judul_buku' => $this->input->post('judul_buku'),
                    'penulis' => $this->input->post('penulis'),
                    'kategori' => $this->input->post('kategori'),
                    'stok_buku' => $this->input->post('stok_buku'),
                    'foto' => $upload_data['file_name'] // Simpan nama file
                ];
    
                // Simpan data ke database
                if ($this->BukuModel->create_buku($buku_data)) {
                    $data['message'] = '<div class="alert alert-success">Data buku berhasil ditambahkan!</div>';
                } else {
                    $data['message'] = '<div class="alert alert-danger">Gagal menambahkan data buku.</div>';
                }
            }
        }
        
    
        // Load view dengan pesan
        $this->load->view('layout/nav'); // Include navigasi
        $this->load->view('buku/create', $data);
    }
    
    
    

    // Mengedit data anggota
    // Mengedit data buku
    public function edit($kode_buku) {
        // Mendapatkan data buku berdasarkan kode_buku
        $data['buku'] = $this->BukuModel->get_buku_by_kode($kode_buku);
    
        if ($this->input->post()) {
            // Konfigurasi upload file
            $config['upload_path'] = './uploads/buku';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2 MB
            $config['file_name'] = uniqid();
    
            $this->upload->initialize($config);
    
            $upload_success = $this->upload->do_upload('foto');
            $upload_data = $this->upload->data();
    
            // Menyiapkan data untuk update
            $data = [
                'judul_buku' => $this->input->post('judul_buku'),
                'penulis' => $this->input->post('penulis'),
                'kategori' => $this->input->post('kategori'),
                'stok_buku' => $this->input->post('stok_buku'),
            ];
    
            // Update foto jika ada
            if ($upload_success) {
                $data['foto'] = $upload_data['file_name'];
            }
    
            // Memanggil fungsi update_buku di model
            $this->BukuModel->update_buku($kode_buku, $data);
    
            // Redirect setelah update
            redirect('buku');
        } else {
            // Load view dengan data buku
            $this->load->view('layout/nav'); // Include navigasi
            $this->load->view('buku/edit', $data);
        }
    }
    


    // Menghapus data anggota
    public function delete($kode_buku) {
        $this->BukuModel->delete_buku($kode_buku);
        redirect('buku');
    }
}