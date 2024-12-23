<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('DashboardModel'); // Load DashboardModel
        $this->load->helper('url');
        $this->load->helper('auth_helper');
        check_login(); // Pastikan pengguna sudah login
    }
    public function index() {
        $total_nis = $this->DashboardModel->count_nis();

        // Kirim data ke view
        $data['total_nis'] = $total_nis;
        $total_kode_buku = $this->DashboardModel->count_kode_buku();

        // Kirim data ke view
        $data['total_kode_buku'] = $total_kode_buku;
        $total_peminjaman = $this->DashboardModel->count_peminjaman();

        // Kirim data ke view
        $data['total_peminjaman'] = $total_peminjaman;
        $this->load->view('layout/nav'); // Include navigasi
        $this->load->view('dashboard/index', $data);
    }
}
?>