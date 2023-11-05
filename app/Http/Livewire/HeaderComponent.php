<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class HeaderComponent extends Component
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

        return view('livewire.header-component',compact('data'));
    }
}
