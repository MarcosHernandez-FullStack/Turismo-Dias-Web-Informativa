<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TerminoCondicionController extends Controller
{
    private $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL');
    }

    public function index()
    {
        try {
            $response = Http::get($this->apiUrl . 'termino-condicion/all');

            if ($response->successful()) {

                $data = $response->json()['data'];
                $terminos = $data['terminos'];
                $fotoHeader = $data['configuracion']['fotoHeader'];
                $subtitulo_seccion = $data['configuracion']['subtitulo_seccion'];

               
            } else {

                $terminos = [];
                $fotoHeader = [];
                $subtitulo_seccion = [];
            }
        } catch (\Exception $e) {

            $terminos = [];
            $fotoHeader = [];
            $subtitulo_seccion = [];
        }
        
        return view('secciones.condiciones-de-viaje.terminos-condiciones', compact('terminos','fotoHeader','subtitulo_seccion'));
    }
}
