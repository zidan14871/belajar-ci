<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ProfilController extends Controller
{
    public function index()
    {
        $session = session();
        $data = [
            'username'   => $session->get('username'),
            'role'       => $session->get('role'),
            'email'      => $session->get('email'),
            'login_time' => $session->get('login_time'),
            'status'     => $session->get('isLoggedIn') ? 'Aktif' : 'Tidak Aktif',
        ];

        return view('profil', $data);
    }
}
