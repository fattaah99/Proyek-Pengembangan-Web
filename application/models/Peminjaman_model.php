<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_model extends CI_Model {

    // Ambil semua data peminjaman
    public function get_all_peminjaman() {
        $this->db->select('peminjaman.*, admin.nama as admin_name, anggota.nama as anggota_name, buku.judul as buku_title');
        $this->db->from('peminjaman');
        $this->db->join('admin', 'peminjaman.id_admin = admin.id_admin');
        $this->db->join('anggota', 'peminjaman.nis = anggota.nis');
        $this->db->join('buku', 'peminjaman.kode_buku = buku.kode_buku');
        return $this->db->get()->result();
    }

    // Tambah data peminjaman
    public function insert_peminjaman($data) {
        return $this->db->insert('peminjaman', $data);
    }

    // Ambil data peminjaman berdasarkan ID
    public function get_peminjaman_by_id($id_peminjaman) {
        return $this->db->get_where('peminjaman', ['id_peminjaman' => $id_peminjaman])->row();
    }

    // Update data peminjaman
    public function update_peminjaman($id_peminjaman, $data) {
        $this->db->where('id_peminjaman', $id_peminjaman);
        return $this->db->update('peminjaman', $data);
    }

    // Hapus data peminjaman
    public function delete_peminjaman($id_peminjaman) {
        return $this->db->delete('peminjaman', ['id_peminjaman' => $id_peminjaman]);
    }
}