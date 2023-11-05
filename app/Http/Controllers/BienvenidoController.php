<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BienvenidoController extends Controller
{
    private $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL');
    }

    public function index()
    {
        try {
            $response = Http::get($this->apiUrl . 'bienvenido/all');

            if ($response->successful()) {
            
                $data = $response->json()['data'];
                $tipobuses = $data['tipobuses'];
                $servicios = $data['servicios'];
                $institucional = $data['institucional'];
                $configuracion = $data['configuracion'];
               
            } else {

                $tipobuses = [];
                $servicios = [];
                $institucional = [];
                $configuracion = [];
                
            }
        } catch (\Exception $e) {

            $tipobuses = [];
            $servicios = [];
            $institucional = [];
            $configuracion = [];

        }

        return view('bienvenido', compact('tipobuses','servicios','institucional','configuracion'));
    }
}
