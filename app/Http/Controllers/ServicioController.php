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
            } else {

                $servicios = [];
            }
        } catch (\Exception $e) {

            $servicios = [];
        }

        return view('secciones.servicios', compact('servicios'));
    }
}
