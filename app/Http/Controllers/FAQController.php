<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL');
    }

    public function index()
    {
        try {
            $response = Http::get($this->apiUrl . 'faq/all');

            if ($response->successful()) {

                $data = $response->json()['data'];

                $faqsPrincipal = $data['faqsPrincipal'];
                $faqsSecundaria = $data['faqsSecundaria'];
            } else {

                $faqsPrincipal = [];
                $faqsSecundaria = [];
            }
        } catch (\Exception $e) {

            $faqsPrincipal = [];
            $faqsSecundaria = [];
        }

        return view('secciones.condiciones-de-viaje.preguntas-frecuentes', compact('faqsPrincipal', 'faqsSecundaria'));
    }
}
