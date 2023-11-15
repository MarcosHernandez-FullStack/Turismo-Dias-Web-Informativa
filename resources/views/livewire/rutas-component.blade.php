<div>


    <head>
        <style>
            /* Establece los estilos iniciales */

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
                cursor: pointer;
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
                    width: 78% !important;
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

            /* Estilizar la scrollbar para navegadores WebKit (Safari, Chrome, etc.) */
            #ciudades-list::-webkit-scrollbar {
                width: 6px;
                /* Ancho de la scrollbar vertical */
            }

            #ciudades-list::-webkit-scrollbar-thumb {
                background-color: #b3b3b3;
                /* Color del pulgar (barra desplazadora) */
                border-radius: 6px;
                /* Borde redondeado del pulgar */
            }

            #ciudades-list::-webkit-scrollbar-track {
                background-color: #eee;
                /* Color de la pista (fondo de la scrollbar) */
                border-radius: 6px;
                /* Borde redondeado de la pista */
            }

            #ciudades-list::-webkit-scrollbar-thumb:hover {
                background-color: #555;
                /* Cambio de color del pulgar al pasar el mouse */
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel='stylesheet' href='https://unpkg.com/leaflet@1.8.0/dist/leaflet.css' crossorigin='' />
    </head>



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
                        data-id="3bedf1b8" data-element_type="widget" data-widget_type="jkit_heading.default">
                        <div class="elementor-widget-container">
                            <div
                                class="jeg-elementor-kit jkit-heading  align-center align-tablet-center align-mobile-center jeg_module_128_7_653170df725d3">
                                <div class="heading-section-title  display-inline-block">
                                    <h2 class="heading-title">Rutas Disponibles para: <span class="style-color"><span>
                                                @if ($ciudad)
                                                    {{ $ciudad['descripcion'] }}
                                                @endif



                                </div>
                            </div>

                        </div>
                        <br>
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


    {{--   <div class="bt-ciudades">

        <button id="mostrar-ciudades"
            style=" top: 10px; right: 10px; background-color: #017F01; color: white; padding: 5px 10px; border: none; cursor: pointer;">
            <i class="fas fa-list"></i> ciudades
        </button>
    </div> --}}

    <div class="seccion-map">
        {{-- <div> --}}

        <div class="fila">
            {{-- CIUDADES Y MAPAS --}}

            <div class="fila-lista-mapa">

                {{-- LISTA DE CIUDADES --}}
                <div id="ciudades-list" class="ciudades columna"
                    style="width: 25%; border: 1px solid #ccc; max-height: 500px; overflow-y: auto; position: relative;">

                    <h6 style="color: white; position: sticky; top: 0;" class="encabezado">Ciudades Disponibles</h6>

                    <ul class="ul-ciudad">
                        {{--  @foreach ($ciudades as $ciudad)
                            <li class="li-ciudad" wire:click='getDetallesDeUnaCiudad(@json($ciudad))'>
                                <i class="fa-solid fa-square-caret-right"></i> {{ $ciudad['descripcion'] }}
                            </li>
                        @endforeach --}}

                        @foreach ($ciudades as $city)
                            <li class="li-ciudad" wire:click='getDetallesDeUnaCiudad(@json($city))'
                                data-latitude="{{ $city['latitude'] }}" data-longitude="{{ $city['longitude'] }}"
                                wire:key="{{ $city['id'] }}">
                                <i class="fa-solid fa-square-caret-right"></i> {{ $city['descripcion'] }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- MAPA --}}
                <div class="direcciones columna" style="width: 45%">
                    <div class="mapa" style="position: relative" wire:ignore="map">
                        <div id='map'></div>
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

                                    <div class="icon-box icon-box-body" style="width: 100%;     margin-left: 3%;">
                                        <h4 class="title" style=" font-size: larger;text-align: left; ">
                                            Teléfono Celular</h4>
                                        <p class="icon-box-description" style="text-align: left;margin-top: -10px">
                                            {{ $call_center['celular_principal'] }}

                                            @if ($call_center['celular_secundario'])
                                                <br>
                                                {{ $call_center['celular_secundario'] }}
                                            @endif

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

                                    <div class="icon-box icon-box-body" style="width: 100%;     margin-left: 3%;">
                                        <h4 class="title" style=" font-size: larger; text-align: left; ">
                                            Correo Electrónico</h4>
                                        <p class="icon-box-description" style="text-align: left;margin-top: -10px">
                                            {{ $call_center['correo_principal'] }}

                                            @if ($call_center['correo_secundario'])
                                                <br>
                                                {{ $call_center['correo_secundario'] }}
                                            @endif

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

                                    <div class="icon-box icon-box-body" style="width: 100%;     margin-left: 3%;">
                                        <h4 class="title" style="font-size: larger; text-align: left; ">
                                            Horario
                                        </h4>
                                        <p class="icon-box-description" style="text-align: left;margin-top: -10px">
                                            Lunes
                                            -
                                            Domingo
                                        </p>
                                        <p class="icon-box-description" style="text-align: left;margin-top: -10px">
                                            {{ $call_center['horario_atencion_principal'] }}</p>
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


    <div style="padding: 5%; margin-top: -5%">
        <style>
            .card-bus {
                width: 80%;
                background: #fff;
                border-radius: 10px;
                border: 5px solid #fff;
                overflow: hidden;

                box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
                cursor: pointer;
                transition: all .2s ease-in-out;

                margin-top: 33%;
                z-index: 2;

                /*  min-height: 320px; */
            }

            .card-bus:hover {
                transform: scale(1.03);

            }

            .card-bus:hover i {

                color: #017F01;
            }


            .column-container {

                display: flex;
                justify-content: space-around;
                width: 100%;

            }

            .card-bus h4 {
                text-align: center;
            }

            .card-bus p {
                text-align: center;
            }

            .content-image {
                position: absolute;
                width: 30%;
                justify-content: center;
                display: flex;
            }

            .content-image img {

                border-radius: 10px;
                object-fit: cover;
                height: 189px;
                width: 80%;
            }

            .column-item {
                width: 30%;
                justify-content: center;
                display: flex;
                margin-bottom: auto;
            }

            .content-card-bus {
                padding-top: 30px;
                margin-bottom: 50px;
            }




            @media (max-width: 1000px) {

                .content-image img {
                    border-radius: 10px;
                    object-fit: cover;
                    height: 189px;
                    width: 410px;
                }

                .column-container {
                    margin-left: 12%;
                    display: block;
                    justify-content: space-between;
                    width: 100%;

                }

                .column-item {
                    width: 80%;
                    justify-content: center;
                    display: flex;
                    margin-bottom: 10%;
                }

                .content-image {
                    position: absolute;

                    width: 100%;
                }

                .card-bus {
                    margin-top: 160px;
                    width: 362px;
                }
            }
        </style>
        <div class="column-container">
            @foreach ($tipo_buses as $key => $tipo_bus)
                @if ($tipo_bus['rutas'])
                    <div class="column-item">
                        <div class="content-image">
                            <img src="{{ $tipo_bus['ruta_foto_tipo_bus'] }}" />
                        </div>
                        <div class="card-bus">

                            <div class="content-card-bus">

                                <h4>{{ $tipo_bus['nombre'] }} <a href=""> <i style="font-size: 20px"
                                            class="fas fa-info-circle"></i></a>
                                </h4>

                                @foreach ($tipo_bus['rutas'] as $key => $ruta)
                                    <p>
                                        <span> {{ $ruta['nombre_origen'] }}-{{ $ruta['nombre_destino'] }}<br> <i
                                                class="fas fa-arrow-up"></i>
                                            {{ $ruta['hora_salida'] }} -
                                            <i class="fas fa-arrow-down"></i>{{ $ruta['hora_llegada'] }} </span>
                                    </p>
                                @endforeach



                            </div>
                        </div>
                    </div>
                @else
                    <div class="column-item">
                        <div class="content-image">
                            <img src="{{ $tipo_bus['ruta_foto_tipo_bus'] }}" />
                        </div>
                        <div class="card-bus">

                            <div class="content-card-bus">

                                <h4>{{ $tipo_bus['nombre'] }} <a href=""> <i style="font-size: 20px"
                                            class="fas fa-info-circle"></i></a>
                                </h4>


                                <p>
                                    <span> No se encontraron rutas para este servicio. </span>
                                </p>




                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>

    </div>
    <style>
        /* Define una clase CSS llamada 'green-icon' para cambiar el color a verde. */
        .green-icon {
            color: green;
        }
    </style>


    {{--  <div class="row">
        @foreach ($tipo_buses as $key => $tipo_bus)
            @if ($tipo_bus['rutas'])
                <div class="col-4">
                    <h3>{{ $tipo_bus['nombre'] }}</h3>
                    @foreach ($tipo_bus['rutas'] as $key => $ruta)
                        <li>{{ $ruta['nombre_tipo_bus'] }}/{{ $ruta['nombre_ruta'] }}/{{ $ruta['hora_salida'] }}-{{ $ruta['hora_llegada'] }}
                        </li>
                    @endforeach
                </div>
            @endif
        @endforeach
    </div> --}}
    {{--  <script>
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
    </script> --}}
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
                zoom: 6
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
                map.flyTo([latitude, longitude], 10);
            });
        });

        function initMarkers() {
            const initialMarkers = <?php echo json_encode($initialMarkers); ?>;
            const ambientes = <?php echo json_encode($ambientes); ?>;
            for (let index = 0; index < initialMarkers.length; index++) {
                const data = initialMarkers[index];
                const nombre = ambientes[index]['nombre'];
                const direccion = ambientes[index]['direccion'];
                const horario_atencion = ambientes[index]['horario_atencion'];
                const telefono = ambientes[index]['telefono'];
                const popupContent = `<div style="text-align: center;"><b>${nombre}</b></div>


                <br><i class="fas fa-map-marker-alt green-icon"></i> ${direccion}
                <br><i class="fas fa-calendar-alt green-icon"></i> ${horario_atencion}
                <br><i class="fas fa-phone-volume green-icon"></i> ${telefono}
                    `;

                /*    const popupContent = `Estás en la ciudad '${nombre_oficina}' con coordenadas ${coordinates}`; */
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
