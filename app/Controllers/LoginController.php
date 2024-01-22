<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index(): string
    {
        return view('pages/login');
    }

    public function autenticate()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        if ($username == 'palmoeljadi' && $password == 'Yasbhum1964') {

            session()->set('login', 'true');

            return redirect()->to('/dashboard');
        }

        session()->setFlashdata('loginError', 'Login gagal, username atau password salah');

        return redirect()->to('/login');
    }
}
