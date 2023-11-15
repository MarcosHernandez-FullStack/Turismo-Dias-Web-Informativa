<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CalendarioController extends Controller
{
    private $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL');
    }

    public function index()
    {

        try {
            $response = Http::get($this->apiUrl . 'feriados/all');

            if ($response->successful()) {

                $data = $response->json()['data'];
                $eventos = $data['feriados'];
                $fotoHeader= $data['fotoHeader'];
            } else {
                $data = [];
                $eventos = [];
                $fotoHeader = [];
            }
        } catch (\Exception $e) {

            $data = [];
            $eventos = [];
        }

        return view('secciones.condiciones-de-viaje.calendario-eventos', compact('eventos', 'fotoHeader'));
    }
}
