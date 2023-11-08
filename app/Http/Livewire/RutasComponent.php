<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class RutasComponent extends Component
{
    public $apiUrl;
    public $ciudad, $tipo_buses;

    public function mount()
    {
        $this->apiUrl = env('API_URL');
        $metodoGetPrincipal = $this->getPrincipal();
        if ($metodoGetPrincipal['ciudades']) {
            $this->ciudad = $metodoGetPrincipal['ciudades'][1];
            $this->getDetallesDeUnaCiudad($this->ciudad);
        } else {
            $this->tipo_buses = [];
            $this->ciudad = [];
        }
    }



    public function render()
    {

        $initialMarkers = [];


        $metodoGetPrincipal = $this->getPrincipal();
        $ciudades = $metodoGetPrincipal['ciudades'];
        $ambientes = $metodoGetPrincipal['ambientes'];

        /* Para la funcionalidad del mapa */
        foreach ($ambientes as $city) {
            $initialMarkers[] = [
                'position' => [
                    'lat' => $city['coordenada_longitud'],
                    'lng' => $city['coordenada_latitud'],
                ],
                'draggable' => false,
            ];
        }

        $call_center = $metodoGetPrincipal['call_center'];
        return view('livewire.rutas-component', compact( 'ambientes','initialMarkers', 'ciudades', 'call_center'));
    }


    public function getPrincipal()
    {
        try {
            $response = Http::get($this->apiUrl . 'rutas/principal');
            if ($response->successful()) {

                $data = $response->json()['data'];
                $ciudades = $data['ciudades'];
                $ambientes = $data['ambientes'];
                $call_center = $data['call_center'];
            } else {

                $ciudades = [];
                $ambientes = [];
                $call_center = [];
            }
        } catch (\Exception $e) {

            $ciudades = [];
            $ambientes = [];
            $call_center = [];
        }
        return
            [
                'ciudades' => $ciudades,
                'call_center' => $call_center,
                'ambientes' => $ambientes
            ];
    }

    public function getDetallesDeUnaCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
        try {
            $response = Http::get($this->apiUrl . 'rutas/detallesDeUnaCiudad/' . $this->ciudad['id']);
            if ($response->successful()) {
                $data = $response->json()['data'];
                $tipo_buses = $data['tipo_buses'];

            } else {
                $tipo_buses = [];
            }
        } catch (\Exception $e) {
            $tipo_buses = [];
        }
        $this->tipo_buses = $tipo_buses;

    }
}
