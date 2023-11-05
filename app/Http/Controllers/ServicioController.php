<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServicioController extends Controller
{

    private $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL');
    }




    public function index()
    {
        try {
            $response = Http::get($this->apiUrl . 'servicio/all');

            if ($response->successful()) {

                $data = $response->json()['data'];

                $servicios = $data['servicios'];
                $fotoHeader = $data['configuracion']['fotoHeader'];
                $subtitulo_seccion = $data['configuracion']['subtitulo_seccion'];

            } else {

                $servicios = [];
                $fotoHeader = [];
                $subtitulo_seccion = [];
            }
        } catch (\Exception $e) {

            $servicios = [];
            $fotoHeader = [];
            $subtitulo_seccion = [];
        }

        return view('secciones.servicios', compact('servicios','fotoHeader','subtitulo_seccion'));
    }
}
