<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data['title'] = 'Login';
        return view('Auth/indexView', $data);
    }

    public function login()
    {
        $session = session();
        $model = new \App\Models\PenggunaModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('pengguna_username', $email)->first();

        if ($data) {
            $pass = $data->pengguna_password;
            $verify_pass = password_verify($password, $pass);   
            if ($verify_pass) {
                $ses_data = [
                    'id'                    => $data->id,
                    'pengguna_username'     => $data->pengguna_username,
                    'role'                  => $data->role,
                    'pengguna_email'        => $data->pengguna_email,
                    'logged_in'             => TRUE
                ];
                $session->set($ses_data);
                return redirect('admin/agenda');
            } else {
                $session->setFlashdata('msg', 'Password Salah!');
                return redirect('auth');
            }
        } else {
            $session->setFlashdata('msg', 'Email atau Username Salah!');
            return redirect('auth');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}

// $PenggunaModel = new \App\Models\PenggunaModel();
        // $email = $this->request->getPost('email');
        // $password = $this->request->getPost('password');

        //$cek = $PenggunaModel->get_data($email, $password);

        // var_dump($cek);

        //     if (($cek['pengguna_username'] == $email) && ($cek['pengguna_password'] == $password)) {
        //         session()->set('pengguna_username', $cek['pengguna_username']);
        //         session()->set('pengguna_nama', $cek['pengguna_nama']);
        //         session()->set('id', $cek['id']);
        //         return redirect()->to(base_url('pengguna'));
        //     } else {
        //         session()->setFlashdata('gagal', 'Username / Password salah');
        //         return redirect()->to(base_url('auth'));
        //     }
        // }

    //     $PenggunaModel = new \App\Models\PenggunaModel();
    //     $pengguna_username = $this->request->getPost('username');
    //     $pengguna_password = $this->request->getPost('password');
    //     $getPengguna = $PenggunaModel->where('pengguna_username', $pengguna_username)->first();
    //     if ($getPengguna != null) {
    //         $row = $getPengguna;
    //         if (password_verify($pengguna_password, $getPengguna->pengguna_password)) {
    //             session()->set('userId', $getPengguna->id);
    //             return redirect()->to('home');
    //         } else {
    //             session()->setFlashdata(['info' => 'error', 'message' => 'Username atau password salah']);
    //         }
    //     } else {
    //         session()->setFlashdata(['info' => 'error', 'message' => 'Username atau password salah']);
    //     }
    //     return redirect()->to('auth');
