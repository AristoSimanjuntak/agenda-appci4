<?php

namespace App\Controllers;

use App\Models\AgendaModel;
use App\Models\PenggunaModel;
use CodeIgniter\API\ResponseTrait;

class User extends BaseController
{
    use ResponseTrait;
    protected $model;


    function __construct()
    {
        $this->model = new \App\Models\PenggunaModel();
        date_default_timezone_set('Asia/Jakarta');
    }



    public function index()
    {

        // dd($dataAllAgenda);
        $data = [
            'title' => 'Agenda',
            'data'  => $this->model->findAll()
        ];
        $data['session'] = session();
        return view('User/indexView', $data);

        // print_r($data['data']);
    }



    public function create()
    {

        $data = [
            'pengguna_nama' => $this->request->getPost('nama'),
            'pengguna_username' => $this->request->getPost('username'),
            'pengguna_password' => $this->request->getPost('password'),
            'pengguna_email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
            'created_by' => date("Y-m-d H:i:s"),
            'updated_by' => date("Y-m-d H:i:s"),
        ];

        $data['pengguna_password'] = password_hash($data['pengguna_password'], PASSWORD_DEFAULT);

        $this->model->insert($data);

        return redirect('admin/user')->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {
        $data = [
            'pengguna_nama' => $this->request->getPost('nama'),
            'pengguna_username' => $this->request->getPost('username'),
            'pengguna_email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
            'updated_by' => date("Y-m-d H:i:s"),
        ];

        $password = $this->request->getPost('password');

        if ($password !== "") {
            $data['pengguna_password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        $this->model->update($id, $data);

        return redirect('admin/user')->with('success', 'Data Updated Successfully');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect('admin/user')->with('success', 'Data Deleted Successfully');
    }
}
