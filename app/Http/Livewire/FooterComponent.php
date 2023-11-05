<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class FooterComponent extends Component
{
    private $apiUrl;

    public function __construct()
    {
        $this->apiUrl = env('API_URL');
    }



    public function render()
    {
        try {
            $response = Http::get($this->apiUrl . 'configuracion/all');

            if ($response->successful()) {

                $data = $response->json()['data'];

               
            } else {

                $data = [];
            }
        } catch (\Exception $e) {

            $data = [];
        }
        return view('livewire.footer-component', compact('data'));
        
    }
}
