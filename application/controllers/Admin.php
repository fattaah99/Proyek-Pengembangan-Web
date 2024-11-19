<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->helper('url');
    }

    // Menampilkan semua data anggota
    public function index() {
        $data['admin'] = $this->Admin_model->get_all_admin();
        $this->load->view('admin/index', $data);
    }

    //Menambah data anggota
    public function create() {
        if ($this->input->post()) {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'nama_admin' => $this->input->post('nama_admin'),
               
            ];
            $this->Admin_model->create_admin($data);
            redirect('admin');
        } else {
            $this->load->view('admin/create');
        }
    }

    // // Mengedit data anggota
    public function edit($id_admin) {
        $data['admin'] = $this->Admin_model->get_admin_by_id($id_admin);

        if ($this->input->post()) {
            $data = [
               'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'nama_admin' => $this->input->post('nama_admin'),
            ];

            // Hanya update password jika ada input baru
            if ($this->input->post('password')) {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
            }

            $this->Admin_model->update_admin($id_admin, $data);
            redirect('admin');
        } else {
            $this->load->view('admin/edit', $data);
        }
    }

    // // Menghapus data anggota
    // public function delete($nis) {
    //     $this->Anggota_model->delete_anggota($nis);
    //     redirect('anggota');
    // }
}