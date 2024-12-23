<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeminjamanModel extends CI_Model {

    
    public function get_all_peminjaman() {
        $this->db->select('p.*, a.nama_anggota, b.judul_buku, ad.nama_admin');
        $this->db->from('peminjaman p');
        $this->db->join('anggota a', 'p.nis = a.nis');
        $this->db->join('buku b', 'p.kode_buku = b.kode_buku');
        $this->db->join('admin ad', 'p.id_admin = ad.id_admin');
        return $this->db->get()->result_array();
    }

    public function insert_peminjaman($data) {
        // Insert data peminjaman
        $this->db->insert('peminjaman', $data);

        // Kurangi stok buku
        $this->db->set('stok_buku', 'stok_buku-1', FALSE) // Kurangi stok_buku 1
                 ->where('kode_buku', $data['kode_buku'])
                 ->update('buku');
    }

    public function update_peminjaman($id, $data) {
        $this->db->where('id_peminjaman', $id);
        return $this->db->update('peminjaman', $data);
    }

    public function get_peminjaman_by_id($id) {
        $this->db->where('id_peminjaman', $id);
        return $this->db->get('peminjaman')->row_array();
    }
}