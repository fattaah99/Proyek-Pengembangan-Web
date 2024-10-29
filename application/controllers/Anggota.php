<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Anggota_model');
        $this->load->helper('url');
    }

    // Menampilkan semua data anggota
    public function index() {
        $data['anggota'] = $this->Anggota_model->get_all_anggota();
        $this->load->view('anggota/index', $data);
    }

    // Menambah data anggota
    public function create() {
        if ($this->input->post()) {
            $data = [
                'nis' => $this->input->post('nis'),
                'nama_anggota' => $this->input->post('nama_anggota'),
                'alamat' => $this->input->post('alamat'),
                'nomor_telepon' => $this->input->post('nomor_telepon'),
                'email' => $this->input->post('email'),
                'tanggal_daftar' => $this->input->post('tanggal_daftar'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            ];
            $this->Anggota_model->create_anggota($data);
            redirect('anggota');
        } else {
            $this->load->view('anggota/create');
        }
    }

    // Mengedit data anggota
    public function edit($nis) {
        $data['anggota'] = $this->Anggota_model->get_anggota_by_nis($nis);

        if ($this->input->post()) {
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

            $this->Anggota_model->update_anggota($nis, $data);
            redirect('anggota');
        } else {
            $this->load->view('anggota/edit', $data);
        }
    }

    // Menghapus data anggota
    public function delete($nis) {
        $this->Anggota_model->delete_anggota($nis);
        redirect('anggota');
    }
}