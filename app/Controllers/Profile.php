<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Profile extends Controller
{
    public function index()
    {
        $session = session();
        $data = [
            'username' => $session->get('username'),
            'role' => $session->get('role'),
            'email' => $session->get('email'),
            'login_time' => $session->get('login_time'),
            'status' => $session->get('logged_in') ? 'Aktif' : 'Tidak Aktif'
        ];
        return view('profile', $data);
    }
}
