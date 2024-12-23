<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Memuat library session
        $this->load->model('Anggota_model');
        $this->load->helper(['url', 'form']);
        $this->load->library('upload');
        $this->load->helper('auth_helper');
        check_login(); // Pastikan pengguna sudah login
    }

    // Menampilkan semua data anggota
    public function index() {
        $data['anggota'] = $this->Anggota_model->get_all_anggota();
        $this->load->view('layout/nav'); // Include navigasi
        $this->load->view('anggota/index', $data);
    }

    // Menambah data anggota
    public function create() {
        $data['message'] = ''; // Variabel untuk menampung pesan notifikasi
    
        if ($this->input->post()) {
            $config['upload_path'] ='./uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2 MB
            $config['file_name'] = uniqid();

            // if (!is_dir(FCPATH . 'uploads/')) {
            //     echo 'Upload path is not valid: ' . FCPATH . 'uploads/';
            //     exit;
            // }
    
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
    
            if (!$this->upload->do_upload('foto')) {
                // Jika gagal upload, simpan pesan error ke variabel
                $data['message'] = '<div class="alert alert-danger">' . $this->upload->display_errors() . '</div>';
            } else {
                $upload_data = $this->upload->data();
                $anggota_data = [
                    'nis' => $this->input->post('nis'),
                    'nama_anggota' => $this->input->post('nama_anggota'),
                    'alamat' => $this->input->post('alamat'),
                    'nomor_telepon' => $this->input->post('nomor_telepon'),
                    'email' => $this->input->post('email'),
                    'tanggal_daftar' => $this->input->post('tanggal_daftar'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                    'foto' => $upload_data['file_name']
                ];
    
                // Simpan data ke database
                if ($this->Anggota_model->create_anggota($anggota_data)) {
                    $data['message'] = '<div class="alert alert-success">Data anggota berhasil ditambahkan!</div>';
                } else {
                    $data['message'] = '<div class="alert alert-danger">Gagal menambahkan data anggota.</div>';
                }
            }
        }
    
        // Load view dengan pesan
        $this->load->view('layout/nav');
        $this->load->view('anggota/create', $data);
    }
    
    

    // Mengedit data anggota
    public function edit($nis) {
        $data['anggota'] = $this->Anggota_model->get_anggota_by_nis($nis);

        if ($this->input->post()) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2 MB
            $config['file_name'] = uniqid();

            $this->upload->initialize($config);

            $upload_success = $this->upload->do_upload('foto');
            $upload_data = $this->upload->data();

            $data = [
                'nama_anggota' => $this->input->post('nama_anggota'),
                'alamat' => $this->input->post('alamat'),
                'nomor_telepon' => $this->input->post('nomor_telepon'),
                'email' => $this->input->post('email'),
                'tanggal_daftar' => $this->input->post('tanggal_daftar'),
            ];

            // Hanya update password jika ada input baru
            if ($this->input->post('password')) {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            }

            // Update foto jika ada
            if ($upload_success) {
                $data['foto'] = $upload_data['file_name'];
            }

            $this->Anggota_model->update_anggota($nis, $data);
            redirect('anggota');
        } else {

            $this->load->view('layout/nav');
            $this->load->view('anggota/edit', $data);
        }
    }

    // Menghapus data anggota
    public function delete($nis) {
        $this->Anggota_model->delete_anggota($nis);
        redirect('anggota');
    }
}