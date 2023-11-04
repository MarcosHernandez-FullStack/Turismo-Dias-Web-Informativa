<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarioController extends Controller
{

    public function index()
    {
        $listaEventos = [
            [
                'title' => 'Cumpleaños del Yisus',
                'start_date' => '2023-11-01',
                'end_date' => '2023-11-02',
            ],
            [
                'title' => 'Fiesta Patronal',
                'start_date' => '2023-11-03',
                'end_date' => '2023-11-05',
            ],
            // Puedes agregar más eventos aquí
        ];

        $events = [];

        foreach ($listaEventos as $evento) {
            $eventos[] = [
                'title' => $evento['title'],
                'start' => $evento['start_date'],
                'end' => $evento['end_date'],
            ];
        }

        return view('secciones.condiciones-de-viaje.calendario-eventos', compact('eventos'));
    }
}
