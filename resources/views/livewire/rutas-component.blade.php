<div>


    <head>
        <style>
            .fila {
                display: flex;
            }

            .columna {
                padding: 10px;

                flex-grow: 1;
                /* Permite que las columnas crezcan para llenar el espacio disponible */
            }

            .ul-ciudad {
                list-style: none;
                padding: 0;
            }

            i.fa-solid.fa-square-caret-right {
                color: #017F01;
                transition: color 0.2s;
            }

            .li-ciudad {
                border-bottom: 1px solid #ccc;
                padding: 10px;
                transition: background-color 0.2s, color 0.2s;
            }

            .li-ciudad:hover {
                background-color: #6e716f;
                color: white;
            }

            .li-ciudad:hover i.fa-solid.fa-square-caret-right {
                color: white;
            }

            .encabezado {
                background-color: #017F01;
                color: #ffffff;
                padding: 10px;
            }

            .fila-lista-mapa {
                display: flex;
                width: 70%
            }

            .bt-ciudades {
                display: none
            }

            .seccion-map {
                margin-top: -50px;
                margin-left: 10%;
                margin-right: 10%;
                margin-bottom: 8%;
            }

            @media (max-width: 1000px) {


                .call {
                    width: 100% !important;
                }

                .direcciones {
                    width: 100% !important;
                }

                .mapa iframe {
                    height: 100%;
                    width: 100%;
                    min-height: 500;
                }

                .fila {
                    display: block;
                }

                .fila-lista-mapa {

                    width: 100%
                }

                .ciudades {
                    width: 100% !important;
                }

                .bt-ciudades {
                    display: block
                }

                .seccion-map {
                    margin-top: 0px;
                    margin-left: 0%;
                    margin-right: 0%;
                }
            }
        </style>

        <style>
            .icon.style-color {
                width: 40px;
                height: 40px;
                /* text-align: center; */
                align-items: center;
                display: flex;
                justify-content: center;
                /* border-radius: 10px; */
            }

            i.jki.jki-phone-call-line {
                /* width: 100%; */
                font-size: x-large;
            }


            i.jki.jki-calendar-alt-solid {
                /* width: 100%; */
                font-size: x-large;
            }

            i.jki.jki-clock-solid {
                /* width: 100%; */
                font-size: x-large;
            }

            i.jki.jki-envelope2-light {
                /* width: 100%; */
                font-size: x-large;
            }
        </style>
        <style>
            .tarjeta {
                box-shadow: 0px 3px 3px rgba(209, 209, 209, 0.3);
                background-color: #ffffff;
                border: 1px solid #ddd;
                border-radius: 5px;
                transition: box-shadow 0.3s;
            }

            .tarjeta:hover {
                box-shadow: 0px 3px 3px rgba(108, 107, 107, 0.3);
            }


            .contenido {

                padding: 15px;
                border-bottom: 3px solid #ccc;
            }

            .contenido b {
                display: flex;
                justify-content: center;
                color: #000;
                padding: 20px;


            }
        </style>

        <style>
            .bg-icon-call-center {
                margin-top: 3%;
                background: #017F01;
                color: white;
                border-radius: 10px;
            }
        </style>

        <style>
            .bt-ciudades {
                text-align: right;
                padding-right: 2%;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    </head>


    <div class="bt-ciudades">

        <button id="mostrar-ciudades"
            style=" top: 10px; right: 10px; background-color: #017F01; color: white; padding: 5px 10px; border: none; cursor: pointer;">
            <i class="fas fa-list"></i> ciudades
        </button>
    </div>




    <div class="seccion-map">
        <div>



            <div class="fila">
                {{-- CIUDADES Y MAPAS --}}

                <div class="fila-lista-mapa">

                    {{-- LISTA DE CIUDADES --}}
                    <div id="ciudades-list" class=" ciudades columna" style="width: 25%;  border: 1px solid #ccc;">

                        <h6 style="color: white" class="encabezado">Ciudades Disponibles</h6>
                        <ul class="ul-ciudad">
                            <li class="li-ciudad"> <i class="fa-solid fa-square-caret-right"></i> Item 01</li>
                            <li class="li-ciudad"> <i class="fa-solid fa-square-caret-right"></i> Item 01</li>
                            <li class="li-ciudad"> <i class="fa-solid fa-square-caret-right"></i> Item 01</li>
                            <li class="li-ciudad"><i class="fa-solid fa-square-caret-right"></i> Item 01</li>
                            <li class="li-ciudad"> <i class="fa-solid fa-square-caret-right"></i> Item 01</li>
                            <li class="li-ciudad"> <i class="fa-solid fa-square-caret-right"></i> Item 01</li>
                            <li class="li-ciudad"> <i class="fa-solid fa-square-caret-right"></i> Item 01</li>
                            <li class="li-ciudad"> <i class="fa-solid fa-square-caret-right"></i> Item 01</li>
                            <li class="li-ciudad"> <i class="fa-solid fa-square-caret-right"></i> Item 01</li>
                            <li class="li-ciudad"> <i class="fa-solid fa-square-caret-right"></i> Item 01</li>
                        </ul>

                    </div>



                    {{-- MAPA --}}
                    <div class="direcciones columna" style="width: 45%">
                        <div class="mapa" style="position: relative;">
                            <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Les%20Rambles,%201%20Barcelona,%20Spain+(Mi%20nombre%20de%20negocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>

                        </div>

                    </div>


                </div>

                {{-- CALL CENTER --}}
                <div class="call columna" style="width: 30%">
                    <div class="call-center">

                        <div>

                            <div class="tarjeta">
                                <div class="contenido">
                                    <div style="border-block: inherit; margin-bottom: 20px;">
                                        <h5 style="text-align: center;" class="title">CALL CENTER</h5>
                                    </div>
                                    <div>

                                        <div
                                            class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_134_4_653170f033005">
                                            <div style=" padding: inherit;padding-left: 4%; border: none;"
                                                class="jkit-icon-box-wrapper hover-from-left">
                                                <div class="bg-icon-call-center">
                                                    <div class="icon style-color">
                                                        <i aria-hidden="true" class="jki jki-phone-call-line"></i>
                                                    </div>
                                                </div>

                                                <div class="icon-box icon-box-body"
                                                    style="width: 100%;     margin-left: 3%;">
                                                    <h4 class="title" style=" font-size: larger;text-align: left; ">
                                                        Teléfono Celular</h4>
                                                    <p class="icon-box-description"
                                                        style="text-align: left;margin-top: -10px">(+62)81 250
                                                        3358</p>
                                                </div>


                                            </div>
                                        </div>


                                        <div
                                            class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_134_4_653170f033005">
                                            <div style=" padding: inherit;padding-left: 4%; border: none;"
                                                class="jkit-icon-box-wrapper hover-from-left">
                                                <div class="bg-icon-call-center">
                                                    <div class="icon style-color">
                                                        <i aria-hidden="true" class="jki jki-envelope2-light"></i>
                                                    </div>
                                                </div>

                                                <div class="icon-box icon-box-body"
                                                    style="width: 100%;     margin-left: 3%;">
                                                    <h4 class="title" style=" font-size: larger; text-align: left; ">
                                                        Correo Electrónico</h4>
                                                    <p class="icon-box-description"
                                                        style="text-align: left;margin-top: -10px">
                                                        contacto@turismodias.com</p>
                                                </div>


                                            </div>
                                        </div>


                                        <div
                                            class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_134_4_653170f033005">
                                            <div style=" padding: inherit;
                                        padding-left: 4%; border: none;"
                                                class="jkit-icon-box-wrapper hover-from-left">
                                                <div class="bg-icon-call-center">
                                                    <div class="icon style-color">
                                                        <i aria-hidden="true" class="jki jki-calendar-alt-solid"></i>
                                                    </div>
                                                </div>

                                                <div class="icon-box icon-box-body"
                                                    style="width: 100%;     margin-left: 3%;">
                                                    <h4 class="title" style="font-size: larger; text-align: left; ">
                                                        Horario
                                                    </h4>
                                                    <p class="icon-box-description"
                                                        style="text-align: left;margin-top: -10px">Lunes -
                                                        Domingo
                                                    </p>
                                                    <p class="icon-box-description"
                                                        style="text-align: left;margin-top: -10px">7:00 am -
                                                        10:30
                                                        pm</p>
                                                </div>


                                            </div>
                                        </div>



                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener elementos del DOM
            var ciudadesList = document.getElementById('ciudades-list');
            var mostrarCiudadesButton = document.getElementById('mostrar-ciudades');

            // Manejador de evento para el botón
            mostrarCiudadesButton.addEventListener('click', function() {
                if (ciudadesList.style.display === 'none') {
                    ciudadesList.style.display = 'block';
                } else {
                    ciudadesList.style.display = 'none';
                }
            });
        });
    </script>
</div>
