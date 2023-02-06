<?php

namespace App\Controllers;

class Agenda extends BaseController
{
    public function index()
    {
        $data['title'] = 'Tambah Agenda';
        return view('Agenda/indexView', $data);
    }
}
