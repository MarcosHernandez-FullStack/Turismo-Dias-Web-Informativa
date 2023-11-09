<?php

namespace App\Http\Controllers;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\LaravelCache;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
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
            ]
        ];

        $botman = BotManFactory::create($config, new LaravelCache());

        $botman->fallback(function($bot) {
            $bot->reply('¡Hola! 😀<br> Soy TurismitoBot 🤖, asesor virtual del Turismo Días <br>
            ¿En qué puedo atenderte?<br>
           🤖 Atención automatizada las 24/7.');
            $bot->startConversation(new MenuConversation);

        });
        $botman->listen();
    }



}

class MenuConversation extends Conversation{

    protected $opcion;

    public function run()
    {
        $this->preguntarOpcion();
    }

    public function preguntarOpcion(){
        $this->ask('Elige una opción para continuar:<br>
        <br>
        1] 🚗 NUESTRAS RUTAS<br>
        2] 💻 LIBRO DE RECLAMACIONES VIRTUAL<br>
        3] ➕ PREGUNTAS FRECUENTES<br>
        <br>
        ¡IMPORTANTE‼️, Digita el número que contenga la información de tu interés. Usa la misma dinámica para navegar en los menús.',
        function(Answer $answer) {
            // Save result
            $this->opcion = $answer->getText();

            if ($this->opcion == '1') {
                $this->bot->startConversation(new RutaConversation());
            }elseif($this->opcion == '2'){

            }elseif($this->opcion == '3'){
                $this->bot->startConversation(new RutaConversation());
            }else{
                $this->say('Opción no disponible.');
                $this->bot->startConversation(new MenuConversation());
            }
        });
    }
}

class RutaConversation extends Conversation{
    protected $opcion;
    public function run()
    {
        $this->preguntarOpcion();
    }

    public function preguntarOpcion(){
        $this->ask('Elige una opción para continuar:<br>
        <br>
        1] 🚗 HORARIOS DEL DÍA<br>
        2] 💻 PRÓXIMAS SALIDAS<br>
        0] 💻 VOLVER AL MENU PRINCIPAL<br>
        <br>
        ¡IMPORTANTE‼️, Digita el número que contenga la información de tu interés. Usa la misma dinámica para navegar en los menús.',
        function(Answer $answer) {
            // Save result
            $this->opcion = $answer->getText();

            if ($this->opcion == '1') {
                $this->say('Elegiste opción: '. $this->opcion .'.');
            }elseif($this->opcion == '2'){
                $this->say('Elegiste opción: '. $this->opcion .'.');
            }elseif($this->opcion == '0'){
                $this->bot->startConversation(new MenuConversation());
            }else{
                $this->bot->startConversation(new RutaConversation());
            }
        });
    }
}
