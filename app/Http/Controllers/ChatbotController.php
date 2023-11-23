<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\LaravelCache;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('chatbot.botman');
    }

    public function invoke()
    {
        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);
        $config = [
            'web' => [
                'matchingData' => [
                    'driver' => 'web',
                ],
            ],
        ];

        $botman = BotManFactory::create($config, new LaravelCache());

        $botman->fallback(function ($bot) {
            $bot->reply('¡Hola! 😀<br> Soy TurismitoBot 🤖, asesor virtual de Turismo Días <br>
            ¿En qué puedo atenderte?<br>
           🤖 Atención automatizada las 24/7.');
            $bot->startConversation(new MenuConversation);

        });
        $botman->listen();
    }

}

class MenuConversation extends Conversation
{

    protected $opcion;

    public function run()
    {
        $this->preguntarOpcion();
    }

    public function preguntarOpcion()
    {
        $this->ask('Elige una opción para continuar:<br>
        <br>
        1] 🚗 NUESTRAS RUTAS<br>
        2] 📧 DÉJANOS UN MENSAJE<br>
        3] ❓ PREGUNTAS FRECUENTES<br>
        <br>
        ¡IMPORTANTE‼️, Digita el número que contenga la información de tu interés. Usa la misma dinámica para navegar en los menús.',
            function (Answer $answer) {
                // Save result
                $this->opcion = $answer->getText();

                if ($this->opcion == '1') {
                    $this->bot->startConversation(new RutaConversation());
                } elseif ($this->opcion == '2') {
                    $this->bot->startConversation(new ReclamacionConversation());
                } elseif ($this->opcion == '3') {
                    $this->bot->startConversation(new FAQConversation());
                } else {
                    $this->say('Opción no disponible, elija un número en la lista por favor');
                    $this->bot->startConversation(new MenuConversation());
                }
            });
    }
}

class RutaConversation extends Conversation
{
    protected $opcion;
    public function run()
    {
        $this->ubiSalidas();
    }

