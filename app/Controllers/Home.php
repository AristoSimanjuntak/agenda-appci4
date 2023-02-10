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

    public function show_agenda_today()
    {
        return $this->agenda->dateSame();
    }

    public function index()
    {
        $dataAllAgenda = $this->agenda->get()->resultID->num_rows;
        $data = [
            'title' => 'Agenda',
            'dataAllAgenda' => $dataAllAgenda,
            'todayAgenda' => $this->show_agenda_today()
        ];

        $data['home'] = $this->agenda->findAll();
        $data['dataAllAgenda'] = $this->agenda->get()->resultID->num_rows;
        $data['session'] = session();
        $data['title'] = 'Agenda Kerja';
        return view('Home/indexView', $data);
    }
}
