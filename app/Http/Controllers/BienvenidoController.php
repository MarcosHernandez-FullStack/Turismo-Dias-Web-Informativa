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
            $response = Http::get($this->apiUrl . 'nosotros/all');

            if ($response->successful()) {
            
                $institucional = $response->json()['data'];
               
            } else {

                $institucional = [];
                
            }
        } catch (\Exception $e) {

            $institucional = [];

        }

        return view('secciones.nosotros', compact('institucional'));
    }
}
