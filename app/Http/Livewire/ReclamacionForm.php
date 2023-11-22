<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ReclamacionForm extends Component
{

    public $nombre;
    public $dni;
    public $telefono;
    public $correo;
    public $direccion;
    public $tutor;
    public $tipo_producto_servicio = '2';
    public $monto;
    public $descripcion_producto_servicio;
    public $tipo_reclamo_queja = '2';
    public $detalle_reclamo_queja;
    public $pedido;

    private $apiUrl;
    public $success_message;
    public $warning_message;
    public function __construct()
    {
        $this->apiUrl = env('API_URL');
    }


    public function render()
    {
        return view('livewire.reclamacion-form');
    }

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:120',
            'dni' => 'required|max:20',
            'telefono' => 'required|max:20',
            'correo' => 'required|max:120',
            'direccion' => 'required|max:120',
            'monto' => 'required|numeric|max:50000',
            'descripcion_producto_servicio' => 'required|max:255',
            'detalle_reclamo_queja' => 'required|max:255',
            'pedido' => 'required|max:120',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre es requerido.',
            'nombre.max' => 'El campo nombre debe exceder los límites establecidos.',

            'dni.required' => 'El campo documento es requerido.',
            'dni.max' => 'El campo documento excede los límites establecidos.',

            'telefono.required' => 'El campo teléfono es requerido.',
            'telefono.max' => 'El campo teléfono excede los límites establecidos.',

            'correo.required' => 'El campo correo es requerido.',
            'correo.max' => 'El campo correo excede los límites establecidos.',

            'direccion.required' => 'El campo dirección es requerido.',
            'direccion.max' => 'El campo dirección excede los límites establecidos.',

            'monto.required' => 'El campo monto es requerido.',
            'monto.max' => 'El campo monto excede los límites establecidos.',

            'descripcion_producto_servicio.required' => 'El campo descripción es requerido.',
            'descripcion_producto_servicio.max' => 'El campo descripción excede los límites establecidos.',

            'detalle_reclamo_queja.required' => 'El campo detalle es requerido.',
            'detalle_reclamo_queja.max' => 'El campo detalle excede los límites establecidos.',

            'pedido.required' => 'El campo pedido es requerido.',
            'pedido.max' => 'El campo pedido excede los límites establecidos.',
        ];
    }



    public function submitForm()
    {

        $this->validate();

        $data = [
            'nombre_completo_consumidor' => $this->nombre,
            'direccion_consumidor' => $this->direccion,
            'email_consumidor' => $this->correo,
            'nombre_completo_apoderado_consumidor' => $this->tutor,
            'documento_identidad_consumidor' => $this->dni,
            'telefono_consumidor' => $this->telefono,
            'tipo_bien' => $this->tipo_producto_servicio,
            'descripcion_bien' => $this->descripcion_producto_servicio,
            'monto_reclamado_bien' => $this->monto,
            'tipo_reclamacion_detalle' => $this->tipo_reclamo_queja,
            'descripcion_reclamacion_detalle' => $this->detalle_reclamo_queja,
            'pedido_reclamacion_detalle' => $this->pedido


        ];

        $response = Http::post($this->apiUrl . 'libro-reclamacion/add', ['data' => $data]);


        if ($response->successful()) {
            $this->resetForm();
            /*   session()->flash('success_message', 'Se ha registrado con éxito, un administrador se pondrá en contacto contigo.'); */
            $this->success_message = 'Se ha registrado con éxito, un administrador se pondrá en contacto contigo.';
        } else {
            $this->warning_message = 'Se ha producido un error, intente más tarde';
        }
    }

    private function resetForm()
    {
        $this->nombre = '';
        $this->dni = '';
        $this->telefono = '';
        $this->correo = '';
        $this->direccion = '';
        $this->tutor =  '';
        $this->tipo_producto_servicio = '2';
        $this->monto = '';
        $this->descripcion_producto_servicio = '';
        $this->tipo_reclamo_queja = '2';
        $this->detalle_reclamo_queja = '';
        $this->pedido = '';
    }
}