    public function preguntarOpcion()
    {
        $this->ask('Elige una opción para continuar:<br>
        <br>
        1] DESTINOS<br>
        2] SALIDAS<br>
        0] VOLVER AL MENU PRINCIPAL<br>
        <br>
        ¡IMPORTANTE‼️, Digita el número que contenga la información de tu interés. Usa la misma dinámica para navegar en los menús.',
            function (Answer $answer) {
                // Save result
                $this->opcion = $answer->getText();

                if ($this->opcion == '1') {
                    $this->ubiDestinos();
                } elseif ($this->opcion == '2') {
                    $this->ubiSalidas();
                } elseif ($this->opcion == '0') {
                    $this->bot->startConversation(new MenuConversation());
                } else {
                    $this->say('Opción no disponible, elija un número en la lista por favor.');
                    $this->bot->startConversation(new RutaConversation());
                }
            });
    }

    public function ubiDestinos()
    {
        try {
            $mensaje = 'Por favor introduce la ubicación desde donde quieres realizar tu SALIDA: <br>
            0] VOLVER AL MENÚ DE RUTAS';
            $this->ask($mensaje, function (Answer $answer) {
                // Save result
                $this->opcion = mb_strtoupper($answer->getText(), 'UTF-8');
                if ($this->opcion == '0') {
                    $this->bot->startConversation(new RutaConversation());
                } else {
                    try {
                        $response = Http::get(env('API_URL') . 'rutas/destinos', [
                            'ciudad' => $this->opcion,
                        ]);
                    } catch (\Exception $e) {
                        $this->say('Ha ocurrido un error de conexión, vuelva a intentarlo.');
                        $this->bot->startConversation(new RutaConversation());
                    }

                    switch ($response->status()) {
                        case 200:
                            $data = $response->json()['data'];
                            $destinos = $data['destinos'];
                            if (!empty($destinos)) {
                                $mensaje2 = 'Estos son los destinos y horas de salida desde ' . $this->opcion . ':<br>';
                                foreach ($destinos as $key => $destino) {
                                    $mensaje2 = $mensaje2 . '<strong>Salida: ' . $destino['nombre_origen'] . '</strong> <br>';
                                    $mensaje2 = $mensaje2 . 'Destino: ' . $destino['nombre_destino'] . '<br>';
                                    $mensaje2 = $mensaje2 . 'Hora: ' . $destino['hora_salida'] . '<br>';
                                }
                                $this->say($mensaje2, ['parse_mode' => 'HTML']);
                                $this->preguntarOpcion();
                            } else {
                                $this->say('Lo sentimos, por el momento no tenemos ninguna SALIDA desde la ubicación ingresada..');
                                $this->bot->startConversation(new RutaConversation());
                            }
                            break;
                        case 404:
                            $this->say('No se ha encontrado la ubicación desde donde quieres realizar tu SALIDA.');
                            $this->ubiDestinos();
                            break;
                        case 500:
                            $this->say('Ha ocurrido un error de conexión, vuelva a intentarlo.');
                            $this->bot->startConversation(new RutaConversation());
                            break;
                    }
                }
            });
        } catch (\Exception $e) {
            $this->say($e->getMessage());
        }

    }

    public function ubiSalidas()
    {
        try {
            $mensaje = 'Por favor ingrese su destino: <br>
            0] VOLVER AL MENÚ DE RUTAS';
            $this->ask($mensaje, function (Answer $answer) {
                // Save result
                $this->opcion = mb_strtoupper($answer->getText(), 'UTF-8');
                if ($this->opcion == '0') {
                    $this->bot->startConversation(new RutaConversation());
                } else {
                    try {
                        $response = Http::get(env('API_URL') . 'rutas/salidas', [
                            'ciudad' => $this->opcion,
                        ]);
                    } catch (\Exception $e) {
                        $this->say('Ha ocurrido un error de conexión, vuelva a intentarlo.');
                        $this->bot->startConversation(new RutaConversation());
                    }

                    switch ($response->status()) {
                        case 200:
                            $data = $response->json()['data'];
                            $destinos = $data['destinos'];
                            if (!empty($destinos)) {
                                $mensaje2 = 'Estos son las salidas y horas de salida hacia tu DESTINO ' . $this->opcion . ':<br>';
                                foreach ($destinos as $key => $destino) {
                                    $mensaje2 = $mensaje2 . '<strong>' . $destino['nombre_origen'] . ' - ' . $destino['nombre_destino'] . '</strong><br>';
                                    //$mensaje2 = $mensaje2 . 'Destino: ' . $destino['nombre_destino'] . '<br>';
                                    $mensaje2 = $mensaje2 . 'Hora de salida: ' . $destino['hora_salida'] . '<br>';
                                }
                                $this->say($mensaje2, ['parse_mode' => 'HTML']);
                                //$this->preguntarOpcion();
                                $this->bot->startConversation(new MenuConversation());
                            } else {
                                $this->say('Lo sentimos, por el momento no tenemos ninguna salida con dirección al DESTINO ingresado.');
                                $this->bot->startConversation(new RutaConversation());
                            }
                            break;
                        case 404:
                            $this->say('No se ha encontrado la ubicación a donde quieres realizar tu viaje.');
                            $this->ubiDestinos();
                            break;
                        case 500:
                            $this->say('Ha ocurrido un error de conexión, vuelva a intentarlo.');
                            $this->bot->startConversation(new RutaConversation());
                            break;
                    }
                }
            });
        } catch (\Exception $e) {
            $this->say($e->getMessage());
        }

    }
}

class ReclamacionConversation extends Conversation
{
    protected $nombre;
    protected $dni;
    protected $telefono;
    protected $correo;
    protected $direccion;
    protected $tutor;
    protected $tipo_producto_servicio = '2';
    protected $monto = '0';
    protected $descripcion_producto_servicio;
    protected $tipo_reclamo_queja = '3';
    protected $detalle_reclamo_queja;
    protected $pedido;

