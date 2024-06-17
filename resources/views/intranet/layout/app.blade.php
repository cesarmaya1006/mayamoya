<!DOCTYPE html>
<html lang="es">

<head>
    @include('intranet.layout.head')
    @yield('css_pagina')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('imagenes/sistema/logo_maya.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>
        @include('intranet.layout.header')
        @include('intranet.layout.aside')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3 class="m-0">
                                @yield('titulo_pagina')
                            </h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-outline card-info sombra">
                                <div class="card-header">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-4 mb-md-0">
                                                <h4 class="card-title">
                                                    <strong>@yield('titulo_card')</strong>
                                                </h4>
                                            </div>
                                            <div class="col-12 col-md-6 mb-4 mb-md-0 d-flex flex-col flex-md-row justify-content-md-end">
                                                @yield('botones_card')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-12">
                                            @include('includes.mensaje')
                                            @include('includes.error-form')
                                        </div>
                                        <div class="col-12">
                                            @yield('cuerpo')
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    @yield('footer_card')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('intranet.layout.footer')
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
    <!-- Modales  -->
    @yield('modales')
    <!-- Fin Modales  -->
    @include('intranet.layout.scripts')
</body>

</html>
