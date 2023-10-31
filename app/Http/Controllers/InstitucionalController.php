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
            $response = Http::get($this->apiUrl . '/nosostros');

            if ($response->successful()) {

                $data = $response->json()['data'];

                $institucional = $data['institucional'];
            } else {

                $institucional = [];
            }
        } catch (\Exception $e) {

            $institucional = [];
            
        }

        return view('secciones.nosotros', compact('institucional'));
    }
}