    protected $opcion, $flag = false;
    public function run()
    {
        $this->preguntarOpcion();
    }

    public function preguntarOpcion()
    {
        $this->ask('A continuación, le ayudaré a registrar su mensaje.<br>Por favor, ingrese los datos que se soliciten respetando la cantidad de carácteres y tipo de dato indicado:<br>
        <br>
        1] CONTINUAR<br>
        0] VOLVER AL MENU PRINCIPAL<br>',
            function (Answer $answer) {
                // Save result
                $this->opcion = $answer->getText();

                if ($this->opcion == '1') {
                    $this->preguntarNombreApellido();
                } elseif ($this->opcion == '0') {
                    $this->bot->startConversation(new MenuConversation());
                } else {
                    $this->say('Opción no disponible, elija un número en la lista por favor.');
                    $this->bot->startConversation(new ReclamacionConversation());
                }
            });
    }
    //INICIA CADENA DE PREGUNTAS
    public function preguntarNombreApellido()
    {
        $mensaje = 'Ingrese su nombre y apellidos completos:<br>Máximo 120 carácteres.<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } else {
                if (mb_strlen($this->opcion) <= 120) {
                    $this->nombre = $this->opcion;
                    $this->preguntarDNI();
                } else {
                    $this->say('El texto ingresado excede el limite de carácteres(' . mb_strlen($this->opcion) . ' ingresados), por favor vuelva a ingresar el dato.');
                    $this->preguntarNombreApellido();
                }
            }
        });
    }
    public function preguntarDNI()
    {
        $mensaje = 'Ingrese su DNI o carnet de extranjería:<br>Máximo 20 carácteres.<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } else {
                if (mb_strlen($this->opcion) <= 20) {
                    $this->dni = $this->opcion;
                    $this->preguntarCorreo();
                } else {
                    $this->say('El texto ingresado excede el limite de carácteres(' . mb_strlen($this->opcion) . ' ingresados), por favor vuelva a ingresar el dato.');
                    $this->preguntarDNI();
                }
            }
        });
    }
    public function preguntarTelefono()
    {
        $mensaje = 'Ingrese su teléfono:<br>Máximo 20 carácteres.<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } else {
                if (mb_strlen($this->opcion) <= 20) {
                    $this->telefono = $this->opcion;
                    $this->preguntarCorreo();
                } else {
                    $this->say('El texto ingresado excede el limite de carácteres(' . mb_strlen($this->opcion) . ' ingresados), por favor vuelva a ingresar el dato.');
                    $this->preguntarTelefono();
                }
            }
        });
    }

    public function preguntarCorreo()
    {
        $mensaje = 'Ingrese su correo electronico:<br>Máximo 120 carácteres.<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } else {
                if (mb_strlen($this->opcion) <= 120) {
                    $this->correo = $this->opcion;
                    $this->preguntarDetaReclQuej();
                } else {
                    $this->say('El texto ingresado excede el limite de carácteres(' . mb_strlen($this->opcion) . ' ingresados), por favor vuelva a ingresar el dato.');
                    $this->preguntarCorreo();
                }
            }
        });
    }
    public function preguntarDireccion()
    {
        $mensaje = 'Ingrese su dirección de su domicilio:<br>Máximo 120 carácteres.<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } else {
                if (mb_strlen($this->opcion) <= 120) {
                    $this->direccion = $this->opcion;
                    $this->preguntarTutor();
                } else {
                    $this->say('El texto ingresado excede el limite de carácteres(' . mb_strlen($this->opcion) . ' ingresados), por favor vuelva a ingresar el dato.');
                    $this->preguntarDireccion();
                }
            }
        });
    }
    public function preguntarTutor()
    {
        $mensaje = 'Ingrese su el nombre de su tutor(en caso sea menor de edad):<br>Si no es menor de Edad ingrese "Ninguno"<br>Máximo 120 carácteres.<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } else {
                if (mb_strlen($this->opcion) <= 120) {
                    $this->tutor = $this->opcion;
                    $this->preguntarProductoServicio();
                } else {
                    $this->say('El texto ingresado excede el limite de carácteres(' . mb_strlen($this->opcion) . ' ingresados), por favor vuelva a ingresar el dato.');
                    $this->preguntarTutor();
                }
            }
        });
    }
    public function preguntarProductoServicio()
    {
        $mensaje = 'Ingrese si fue un bien o servicio contratado:<br>1] PRODUCTO<br>2] SERVICIO<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } elseif ($this->opcion == '1' || $this->opcion == '2') {
                $this->tipo_producto_servicio = $this->opcion;
                $this->preguntarMonto();
            } else {
                $this->say('Opción no disponible, elija un número en la lista por favor.');
                $this->preguntarProductoServicio();
            }
        });
    }

    public function preguntarMonto()
    {
        $mensaje = 'Ingrese su el monto del producto o servicio:<br>Tipo número y hasta 5000.<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } else {
                if (floatval($this->opcion) == 0) {
                    $this->say('El texto ingresado no es un número, por favor introduzca un número.');
                    $this->preguntarMonto();
                } elseif (floatval($this->opcion) > 5000) {
                    $this->say('El número ingresado excede el monto límite de 5000, por favor introduzca un número válido.');
                    $this->preguntarMonto();
                } else {
                    $this->monto = floatval($this->opcion);
                    $this->preguntarDescProdServ();
                }
            }
        });
    }
    public function preguntarDescProdServ()
    {
        $mensaje = 'Ingrese la descripción del producto o servicio contratado:<br>Máximo 255 carácteres.<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } else {
                if (mb_strlen($this->opcion) <= 255) {
                    $this->descripcion_producto_servicio = $this->opcion;
                    $this->preguntarReclamoQueja();
                } else {
                    $this->say('El texto ingresado excede el limite de carácteres(' . mb_strlen($this->opcion) . ' ingresados), por favor vuelva a ingresar el dato.');
                    $this->preguntarDescProdServ();
                }
            }
        });
    }
    public function preguntarReclamoQueja()
    {
        $mensaje = 'Ingrese si su solicitud es un reclamo o una queja:<br>1] RECLAMO<br>2] QUEJA<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } elseif ($this->opcion == '1' || $this->opcion == '2') {
                $this->tipo_reclamo_queja = $this->opcion;
                $this->preguntarDetaReclQuej();
            } else {
                $this->say('Opción no disponible, elija un número en la lista por favor.');
                $this->preguntarReclamoQueja();
            }
        });
    }
    public function preguntarDetaReclQuej()
    {
        $mensaje = 'Ingrese un mensaje para nosotros:<br>Máximo 255 carácteres.<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } else {
                if (mb_strlen($this->opcion) <= 255) {
                    $this->detalle_reclamo_queja = $this->opcion;
                    $this->preguntarEnvio();
                } else {
                    $this->say('El texto ingresado excede el limite de carácteres(' . mb_strlen($this->opcion) . ' ingresados), por favor vuelva a ingresar el dato.');
                    $this->preguntarDetaReclQuej();
                }
            }
        });
    }
    public function preguntarPedido()
    {
        $mensaje = 'Ingrese lo que espera de nosotros(pedido):<br>Máximo 120 carácteres.<br><br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        $this->ask($mensaje, function (Answer $answer) {
            $this->opcion = $answer->getText();
            if ($this->opcion == '0') {
                $this->bot->startConversation(new MenuConversation());
            } else {
                if (mb_strlen($this->opcion) <= 120) {
                    $this->pedido = $this->opcion;
                    $this->preguntarEnvio();
                } else {
                    $this->say('El texto ingresado excede el limite de carácteres(' . mb_strlen($this->opcion) . ' ingresados), por favor vuelva a ingresar el dato.');
                    $this->preguntarPedido();
                }
            }
        });
    }

    public function preguntarEnvio()
    {
        $mensaje = 'Datos registrados. Nos pondremos en contacto muy pronto!!!<br>0] CANCELAR Y VOLVER AL MENU PRINCIPAL';
        try {
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
                'pedido_reclamacion_detalle' => $this->pedido,

            ];
            $response = Http::post(env('API_URL') . 'libro-reclamacion/add', ['data' => $data]);

            if ($response->successful()) {
                $this->say('Datos registrados. Nos pondremos en contacto muy pronto!!!<br>Volviendo al menú principal...');
                $this->bot->startConversation(new MenuConversation());
            } else {
                $this->say('Se ha producido un error, intente más tarde!!!<br>Volviendo al menú principal...');
                $this->bot->startConversation(new MenuConversation());
            }
        } catch (\Exception $e) {
            $this->say('Se ha producido un error, intente más tarde!!!<br>Volviendo al menú principal...');
            $this->bot->startConversation(new MenuConversation());
        }

    }
}

