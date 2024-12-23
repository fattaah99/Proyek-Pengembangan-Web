<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function login() {
        if ($this->session->userdata('logged_in')) {
            redirect('admin');
        }

        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $admin = $this->Admin_model->get_admin($username);

            if ($admin && password_verify($password, $admin['password'])) {
                $this->session->set_userdata([
                    'logged_in' => TRUE,
                    'id_admin' => $admin['id_admin'],
                    'nama_admin' => $admin['nama_admin'],
                ]);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah.');
                redirect('auth/login');
            }
        }

        $this->load->view('auth/login');
    }

    public function logout() {
        $this->session->unset_userdata(['logged_in', 'id_admin', 'nama_admin']);
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}