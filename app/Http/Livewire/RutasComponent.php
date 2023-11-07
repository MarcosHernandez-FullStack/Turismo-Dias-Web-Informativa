<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class RutasComponent extends Component
{
    public $apiUrl;
    public $ciudad,$tipo_buses;
    public function mount(){
        $this->apiUrl = env('API_URL');
        $metodoGetPrincipal=$this->getPrincipal();
        if($metodoGetPrincipal['ciudades'])
        {
            $this->ciudad=$metodoGetPrincipal['ciudades'][1];
            $this->getDetallesDeUnaCiudad($this->ciudad);
        }
        else
        {
            $this->tipo_buses=[];
            $this->ciudad=[];
        }
    }

    /* Para la funcionalidad del mapa */
     public $cities = [
        [
            'id' => 1,
            'name' => 'Lima',
            'latitude' => -12.046374,
            'longitude' => -77.042793,
        ],
        [
            'id' => 2,
            'name' => 'Cusco',
            'latitude' => -13.518333,
            'longitude' => -71.978056,
        ],
        [
            'id' => 3,
            'name' => 'Arequipa',
            'latitude' => -16.409047,
            'longitude' => -71.537450,
        ],
        [
            'id' => 4,
            'name' => 'Trujillo',
            'latitude' => -8.109052,
            'longitude' => -79.021533,
        ],
        [
            'id' => 5,
            'name' => 'Chiclayo',
            'latitude' => -6.771944,
            'longitude' => -79.844722,
        ],
        [
            'id' => 6,
            'name' => 'Iquitos',
            'latitude' => -3.749806,
            'longitude' => -73.254029,
        ],
        [
            'id' => 7,
            'name' => 'Piura',
            'latitude' => -5.194083,
            'longitude' => -80.632914,
        ],
        [
            'id' => 8,
            'name' => 'Huaraz',
            'latitude' => -9.526115,
            'longitude' => -77.526745,
        ],
        [
            'id' => 9,
            'name' => 'Arequipa',
            'latitude' => -16.409047,
            'longitude' => -71.537450,
        ],
        [
            'id' => 10,
            'name' => 'Puno',
            'latitude' => -15.840222,
            'longitude' => -70.021880,
        ],
    ];
/* 
    public $cities = [
        [
            'id' => 1,
            'name' => 'Lima',
        ],
        [
            'id' => 2,
            'name' => 'Cusco',
        ],
        [
            'id' => 3,
            'name' => 'Arequipa',
        ],
        [
            'id' => 4,
            'name' => 'Trujillo',
        ],
        [
            'id' => 5,
            'name' => 'Chiclayo',
        ],
        [
            'id' => 6,
            'name' => 'Iquitos',
        ],
        [
            'id' => 7,
            'name' => 'Piura',
        ],
        [
            'id' => 8,
            'name' => 'Huaraz',
        ],
        [
            'id' => 9,
            'name' => 'Arequipa',
        ],
        [
            'id' => 10,
            'name' => 'Puno',
        ],
    ]; */

    public function render()
    {

        $initialMarkers = [];

        /* Para la funcionalidad del mapa */
        foreach ($this->cities as $city) {
            $initialMarkers[] = [
                'position' => [
                    'lat' => $city['latitude'],
                    'lng' => $city['longitude'],
                ],
                'draggable' => false,
            ];
        }

        $metodoGetPrincipal=$this->getPrincipal();
        $ciudades=$metodoGetPrincipal['ciudades'];
        $call_center=$metodoGetPrincipal['call_center'];     
        return view('livewire.rutas-component', compact('initialMarkers','ciudades', 'call_center'));
    }

    
    public function getPrincipal(){
        try {
            $response = Http::get($this->apiUrl.'rutas/principal');
            if ($response->successful()) {

                $data = $response->json()['data'];
                $ciudades = $data['ciudades'];
                $call_center = $data['call_center'];
            } else {

                $ciudades = [];
                $call_center = [];
            }
        } catch (\Exception $e) {

            $ciudades = [];
            $call_center = [];
        }
        return 
        [
                'ciudades'=>$ciudades,
                'call_center'=>$call_center
        ];
    }

    public function getDetallesDeUnaCiudad($ciudad){
        $this->ciudad=$ciudad;
        try {
            $response = Http::get($this->apiUrl.'rutas/detallesDeUnaCiudad/'.$this->ciudad['id']);
            if ($response->successful()) {
                $data = $response->json()['data'];
                $tipo_buses = $data['tipo_buses'];
            } else {
                $tipo_buses = [];

            }
        } catch (\Exception $e) {
            $tipo_buses = [];
        } 
        $this->tipo_buses=$tipo_buses;
    }
}