class FAQConversation extends Conversation
{
    protected $opcion;
    protected $faqs = [];
    public function run()
    {
        $this->preguntarOpcion();
    }

    public function preguntarOpcion()
    {
        try {
            $response = Http::get(env('API_URL') . 'faq/all');
        } catch (\Exception $e) {
            $this->say('Ha ocurrido un error de conexión, vuelva a intentarlo.');
            $this->bot->startConversation(new MenuConversation());
        }
        switch ($response->status()) {
            case 200:
                $data = $response->json()['data'];
                $this->faqs = [];

                if (!empty($data['faqsPrincipal']) || !empty($data['faqsSecundaria'])) {

                    if (isset($data['faqsPrincipal'])) {
                        $this->faqs = array_merge($this->faqs, $data['faqsPrincipal']);
                    }

                    if (isset($data['faqsSecundaria'])) {
                        $this->faqs = array_merge($this->faqs, $data['faqsSecundaria']);
                    }
                    $mensaje2 = 'Elige una de las siguientes preguntas frecuentes a continuación para obtener una respuesta:<br>';
                    for ($i = 0; $i < count($this->faqs); $i++) {
                        $faq = $this->faqs[$i];
                        $mensaje2 = $mensaje2 . ($i + 1) . '] ' . $faq['pregunta'] . '<br>';
                    }
                    $mensaje2 = $mensaje2 . '0] VOLVER AL MENU PRINCIPAL<br>';
                    $this->ask($mensaje2, function (Answer $answer) {
                        $this->opcion = $answer->getText();
                        $existe = false;
                        if ($this->opcion == '0') {
                            $this->bot->startConversation(new MenuConversation());
                        } else {
                            for ($i = 0; $i < count($this->faqs); $i++) {
                                if (intval($this->opcion) == ($i + 1)) {
                                    $existe = true;
                                    $faq = $this->faqs[$i];
                                    $mensaje2 = $faq['respuesta'] . '<br>';
                                }
                            }
                            $mensaje2 = $mensaje2 . '<br>0] VOLVER A SELECCIONAR UNA PREGUNTA<br>';
                            $this->ask($mensaje2, function (Answer $answer) {
                                $this->opcion = $answer->getText();
                                $existe = false;
                                if ($this->opcion == '0') {
                                    $this->preguntarOpcion();
                                } else {
                                    $this->say('Opción no disponible, volviendo al menú principal...');
                                    $this->bot->startConversation(new MenuConversation());
                                }
                            }, ['parse_mode' => 'HTML']);
                        }
                    }, ['parse_mode' => 'HTML']);
                } else {
                    $this->say('Lo sentimos, por el momento el servicio no está disponible.');
                    $this->bot->startConversation(new MenuConversation());
                }
                break;
            case 500:
                $this->say('Ha ocurrido un error de conexión, vuelva a intentarlo.');
                $this->bot->startConversation(new MenuConversation());
                break;
        }
    }
}
