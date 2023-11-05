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
               
            } else {

                $tipobuses = [];
                
            }
        } catch (\Exception $e) {

            $tipobuses = [];

        }

        return view('bienvenido', compact('tipobuses'));
    }
}
