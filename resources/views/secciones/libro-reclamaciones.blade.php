@extends('layouts.principal')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="./../xmlrpc.php">
    {{--   <title>Contact Us &#8211; Titulo temporal</title> --}}
    <meta name="robots" content="max-image-preview:large">
    <link rel="alternate" type="application/rss+xml" title="Titulo temporal &raquo; Feed" href="./../feed/index.html">
    <link rel="alternate" type="application/rss+xml" title="Titulo temporal &raquo; Feed de comentarios"
        href="./../comments/feed/index.html">


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
    <link rel="stylesheet" id="elementor-post-134-css"
        href="assets/wp-content/uploads/elementor/css/post-134.css?ver=1697736619" media="all">
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
        href="https://fonts.googleapis.com/css?family=Barlow%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.3.2"
        media="all">
    <link rel="stylesheet" id="elementor-icons-jkiticon-css"
        href="assets/wp-content/plugins/jeg-elementor-kit/assets/fonts/jkiticon/jkiticon.css?ver=2.6.2" media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css"
        href="assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3"
        media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css"
        href="assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css"
        href="assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="assets/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.16.6"
        id="font-awesome-4-shim-js"></script>
    <script src="assets/wp-includes/js/jquery/jquery.min.js?ver=3.7.0" id="jquery-core-js"></script>
    <script src="assets/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="./../wp-json/index.html">
    <link rel="alternate" type="application/json" href="./../wp-json/wp/v2/pages/134/index.html">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="./../xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.3.2">
    <link rel="canonical" href="./index.html">
    <link rel="shortlink" href="./../index.html?p=134">
    <link rel="alternate" type="application/json+oembed"
        href="./../wp-json/oembed/1.0/embed/index.html?url=.%2F%2Fcontact-us%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="./../wp-json/oembed/1.0/embed/index.html?url=.%2F%2Fcontact-us%2F#038;format=xml">
    <meta name="generator"
        content="Elementor 3.16.6; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">

    <style>
        .elementor-134 .elementor-element.elementor-element-415057a9:not(.elementor-motion-effects-element-type-background),
        .elementor-134 .elementor-element.elementor-element-415057a9>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url({{$data['fotoHeader']}});

        }
    </style>
</head>
@section('contenidoPrincipal')

    <body
        class="page-template page-template-elementor_header_footer page page-id-134 ehf-header ehf-footer ehf-template-hello-elementor ehf-stylesheet-hello-elementor jkit-color-scheme elementor-default elementor-template-full-width elementor-kit-12 elementor-page elementor-page-134">
        <div id="page" class="hfeed site">



            <div data-elementor-type="wp-page" data-elementor-id="134" class="elementor elementor-134">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-415057a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="415057a9" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-38ca0b42"
                            data-id="38ca0b42" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-43c4c6f7 elementor-widget elementor-widget-heading"
                                    data-id="43c4c6f7" data-element_type="widget" data-widget_type="heading.default">
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
                                        <h2 class="elementor-heading-title elementor-size-default">Libro de Reclamaciones​
                                        </h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-34c5a9f3"
                            data-id="34c5a9f3" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-7d960cf5 elementor-icon-list--layout-inline elementor-align-right elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                    data-id="7d960cf5" data-element_type="widget" data-widget_type="icon-list.default">
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
                                                <span class="elementor-icon-list-text">Libro de Reclamaciones​</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-69b5be3c elementor-section-content-middle elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="69b5be3c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-70 elementor-top-column elementor-element elementor-element-4b32ee4c"
                            data-id="4b32ee4c" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                              {{-- Formulario de libro de reclamaciones --}}
                              @livewire('reclamacion-form')
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-46a7bd9c"
                            data-id="46a7bd9c" data-element_type="column">
                            <div style="align-content: baseline;"
                                class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-7cf2dfbc animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                    data-id="7cf2dfbc" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h5 class="elementor-heading-title elementor-size-default">Turismo Dias</h5>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-48ca06c0 elementor-widget elementor-widget-heading"
                                    data-id="48ca06c0" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Libro de Reclamaciones
                                            Virtual</h2>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-2a6264f9 elementor-widget elementor-widget-text-editor">
                                    <div class="elementor-widget-container">
                                        <p>Una vez realizado un reclamo, pueden esperar una respuesta por correo
                                            electrónico o
                                            llamada telefónica. Además, estamos disponibles a través de nuestras oficinas,
                                            correo y teléfono convencional para cualquier comunicación adicional.
                                            Agradecemos
                                            sus aportaciones, ya que nos ayudan a mejorar nuestros servicios constantemente.
                                            </p>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-59f13f6e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="59f13f6e" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <!-- <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2b5a0b96"
                      data-id="2b5a0b96" data-element_type="column">
                      <div class="elementor-widget-wrap elementor-element-populated">
                       <div class="elementor-element elementor-element-11a5bfce jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                        data-id="11a5bfce" data-element_type="widget"
                        data-widget_type="jkit_icon_box.default">
                        <div class="elementor-widget-container">
                         <div
                          class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_134_2_653170f0310e1">
                          <div class="jkit-icon-box-wrapper hover-from-left">
                           <div class="icon-box icon-box-header elementor-animation-">
                            <div class="icon style-color"><i aria-hidden="true"
                              class="jki jki-cityscape-light"></i></div>
                           </div>
                           <div class="icon-box icon-box-body">
                            <h4 class="title">Denpasar</h4>
                            <p class="icon-box-description">Jl. Raya Puputan No 142,
                             Denpasar</p>
                           </div>

                          </div>
                         </div>
                        </div>
                       </div>
                      </div>
                     </div> -->
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7180a0ac"
                                            data-id="7180a0ac" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5baac7ce jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="5baac7ce" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_134_3_653170f031f29">
                                                            <div class="jkit-icon-box-wrapper hover-from-left">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    <div class="icon style-color"><i aria-hidden="true"
                                                                            class="jki jki-apartment1-light"></i></div>
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h4 class="title">Nuestras Oficinas</h4>
                                                                    <a href="{{ route('seccion.rutas') }}">
                                                                        Ver Oficinas
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                @if($data['correoPrincipal'])
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-40752fe5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="40752fe5" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">



                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d9e379f"
                                            data-id="d9e379f" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-54a55f20 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="54a55f20" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_134_5_653170f034417">
                                                            <div class="jkit-icon-box-wrapper hover-from-left">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    <div class="icon style-color"><i aria-hidden="true"
                                                                            class="jki jki-envelope2-light"></i></div>
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h4 class="title">Correo Electrónico</h4>
                                                                    <p class="icon-box-description">{{$data['correoPrincipal']}}</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                @endif
                                @if($data['celularPrincipal'])
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-40752fe5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="40752fe5" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">

                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d9e379f"
                                            data-id="d9e379f" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-54a55f20 jkit-equal-height-disable elementor-widget elementor-widget-jkit_icon_box"
                                                    data-id="54a55f20" data-element_type="widget"
                                                    data-widget_type="jkit_icon_box.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="jeg-elementor-kit jkit-icon-box icon-position-left elementor-animation- jeg_module_134_4_653170f033005">
                                                            <div class="jkit-icon-box-wrapper hover-from-left">
                                                                <div class="icon-box icon-box-header elementor-animation-">
                                                                    <div class="icon style-color"><i aria-hidden="true"
                                                                            class="jki jki-phone-call-line"></i></div>
                                                                </div>
                                                                <div class="icon-box icon-box-body">
                                                                    <h4 class="title">Teléfono Celular</h4>
                                                                    <p class="icon-box-description">{{$data['celularPrincipal']}}</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </section>
                                @endif
                                <div class="elementor-element elementor-element-286f7294 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                    data-id="286f7294" data-element_type="widget" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.16.0 - 17-10-2023 */
                                            .elementor-widget-divider {
                                                --divider-border-style: none;
                                                --divider-border-width: 1px;
                                                --divider-color: #0c0d0e;
                                                --divider-icon-size: 20px;
                                                --divider-element-spacing: 10px;
                                                --divider-pattern-height: 24px;
                                                --divider-pattern-size: 20px;
                                                --divider-pattern-url: none;
                                                --divider-pattern-repeat: repeat-x
                                            }

                                            .elementor-widget-divider .elementor-divider {
                                                display: flex
                                            }

                                            .elementor-widget-divider .elementor-divider__text {
                                                font-size: 15px;
                                                line-height: 1;
                                                max-width: 95%
                                            }

                                            .elementor-widget-divider .elementor-divider__element {
                                                margin: 0 var(--divider-element-spacing);
                                                flex-shrink: 0
                                            }

                                            .elementor-widget-divider .elementor-icon {
                                                font-size: var(--divider-icon-size)
                                            }

                                            .elementor-widget-divider .elementor-divider-separator {
                                                display: flex;
                                                margin: 0;
                                                direction: ltr
                                            }

                                            .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                            .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                align-items: center
                                            }

                                            .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                            .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                            .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                            .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                display: block;
                                                content: "";
                                                border-bottom: 0;
                                                flex-grow: 1;
                                                border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                            }

                                            .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                flex-grow: 0;
                                                flex-shrink: 100
                                            }

                                            .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                content: none
                                            }

                                            .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                margin-left: 0
                                            }

                                            .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                flex-grow: 0;
                                                flex-shrink: 100
                                            }

                                            .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                content: none
                                            }

                                            .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                margin-right: 0
                                            }

                                            .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                            }

                                            .elementor-widget-divider--separator-type-pattern {
                                                --divider-border-style: none
                                            }

                                            .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                            .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                            .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                            .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                                width: 100%;
                                                min-height: var(--divider-pattern-height);
                                                -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                mask-size: var(--divider-pattern-size) 100%;
                                                -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                mask-repeat: var(--divider-pattern-repeat);
                                                background-color: var(--divider-color);
                                                -webkit-mask-image: var(--divider-pattern-url);
                                                mask-image: var(--divider-pattern-url)
                                            }

                                            .elementor-widget-divider--no-spacing {
                                                --divider-pattern-size: auto
                                            }

                                            .elementor-widget-divider--bg-round {
                                                --divider-pattern-repeat: round
                                            }

                                            .rtl .elementor-widget-divider .elementor-divider__text {
                                                direction: rtl
                                            }

                                            .e-con-inner>.elementor-widget-divider,
                                            .e-con>.elementor-widget-divider {
                                                width: var(--container-widget-width, 100%);
                                                --flex-grow: var(--container-widget-flex-grow)
                                            }
                                        </style>
                                        <div class="elementor-divider">
                                            <span class="elementor-divider-separator">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-63bfa3f1 elementor-widget elementor-widget-heading"
                                    data-id="63bfa3f1" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h4 class="elementor-heading-title elementor-size-default">Consulta nuestras redes
                                        </h4>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-3755b59c elementor-shape-circle e-grid-align-left elementor-grid-mobile-0 e-grid-align-mobile-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                    data-id="3755b59c" data-element_type="widget"
                                    data-widget_type="social-icons.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.16.0 - 17-10-2023 */
                                            .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                            .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                            .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                                line-height: 1;
                                                font-size: 0
                                            }

                                            .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                                display: inline-grid
                                            }

                                            .elementor-widget-social-icons .elementor-grid {
                                                grid-column-gap: var(--grid-column-gap, 5px);
                                                grid-row-gap: var(--grid-row-gap, 5px);
                                                grid-template-columns: var(--grid-template-columns);
                                                justify-content: var(--justify-content, center);
                                                justify-items: var(--justify-content, center)
                                            }

                                            .elementor-icon.elementor-social-icon {
                                                font-size: var(--icon-size, 25px);
                                                line-height: var(--icon-size, 25px);
                                                width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                                height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
                                            }

                                            .elementor-social-icon {
                                                --e-social-icon-icon-color: #fff;
                                                display: inline-flex;
                                                background-color: #69727d;
                                                align-items: center;
                                                justify-content: center;
                                                text-align: center;
                                                cursor: pointer
                                            }

                                            .elementor-social-icon i {
                                                color: var(--e-social-icon-icon-color)
                                            }

                                            .elementor-social-icon svg {
                                                fill: var(--e-social-icon-icon-color)
                                            }

                                            .elementor-social-icon:last-child {
                                                margin: 0
                                            }

                                            .elementor-social-icon:hover {
                                                opacity: .9;
                                                color: #fff
                                            }

                                            .elementor-social-icon-android {
                                                background-color: #a4c639
                                            }

                                            .elementor-social-icon-apple {
                                                background-color: #999
                                            }

                                            .elementor-social-icon-behance {
                                                background-color: #1769ff
                                            }

                                            .elementor-social-icon-bitbucket {
                                                background-color: #205081
                                            }

                                            .elementor-social-icon-codepen {
                                                background-color: #000
                                            }

                                            .elementor-social-icon-delicious {
                                                background-color: #39f
                                            }

                                            .elementor-social-icon-deviantart {
                                                background-color: #05cc47
                                            }

                                            .elementor-social-icon-digg {
                                                background-color: #005be2
                                            }

                                            .elementor-social-icon-dribbble {
                                                background-color: #ea4c89
                                            }

                                            .elementor-social-icon-elementor {
                                                background-color: #d30c5c
                                            }

                                            .elementor-social-icon-envelope {
                                                background-color: #ea4335
                                            }

                                            .elementor-social-icon-facebook,
                                            .elementor-social-icon-facebook-f {
                                                background-color: #3b5998
                                            }

                                            .elementor-social-icon-flickr {
                                                background-color: #0063dc
                                            }

                                            .elementor-social-icon-foursquare {
                                                background-color: #2d5be3
                                            }

                                            .elementor-social-icon-free-code-camp,
                                            .elementor-social-icon-freecodecamp {
                                                background-color: #006400
                                            }

                                            .elementor-social-icon-github {
                                                background-color: #333
                                            }

                                            .elementor-social-icon-gitlab {
                                                background-color: #e24329
                                            }

                                            .elementor-social-icon-globe {
                                                background-color: #69727d
                                            }

                                            .elementor-social-icon-google-plus,
                                            .elementor-social-icon-google-plus-g {
                                                background-color: #dd4b39
                                            }

                                            .elementor-social-icon-houzz {
                                                background-color: #7ac142
                                            }

                                            .elementor-social-icon-instagram {
                                                background-color: #262626
                                            }

                                            .elementor-social-icon-jsfiddle {
                                                background-color: #487aa2
                                            }

                                            .elementor-social-icon-link {
                                                background-color: #818a91
                                            }

                                            .elementor-social-icon-linkedin,
                                            .elementor-social-icon-linkedin-in {
                                                background-color: #0077b5
                                            }

                                            .elementor-social-icon-medium {
                                                background-color: #00ab6b
                                            }

                                            .elementor-social-icon-meetup {
                                                background-color: #ec1c40
                                            }

                                            .elementor-social-icon-mixcloud {
                                                background-color: #273a4b
                                            }

                                            .elementor-social-icon-odnoklassniki {
                                                background-color: #f4731c
                                            }

                                            .elementor-social-icon-pinterest {
                                                background-color: #bd081c
                                            }

                                            .elementor-social-icon-product-hunt {
                                                background-color: #da552f
                                            }

                                            .elementor-social-icon-reddit {
                                                background-color: #ff4500
                                            }

                                            .elementor-social-icon-rss {
                                                background-color: #f26522
                                            }

                                            .elementor-social-icon-shopping-cart {
                                                background-color: #4caf50
                                            }

                                            .elementor-social-icon-skype {
                                                background-color: #00aff0
                                            }

                                            .elementor-social-icon-slideshare {
                                                background-color: #0077b5
                                            }

                                            .elementor-social-icon-snapchat {
                                                background-color: #fffc00
                                            }

                                            .elementor-social-icon-soundcloud {
                                                background-color: #f80
                                            }

                                            .elementor-social-icon-spotify {
                                                background-color: #2ebd59
                                            }

                                            .elementor-social-icon-stack-overflow {
                                                background-color: #fe7a15
                                            }

                                            .elementor-social-icon-steam {
                                                background-color: #00adee
                                            }

                                            .elementor-social-icon-stumbleupon {
                                                background-color: #eb4924
                                            }

                                            .elementor-social-icon-telegram {
                                                background-color: #2ca5e0
                                            }

                                            .elementor-social-icon-thumb-tack {
                                                background-color: #1aa1d8
                                            }

                                            .elementor-social-icon-tripadvisor {
                                                background-color: #589442
                                            }

                                            .elementor-social-icon-tumblr {
                                                background-color: #35465c
                                            }

                                            .elementor-social-icon-twitch {
                                                background-color: #6441a5
                                            }

                                            .elementor-social-icon-twitter {
                                                background-color: #1da1f2
                                            }

                                            .elementor-social-icon-viber {
                                                background-color: #665cac
                                            }

                                            .elementor-social-icon-vimeo {
                                                background-color: #1ab7ea
                                            }

                                            .elementor-social-icon-vk {
                                                background-color: #45668e
                                            }

                                            .elementor-social-icon-weibo {
                                                background-color: #dd2430
                                            }

                                            .elementor-social-icon-weixin {
                                                background-color: #31a918
                                            }

                                            .elementor-social-icon-whatsapp {
                                                background-color: #25d366
                                            }

                                            .elementor-social-icon-wordpress {
                                                background-color: #21759b
                                            }

                                            .elementor-social-icon-xing {
                                                background-color: #026466
                                            }

                                            .elementor-social-icon-yelp {
                                                background-color: #af0606
                                            }

                                            .elementor-social-icon-youtube {
                                                background-color: #cd201f
                                            }

                                            .elementor-social-icon-500px {
                                                background-color: #0099e5
                                            }

                                            .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                                border-radius: 10%
                                            }

                                            .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                                border-radius: 50%
                                            }
                                        </style>
                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                            @if ($data['facebook'])
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-animation-shrink elementor-repeater-item-c0163ab"
                                                href="{{$data['facebook']}}" target="_blank">
                                                    <span class="elementor-screen-only"></span>
                                                    <i class="fab fa-facebook-f"></i> </a>
                                            </span>
                                            @endif
                                            @if($data['twitter'])
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-shrink elementor-repeater-item-310ab07"
                                                    href="{{$data['twitter']}}" target="_blank">
                                                    <span class="elementor-screen-only"></span>
                                                    <i class="fab fa-twitter"></i> </a>
                                            </span>
                                            @endif
                                            @if($data['instagram'])
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-shrink elementor-repeater-item-63f86db"
                                                    href="{{$data['instagram']}}" target="_blank">
                                                    <span class="elementor-screen-only"></span>
                                                    <i class="fab fa-instagram"></i> </a>
                                            </span>
                                            @endif
                                            @if($data['linkedin'])
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-animation-shrink elementor-repeater-item-3dbfd36"
                                                   href="{{$data['linkedin']}}" target="_blank">
                                                    <span class="elementor-screen-only"></span>
                                                    <i class="fab fa-linkedin-in"></i> </a>
                                            </span>
                                            @endif
                                            @if ($data['youtube'])
                                            <span class="elementor-grid-item">
                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-shrink elementor-repeater-item-40041f1"
                                                    href="{{$data['youtube']}}" target="_blank">
                                                    <span class="elementor-screen-only"></span>
                                                    <i class="fab fa-youtube"></i> </a>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
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
        <link rel="stylesheet" id="elementor-post-199-css"
            href="assets/wp-content/uploads/elementor/css/post-199.css?ver=1697736605" media="all">
        <link rel="stylesheet" id="metform-ui-css"
            href="assets/wp-content/plugins/metform/public/assets/css/metform-ui.css?ver=3.6.0" media="all">
        <link rel="stylesheet" id="metform-style-css"
            href="assets/wp-content/plugins/metform/public/assets/css/style.css?ver=3.6.0" media="all">
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
                    "id": 134,
                    "title": "Contact%20Us%20%E2%80%93%20Titulo%20temporal",
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
        <script src="assets/wp-content/plugins/metform/public/assets/js/htm.js?ver=3.6.0" id="htm-js"></script>
        <script src="assets/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
        <script src="assets/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11" id="regenerator-runtime-js">
        </script>
        <script src="assets/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
        <script src="assets/wp-includes/js/dist/vendor/react.min.js?ver=18.2.0" id="react-js"></script>
        <script src="assets/wp-includes/js/dist/vendor/react-dom.min.js?ver=18.2.0" id="react-dom-js"></script>
        <script src="assets/wp-includes/js/dist/escape-html.min.js?ver=03e27a7b6ae14f7afaa6" id="wp-escape-html-js"></script>
        <script src="assets/wp-includes/js/dist/element.min.js?ver=ed1c7604880e8b574b40" id="wp-element-js"></script>
        <script id="metform-app-js-extra">
            var mf = {
                "postType": "page",
                "restURI": ".\/\/wp-json\/metform\/v1\/forms\/views\/"
            };
        </script>
        <script src="assets/wp-content/plugins/metform/public/assets/js/app.js?ver=3.6.0" id="metform-app-js"></script>
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
