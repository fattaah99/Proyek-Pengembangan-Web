<?php

namespace App\Controllers;

use App\Models\AuthModel;

class AuthController extends BaseController
{
    protected $authModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
    }

    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $admin = $this->authModel->where('username', $username)->first();

        if ($admin && password_verify($password, $admin['password'])) {
            session()->set([
                'isLoggedIn' => true,
                'adminId' => $admin['id_admin'],
                'namaAdmin' => $admin['nama_admin'],
                'fotoAdmin' => $admin['foto'], // Menyimpan foto di session
            ]);
            return redirect()->to('/buku');
        }

        return redirect()->back()->with('error', 'Username atau Password salah!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth');
    }
}