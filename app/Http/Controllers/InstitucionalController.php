<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InstitucionalController extends Controller
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

                $data = $response->json()['data'];
                $institucional = $data['institucional'];
                $fotoHeader = $data['fotoHeader'];
            } else {
                $data = [];
                $institucional = [];
                $fotoHeader = [];
            }
        } catch (\Exception $e) {

            $data = [];
            $institucional = [];
            $fotoHeader = [];
        }

        return view('secciones.nosotros', compact('institucional', 'fotoHeader'));
    }
}
