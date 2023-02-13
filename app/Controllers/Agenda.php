<?php

namespace App\Controllers;

use App\Models\AgendaModel;

use CodeIgniter\API\ResponseTrait;

class Agenda extends BaseController
{
    use ResponseTrait;
    protected $agenda;

    function __construct()
    {
        $this->agenda = new AgendaModel();
    }

    public function show_agenda_today()
    {
        return $this->agenda->dateSame();
    }

    public function index()
    {
        $dataAllAgenda = $this->agenda->get()->resultID->num_rows;
        // dd($dataAllAgenda);
        $data = [
            'title' => 'Agenda',
            'dataAllAgenda' => $dataAllAgenda,
            'todayAgenda' => $this->show_agenda_today()
        ];
        $data['home'] = $this->agenda->findAll();

        $data['session'] = session();
        $data['title'] = 'Agenda Kerja';
        return view('Home/indexView', $data);
    }

    public function all()
    {
        $dataAllAgenda = $this->agenda->get()->resultID->num_rows;
        // dd($dataAllAgenda);
        $data = [
            'title' => 'Agenda',
            'dataAllAgenda' => $dataAllAgenda,
            'todayAgenda' => $this->show_agenda_today()
        ];
        $data['home'] = $this->agenda->findAll();
        $data['session'] = session();
        $data['title'] = 'Agenda Kerja';
        return view('Agenda/indexView', $data);
    }



    public function create()
    {



        $data = [
            'nama_agenda' => $this->request->getPost('nama_agenda'),
            'asal_surat' => $this->request->getPost('asal_surat'),
            'no_surat' => $this->request->getPost('no_surat'),
            'no_bkad' => $this->request->getPost('no_bkad'),
            'tgl' => $this->request->getPost('tgl'),
            'waktu' => $this->request->getPost('waktu'),
            'tempat' => $this->request->getPost('tempat'),
            'disposisi' => $this->request->getPost('disposisi'),
            'catatan' => $this->request->getPost('catatan'),
            'notulensi' => $this->request->getPost('notulensi'),
        ];

        $data['disposisi'] = implode(", ", $data['disposisi']);

        $this->agenda->insert($data);

        return redirect('admin/agenda')->with('success', 'Data Added Successfully');
    }

    public function edit($id)
    {

        $session = session();

        if ($session->get('role') === "admin") {
            $data = [
                'notulensi' => $this->request->getPost('notulensi')
            ];
        } else {
            $data = [
                'nama_agenda' => $this->request->getPost('nama_agenda'),
                'asal_surat' => $this->request->getPost('asal_surat'),
                'no_surat' => $this->request->getPost('no_surat'),
                'no_bkad' => $this->request->getPost('no_bkad'),
                'tgl' => $this->request->getPost('tgl'),
                'waktu' => $this->request->getPost('waktu'),
                'tempat' => $this->request->getPost('tempat'),
                'disposisi' => $this->request->getPost('disposisi'),
                'catatan' => $this->request->getPost('catatan'),
                'notulensi' => $this->request->getPost('notulensi'),
            ];

            $data['disposisi'] = implode(", ", $data['disposisi']);
        }

        $this->agenda->update($id, $data);

        return redirect('admin/agenda')->with('success', 'Data Updated Successfully');
    }

    public function delete($id)
    {
        $this->agenda->delete($id);
        return redirect('admin/agenda')->with('success', 'Data Deleted Successfully');
    }
}
