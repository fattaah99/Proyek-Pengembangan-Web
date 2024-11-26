<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // Load helper url
    }

    public function index() {
        $data['menus'] = [
            ['title' => 'Home', 'url' => base_url()],
            ['title' => 'Anggota', 'url' => base_url('anggota')],
            ['title' => 'Tambah Anggota', 'url' => base_url('anggota/create')],
            ['title' => 'Admin', 'url' => base_url('admin')],
            ['title' => 'Tambah Admin', 'url' => base_url('admin/create')],
        ];

        $this->load->view('menu_view', $data);
    }
}