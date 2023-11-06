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

        <style>
            .text-center {
                text-align: center;
            }

            #map {
                width: 100%;
                height: 100%;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel='stylesheet' href='https://unpkg.com/leaflet@1.8.0/dist/leaflet.css' crossorigin='' />
    </head>


    <div class="bt-ciudades">

        <button id="mostrar-ciudades"
            style=" top: 10px; right: 10px; background-color: #017F01; color: white; padding: 5px 10px; border: none; cursor: pointer;">
            <i class="fas fa-list"></i> ciudades
        </button>
    </div>

    <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2653e49d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="2653e49d" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-27e5c5f0"
                            data-id="27e5c5f0" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-571cee57 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                    data-id="571cee57" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h5 class="elementor-heading-title elementor-size-default">Turismo Dias</h5>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3bedf1b8 elementor-widget elementor-widget-jkit_heading"
                                    data-id="3bedf1b8" data-element_type="widget"
                                    data-widget_type="jkit_heading.default">
                                    <div class="elementor-widget-container">
                                        <div
                                            class="jeg-elementor-kit jkit-heading  align-center align-tablet-center align-mobile-center jeg_module_128_7_653170df725d3">
                                            <div class="heading-section-title  display-inline-block">
                                                <h2 class="heading-title">Rutas Disponibles para: <span
                                                        class="style-color"><span>@if($ciudad){{$ciudad['descripcion']}}@endif</span></span> </h2>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div
                                    class="elementor-element elementor-element-112472f0 elementor-widget elementor-widget-text-editor">
                                    <div class="elementor-widget-container">
                                        Selecciona una ciudad para conocer nuestras oficinas, rutas y horarios
                                        disponibles.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>


    <div class="seccion-map">
        {{-- <div> --}}

            <div class="fila">
                {{-- CIUDADES Y MAPAS --}}

                <div class="fila-lista-mapa">

                    {{-- LISTA DE CIUDADES --}}
                    <div id="ciudades-list" class=" ciudades columna" style="width: 25%;  border: 1px solid #ccc;">

                        <h6 style="color: white" class="encabezado">Ciudades Disponibles</h6>

                        <ul class="ul-ciudad">
                            @foreach ($ciudades as $ciudad)
                                <li class="li-ciudad" wire:click='getDetallesDeUnaCiudad(@json($ciudad))'>
                                    <i class="fa-solid fa-square-caret-right"></i> {{ $ciudad['descripcion'] }}
                                </li>
                            @endforeach

                            {{-- /* Para la funcionalidad del mapa */  --}}
                            {{--  @foreach ($cities as $city)
                                <li class="li-ciudad" data-latitude="{{ $city['latitude'] }}"
                                    data-longitude="{{ $city['longitude'] }}" wire:key="{{ $city['id'] }}">
                                    <i class="fa-solid fa-square-caret-right"></i> {{ $city['name'] }}
                                </li>
                            @endforeach --}}
                        </ul>


                    </div>



                    {{-- MAPA --}}
                    <div class="direcciones columna" style="width: 45%">
                        <div class="mapa" style="position: relative;">
                            {{-- <div id='map'></div> --}}
                            <div class="row col" style="background:green">MAPA</div>

                        </div>

                    </div>


                </div>

                {{-- CALL CENTER --}}
                <div class="call columna" style="width: 30%">
                    <div class="call-center">

                        {{-- <div> --}}

                            <div class="tarjeta">
                                <div class="contenido">
                                    <div style="border-block: inherit; margin-bottom: 20px;">
                                        <h5 style="text-align: center;" class="title">CALL CENTER</h5>
                                    </div>
                                    {{-- <div> --}}

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
                                                    <p class="icon-box-description" style="text-align: left;margin-top: -10px">
                                                        {{$call_center['celular_principal']}} - {{$call_center['celular_secundario']}}
                                                    </p>
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
                                                    <p class="icon-box-description" style="text-align: left;margin-top: -10px">
                                                        {{$call_center['correo_principal']}}<br>
                                                        {{$call_center['correo_secundario']}}
                                                    </p>
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
                                                        style="text-align: left;margin-top: -10px">{{$call_center['horario_atencion_principal']}}</p>
                                                </div>


                                            </div>
                                        </div>



                                    {{-- </div> --}}
                                </div>


                            </div>


                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </div>

    <div class="row">
        @foreach ($tipo_buses_disponibles as $key => $tbd)
            <div class="col-4">
                <h3>{{$tbd['nombre_tipo_bus']}}</h3>
                @foreach ($rutas as $key => $ruta)
                    @if ($ruta['nombre_tipo_bus']==$tbd['nombre_tipo_bus'])
                        <li>{{$ruta['nombre_tipo_bus']}}/{{$ruta['nombre_ruta']}}/{{$ruta['hora_salida']}}-{{$ruta['hora_llegada']}}</li>
                    @endif
                @endforeach
            </div>
        @endforeach
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
    <script src='https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' crossorigin=''></script>
    <script>
        let map, markers = [];
        /* ----------------------------- Initialize Map ----------------------------- */
        function initMap() {
            map = L.map('map', {
                center: {
                    lat: -7.169249549585607,
                    lng: -78.49936645500152,
                },
                zoom: 8
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap'
            }).addTo(map);


            initMarkers();
        }

        initMap();

        /* ------------------------  Para la funcionalidad del mapa ------------------------------- */


        const ciudadElements = document.querySelectorAll('.li-ciudad');

         ciudadElements.forEach(element => {
             element.addEventListener('click', function() {
                 const latitude = this.getAttribute('data-latitude');
                 const longitude = this.getAttribute('data-longitude');
                 map.flyTo([latitude, longitude], 13);
             });
         });


         function initMarkers() {
             const initialMarkers = <?php echo json_encode($initialMarkers); ?>;

             for (let index = 0; index < initialMarkers.length; index++) {
                 const data = initialMarkers[index];
                 const city = <?php echo json_encode($cities); ?>[index]['name'];
                 const coordinates = `Lat: ${data.position.lat}, Lng: ${data.position.lng}`;
                 const popupContent = `Estás en la ciudad '${city}' con coordenadas ${coordinates}`;
                 const marker = generateMarker(data, popupContent);
                 marker.addTo(map).bindPopup(popupContent); // Mostrar el contenido en el pop-up
                 map.panTo(data.position);
                 markers.push(marker);
             }
         }

         function generateMarker(data, index) {
             return L.marker(data.position, {
                 draggable: data.draggable
             });
         }
      
    </script>

    
</div>
