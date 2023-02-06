<?php

namespace App\Controllers;

use App\Models\AgendaModel;

class Home extends BaseController
{
    protected $agenda;

    function __construct()
    {
        $this->agenda = new AgendaModel();
    }

    public function index()
    {
        $data['home'] = $this->agenda->findAll();
        $data['title'] = 'Agenda Kerja';
        return view('Home/indexView', $data);
    }

    public function create()
    {
        $this->agenda->insert([
            'nama_agenda' => $this->request->getPost('nama_agenda'),
            'asal_surat' => $this->request->getPost('asal_surat'),
            'no_surat' => $this->request->getPost('no_surat'),
            'no_bkad' => $this->request->getPost('no_bkad'),
            'tgl' => $this->request->getPost('tgl'),
            'tempat' => $this->request->getPost('tempat'),
        ]);

        return redirect('agenda')->with('success', 'Data Added Successfully');
    }
}
