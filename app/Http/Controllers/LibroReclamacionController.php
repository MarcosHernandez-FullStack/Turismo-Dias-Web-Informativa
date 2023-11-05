<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LibroReclamacionController extends Controller
{
    private $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL');
    }

    public function index()
    {
        try {
            $response = Http::get($this->apiUrl . 'libro-reclamacion/all');

            if ($response->successful()) {

                $data = $response->json()['data'];

               
            } else {

                $data = [];
            }
        } catch (\Exception $e) {

            $data = [];
        }

        return view('secciones.libro-reclamaciones', compact('data'));
    }
}
