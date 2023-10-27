@extends('layouts.principal')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="./../../xmlrpc.php">
   {{--  <title>FAQ &#8211; Titulo temporal</title> --}}
    <meta name="robots" content="max-image-preview:large">
    <link rel="alternate" type="application/rss+xml" title="Titulo temporal &raquo; Feed" href="./../../feed/index.html">
    <link rel="alternate" type="application/rss+xml" title="Titulo temporal &raquo; Feed de comentarios"
        href="./../../comments/feed/index.html">


    <link rel="stylesheet" id="jkit-elements-main-css"
        href="assets/wp-content/plugins/jeg-elementor-kit/assets/css/elements/main.css?ver=2.6.2" media="all">
    <link rel="stylesheet" id="wp-block-library-css"
        href="assets/wp-includes/css/dist/block-library/style.min.css?ver=6.3.2" media="all">


    <link rel="stylesheet" id="hfe-style-css"
        href="assets/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.17"
        media="all">
    <link rel="stylesheet" id="elementor-icons-css"
        href="assets/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.23.0"
        media="all">
    <link rel="stylesheet" id="elementor-frontend-css"
        href="assets/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.16.6" media="all">
    <link rel="stylesheet" id="swiper-css"
        href="assets/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5" media="all">
    <link rel="stylesheet" id="elementor-post-12-css"
        href="assets/wp-content/uploads/elementor/css/post-12.css?ver=1697732467" media="all">
    <link rel="stylesheet" id="elementor-post-142-css"
        href="assets/wp-content/uploads/elementor/css/post-142.css?ver=1697737164" media="all">
    <link rel="stylesheet" id="hfe-widgets-style-css"
        href="assets/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.17" media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css"
        href="assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.16.6" media="all">
    <link rel="stylesheet" id="font-awesome-4-shim-css"
        href="assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.16.6"
        media="all">
    <link rel="stylesheet" id="elementor-post-177-css"
        href="assets/wp-content/uploads/elementor/css/post-177.css?ver=1697735167" media="all">
    <link rel="stylesheet" id="elementor-post-232-css"
        href="assets/wp-content/uploads/elementor/css/post-232.css?ver=1697736720" media="all">
    <link rel="stylesheet" id="text-editor-style-css"
        href="assets/wp-content/plugins/metform/public/assets/css/text-editor.css?ver=3.6.0" media="all">
    <link rel="stylesheet" id="hello-elementor-css"
        href="assets/wp-content/themes/hello-elementor/style.min.css?ver=2.8.1" media="all">
    <link rel="stylesheet" id="hello-elementor-theme-style-css"
        href="assets/wp-content/themes/hello-elementor/theme.min.css?ver=2.8.1" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Barlow%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.3.2"
        media="all">
    <link rel="stylesheet" id="elementor-icons-jkiticon-css"
        href="assets/wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon.css?ver=2.6.2" media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css"
        href="assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css"
        href="assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css"
        href="assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3"
        media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="assets/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.16.6"
        id="font-awesome-4-shim-js"></script>
    <script src="assets/wp-includes/js/jquery/jquery.min.js?ver=3.7.0" id="jquery-core-js"></script>
    <script src="assets/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="./../../wp-json/index.html">
    <link rel="alternate" type="application/json" href="./../../wp-json/wp/v2/pages/142/index.html">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="./../../xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.3.2">
    <link rel="canonical" href="./index.html">
    <link rel="shortlink" href="./../../index.html?p=142">
    <link rel="alternate" type="application/json+oembed"
        href="./../../wp-json/oembed/1.0/embed/index.html?url=.%2F%2Fpages%2Ffaq%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="./../../wp-json/oembed/1.0/embed/index.html?url=.%2F%2Fpages%2Ffaq%2F#038;format=xml">
    <meta name="generator"
        content="Elementor 3.16.6; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">

    <style>
        .elementor-142 .elementor-element.elementor-element-7b9d4ac5:not(.elementor-motion-effects-element-type-background),
        .elementor-142 .elementor-element.elementor-element-7b9d4ac5>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("assets/img/header-secciones.jpg");

        }
    </style>
</head>

@section('contenidoPrincipal')

    <body
        class="page-template page-template-elementor_header_footer page page-id-142 page-child parent-pageid-130 ehf-header ehf-footer ehf-template-hello-elementor ehf-stylesheet-hello-elementor jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-12 elementor-page elementor-page-142">
        <div id="page" class="hfeed site">


            <div data-elementor-type="wp-page" data-elementor-id="142" class="elementor elementor-142">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-7b9d4ac5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="7b9d4ac5" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d93f6a0"
                            data-id="d93f6a0" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-66d53345 elementor-widget elementor-widget-heading"
                                    data-id="66d53345" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.16.0 - 17-10-2023 */
                                            .elementor-heading-title {
                                                padding: 0;
                                                margin: 0;
                                                line-height: 1
                                            }

                                            .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                color: inherit;
                                                font-size: inherit;
                                                line-height: inherit
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                font-size: 15px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                font-size: 19px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                font-size: 29px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                font-size: 39px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                font-size: 59px
                                            }
                                        </style>
                                        <h2 class="elementor-heading-title elementor-size-default">Preguntas Frecuentes
                                        </h2>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-70397374 elementor-widget elementor-widget-text-editor">

                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7bbcc05e"
                            data-id="7bbcc05e" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-275dd1cf elementor-icon-list--layout-inline elementor-align-right elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="275dd1cf" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <link rel="stylesheet"
                                            href="assets/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <span class="elementor-icon-list-text">Inicio</span>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="jki jki-chevrons-right-line"></i> </span>
                                                <span class="elementor-icon-list-text">Condiciones de Viaje</span>
                                            </li>

                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <span class="elementor-icon-list-icon">
                                                    <i aria-hidden="true" class="jki jki-chevrons-right-line"></i> </span>
                                                <span class="elementor-icon-list-text">Preguntas Frecuentes</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-405acf80 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="405acf80" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1996cbbf animated-slow elementor-invisible"
                            data-id="1996cbbf" data-element_type="column"
                            data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-46994b93 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                    data-id="46994b93" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h5 class="elementor-heading-title elementor-size-default">Turismo Dias</h5>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-6d4653f5 elementor-widget elementor-widget-jkit_heading"
                                    data-id="6d4653f5" data-element_type="widget"
                                    data-widget_type="jkit_heading.default">
                                    <div class="elementor-widget-container">
                                        <div
                                            class="jeg-elementor-kit jkit-heading  align-left align-tablet- align-mobile- jeg_module_142_2_653170e6b4a9a">
                                            <div class="heading-section-title  display-inline-block">
                                                <h2 class="heading-title">Preguntas Frecuentes
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="elementor-element elementor-element-68044eb2 elementor-widget elementor-widget-jkit_accordion"
                                    data-id="68044eb2" data-element_type="widget"
                                    data-widget_type="jkit_accordion.default">
                                    <div class="elementor-widget-container">
                                        <div
                                            class="jeg-elementor-kit jkit-accordion style-default jeg_module_142_3_653170e6b92ac">
                                            <div class="card-wrapper expand">
                                                <div class="card-header">
                                                    <a href="#expand-cf689ee" class="card-header-button"
                                                        aria-expanded="false" data-target="#expand-cf689ee"
                                                        aria-controls="expand-cf689ee">
                                                        <div class="left-icon-group">
                                                            <div class="normal-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-right-line"></i></div>
                                                            <div class="active-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-down-line"></i></div>
                                                        </div>
                                                        <span class="title">¿Cuáles son los requisitos para el viaje de un
                                                            menor de edad?</span>
                                                    </a>
                                                </div>
                                                <div class="card-expand" id="expand-cf689ee" style="display:block">
                                                    <div class="card-body">Los niños a partir de 5 años deberán pagar su
                                                        pasaje correspondiente, viajarán acompañados de sus padres o caso
                                                        contrario portar permiso notarial.</div>
                                                </div>
                                            </div>
                                            <div class="card-wrapper ">
                                                <div class="card-header">
                                                    <a href="#expand-9259c74" class="card-header-button"
                                                        aria-expanded="false" data-target="#expand-9259c74"
                                                        aria-controls="expand-9259c74">
                                                        <div class="left-icon-group">
                                                            <div class="normal-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-right-line"></i></div>
                                                            <div class="active-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-down-line"></i></div>
                                                        </div>
                                                        <span class="title">¿Se pueden realizar viajes con
                                                            animales?</span>
                                                    </a>
                                                </div>
                                                <div class="card-expand" id="expand-9259c74" style="display:none">
                                                    <div class="card-body">No es posible, no transportamos animales.</div>
                                                </div>
                                            </div>
                                            <div class="card-wrapper ">
                                                <div class="card-header">
                                                    <a href="#expand-75c9e32" class="card-header-button"
                                                        aria-expanded="false" data-target="#expand-75c9e32"
                                                        aria-controls="expand-75c9e32">
                                                        <div class="left-icon-group">
                                                            <div class="normal-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-right-line"></i></div>
                                                            <div class="active-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-down-line"></i></div>
                                                        </div>
                                                        <span class="title">¿Con cuánto tiempo anticipado puede postergar
                                                            mi
                                                            pasaje?</span>
                                                    </a>
                                                </div>
                                                <div class="card-expand" id="expand-75c9e32" style="display:none">
                                                    <div class="card-body">Las postergaciones se realizan hasta 4 horas
                                                        antes de la salida del bus que ya tiene comprado. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="elementor-element elementor-element-6bc99baf elementor-align-left elementor-widget elementor-widget-button"
                data-id="6bc99baf" data-element_type="widget" data-widget_type="button.default">
                <div class="elementor-widget-container">
                 <div class="elementor-button-wrapper">
                  <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                   href="#">
                   <span class="elementor-button-content-wrapper">
                    <span class="elementor-button-text">More About Us</span>
                   </span>
                  </a>
                 </div>
                </div>
               </div> -->
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1996cbbf animated-slow elementor-invisible"
                            data-id="1996cbbf" data-element_type="column"
                            data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">



                                <div class="elementor-element elementor-element-68044eb2 elementor-widget elementor-widget-jkit_accordion"
                                    data-id="68044eb2" data-element_type="widget"
                                    data-widget_type="jkit_accordion.default">
                                    <div class="elementor-widget-container">
                                        <div
                                            class="jeg-elementor-kit jkit-accordion style-default jeg_module_142_3_653170e6b92ac">
                                            <div class="card-wrapper ">
                                                <div class="card-header">
                                                    <a href="#expand-9259c74" class="card-header-button"
                                                        aria-expanded="false" data-target="#expand-9259c74"
                                                        aria-controls="expand-9259c74">
                                                        <div class="left-icon-group">
                                                            <div class="normal-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-right-line"></i></div>
                                                            <div class="active-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-down-line"></i></div>
                                                        </div>
                                                        <span class="title">¿Cuál es el tiempo de espera para el
                                                            embarque?</span>
                                                    </a>
                                                </div>
                                                <div class="card-expand" id="expand-9259c74" style="display:none">
                                                    <div class="card-body">La espera para el embarque es de 5 minutos como
                                                        máximo. </div>
                                                </div>
                                            </div>
                                            <div class="card-wrapper ">
                                                <div class="card-header">
                                                    <a href="#expand-9259c74" class="card-header-button"
                                                        aria-expanded="false" data-target="#expand-9259c74"
                                                        aria-controls="expand-9259c74">
                                                        <div class="left-icon-group">
                                                            <div class="normal-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-right-line"></i></div>
                                                            <div class="active-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-down-line"></i></div>
                                                        </div>
                                                        <span class="title">¿Puedo viajar con DNI vencido?</span>
                                                    </a>
                                                </div>
                                                <div class="card-expand" id="expand-9259c74" style="display:none">
                                                    <div class="card-body">No es posible, debe adicionar su Ticket de
                                                        Tramite y una FICHA RENIEC. </div>
                                                </div>
                                            </div>
                                            <div class="card-wrapper ">
                                                <div class="card-header">
                                                    <a href="#expand-75c9e32" class="card-header-button"
                                                        aria-expanded="false" data-target="#expand-75c9e32"
                                                        aria-controls="expand-75c9e32">
                                                        <div class="left-icon-group">
                                                            <div class="normal-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-right-line"></i></div>
                                                            <div class="active-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-down-line"></i></div>
                                                        </div>
                                                        <span class="title">¿Puede un menor de edad viajar en asientos
                                                            panorámico? </span>
                                                    </a>
                                                </div>
                                                <div class="card-expand" id="expand-75c9e32" style="display:none">
                                                    <div class="card-body">No es posible, los menores de edad, mujeres
                                                        embarazadas y personas de la tercera edad; a partir de los 65 años,
                                                        no podrán viajar en asientos PANORÁMICOS. </div>
                                                </div>
                                            </div>
                                            <div class="card-wrapper ">
                                                <div class="card-header">
                                                    <a href="#expand-75c9e32" class="card-header-button"
                                                        aria-expanded="false" data-target="#expand-75c9e32"
                                                        aria-controls="expand-75c9e32">
                                                        <div class="left-icon-group">
                                                            <div class="normal-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-right-line"></i></div>
                                                            <div class="active-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-down-line"></i></div>
                                                        </div>
                                                        <span class="title">¿De cuantos grados es el servicio? </span>
                                                    </a>
                                                </div>
                                                <div class="card-expand" id="expand-75c9e32" style="display:none">
                                                    <div class="card-body">Nuestro servicio económico es de 140° y nuestro
                                                        servicio vip es 160°. </div>
                                                </div>
                                            </div>
                                            <div class="card-wrapper ">
                                                <div class="card-header">
                                                    <a href="#expand-75c9e32" class="card-header-button"
                                                        aria-expanded="false" data-target="#expand-75c9e32"
                                                        aria-controls="expand-75c9e32">
                                                        <div class="left-icon-group">
                                                            <div class="normal-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-right-line"></i></div>
                                                            <div class="active-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-down-line"></i></div>
                                                        </div>
                                                        <span class="title">¿Los buses tienen Cargador micro USB?</span>
                                                    </a>
                                                </div>
                                                <div class="card-expand" id="expand-75c9e32" style="display:none">
                                                    <div class="card-body">Si, todos nuestros servicios lo tienen. </div>
                                                </div>
                                            </div>
                                            <div class="card-wrapper ">
                                                <div class="card-header">
                                                    <a href="#expand-75c9e32" class="card-header-button"
                                                        aria-expanded="false" data-target="#expand-75c9e32"
                                                        aria-controls="expand-75c9e32">
                                                        <div class="left-icon-group">
                                                            <div class="normal-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-right-line"></i></div>
                                                            <div class="active-icon"><i aria-hidden="true"
                                                                    class="jki jki-chevrons-down-line"></i></div>
                                                        </div>
                                                        <span class="title">¿Cuántos kilos de equipaje equivale mi pasaje?
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="card-expand" id="expand-75c9e32" style="display:none">
                                                    <div class="card-body">El pasajero portará libre de pago 20 kg de
                                                        equipaje. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="elementor-element elementor-element-6bc99baf elementor-align-left elementor-widget elementor-widget-button"
                data-id="6bc99baf" data-element_type="widget" data-widget_type="button.default">
                <div class="elementor-widget-container">
                 <div class="elementor-button-wrapper">
                  <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                   href="#">
                   <span class="elementor-button-content-wrapper">
                    <span class="elementor-button-text">More About Us</span>
                   </span>
                  </a>
                 </div>
                </div>
               </div> -->
                            </div>
                        </div>
                    </div>
                </section>


            </div>


        </div>
        <!-- #page -->
        <link rel="stylesheet" id="jeg-dynamic-style-css"
            href="assets/wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles.css?ver=1.3.0"
            media="all">
        <link rel="stylesheet" id="e-animations-css"
            href="assets/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.16.6" media="all">
        <script src="assets/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0"
            id="hello-theme-frontend-js"></script>
        <script src="assets/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.16.6"
            id="elementor-webpack-runtime-js"></script>
        <script src="assets/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.16.6"
            id="elementor-frontend-modules-js"></script>
        <script src="assets/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
            id="elementor-waypoints-js"></script>
        <script src="assets/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
        <script id="elementor-frontend-js-before">
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false,
                    "isScriptDebug": false
                },
                "i18n": {
                    "shareOnFacebook": "Compartir en Facebook",
                    "shareOnTwitter": "Compartir en Twitter",
                    "pinIt": "Pinear",
                    "download": "Descargar",
                    "downloadImage": "Descargar imagen",
                    "fullscreen": "Pantalla completa",
                    "zoom": "Zoom",
                    "share": "Compartir",
                    "playVideo": "Reproducir vídeo",
                    "previous": "Anterior",
                    "next": "Siguiente",
                    "close": "Cerrar",
                    "a11yCarouselWrapperAriaLabel": "Carrusel | Scroll horizontal: Flecha izquierda y derecha",
                    "a11yCarouselPrevSlideMessage": "Diapositiva anterior",
                    "a11yCarouselNextSlideMessage": "Diapositiva siguiente",
                    "a11yCarouselFirstSlideMessage": "Esta es la primera diapositiva",
                    "a11yCarouselLastSlideMessage": "Esta es la última diapositiva",
                    "a11yCarouselPaginationBulletMessage": "Ir a la diapositiva"
                },
                "is_rtl": false,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1025,
                    "xl": 1440,
                    "xxl": 1600
                },
                "responsive": {
                    "breakpoints": {
                        "mobile": {
                            "label": "Móvil vertical",
                            "value": 767,
                            "default_value": 767,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "mobile_extra": {
                            "label": "Móvil horizontal",
                            "value": 880,
                            "default_value": 880,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "tablet": {
                            "label": "Tableta vertical",
                            "value": 1024,
                            "default_value": 1024,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "tablet_extra": {
                            "label": "Tableta horizontal",
                            "value": 1200,
                            "default_value": 1200,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "laptop": {
                            "label": "Portátil",
                            "value": 1366,
                            "default_value": 1366,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "widescreen": {
                            "label": "Pantalla grande",
                            "value": 2400,
                            "default_value": 2400,
                            "direction": "min",
                            "is_enabled": false
                        }
                    }
                },
                "version": "3.16.6",
                "is_static": false,
                "experimentalFeatures": {
                    "e_dom_optimization": true,
                    "e_optimized_assets_loading": true,
                    "e_optimized_css_loading": true,
                    "additional_custom_breakpoints": true,
                    "container": true,
                    "e_swiper_latest": true,
                    "hello-theme-header-footer": true,
                    "landing-pages": true,
                    "e_global_styleguide": true
                },
                "urls": {
                    "assets": ".\/\/wp-content\/plugins\/elementor\/assets\/"
                },
                "swiperClass": "swiper",
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                    "global_image_lightbox": "yes",
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description",
                    "hello_header_logo_type": "title",
                    "hello_header_menu_layout": "horizontal",
                    "hello_footer_logo_type": "logo"
                },
                "post": {
                    "id": 142,
                    "title": "FAQ%20%E2%80%93%20Titulo%20temporal",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
        </script>
        <script src="assets/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.16.6" id="elementor-frontend-js">
        </script>
        <script id="elementor-frontend-js-after">
            var jkit_ajax_url = ".//?jkit-ajax-request=jkit_elements",
                jkit_nonce = "14b06dc768";
        </script>
        <script src="assets/wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-element.js?ver=2.6.2"
            id="jkit-sticky-element-js"></script>
        <script src="assets/wp-content/plugins/jeg-elementor-kit/assets/js/elements/nav-menu.js?ver=2.6.2"
            id="jkit-element-navmenu-js"></script>
        <script src="assets/wp-content/plugins/jeg-elementor-kit/assets/js/elements/accordion.js?ver=2.6.2"
            id="jkit-element-accordion-js"></script>
        <script id="jkit-element-pagination-js-extra">
            var jkit_element_pagination_option = {
                "element_prefix": "jkit_element_ajax_"
            };
        </script>
        <script src="assets/wp-content/plugins/jeg-elementor-kit/assets/js/elements/post-pagination.js?ver=2.6.2"
            id="jkit-element-pagination-js"></script>
        <script src="assets/wp-content/plugins/jeg-elementor-kit/assets/js/elements/mailchimp.js?ver=2.6.2"
            id="jkit-element-mailchimp-js"></script>
        <script src="assets/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
        <script id="wp-util-js-extra">
            var _wpUtilSettings = {
                "ajax": {
                    "url": "\/wordpress\/wp-admin\/admin-ajax.php"
                }
            };
        </script>
        <script src="assets/wp-includes/js/wp-util.min.js?ver=6.3.2" id="wp-util-js"></script>
        <script id="wpforms-elementor-js-extra">
            var wpformsElementorVars = {
                "captcha_provider": "recaptcha",
                "recaptcha_type": "v2"
            };
        </script>
        <script src="assets/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.4"
            id="wpforms-elementor-js"></script>
    </body>
@endsection
