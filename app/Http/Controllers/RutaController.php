<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    private $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL');
    }


    public function index()
    {
        try {
            $response = Http::get($this->apiUrl . 'rutas/principal');

            if ($response->successful()) {

                $data = $response->json()['data'];
                $fotoHeader = $data['fotoHeader'];
            } else {

                $fotoHeader = [];
            }
        } catch (\Exception $e) {


            $fotoHeader = [];
        }


        $initialMarkers = [
            [
                'position' => [
                    'lat' => 28.625485,
                    'lng' => 79.821091
                ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 28.625293,
                    'lng' => 79.817926
                ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 28.625182,
                    'lng' => 79.81464
                ],
                'draggable' => false
            ]
        ];
        return view('secciones.rutas', compact('initialMarkers', 'fotoHeader'));
    }
}
