<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Escrutinio::Carga realizada</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- App favicon --}}
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        {{-- App css --}}
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

    <body>

        <div class="mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="text-center">

                            <img src="{{ asset('images/animat-rocket-color.gif') }}" alt="" height="160">

                            <h3 class="mt-4">La datos fueron registrados con éxito</h3>
                            <p class="text-muted">Ahora estan viajando a la nube no es sorprendente!!</p>
                            <a href="{{ route('escrutinio.index') }}">Cargar otra mesa</a>

                            <div class="row mt-5 justify-content-center">
                                <div class="col-md-8">
                                    <div data-countdown="2019/12/10" class="counter-number"></div>
                                </div> 
                                {{-- end col --}}
                            </div> 
                            {{-- end row --}}
                        </div> 
                        {{-- end /.text-center --}}

                    </div> 
                    {{-- end col --}}
                </div>
                {{-- end row --}}
            </div>
            {{-- end container --}}
        </div>
        {{-- end page --}}


        <footer class="footer footer-alt">
            2019 &copy; Escrutinio por <a href="#" class="text-muted">Gabriel Villalon</a> 
        </footer>

        {{-- Vendor js --}}
        <script src="{{ asset('js/vendor.min.js') }}"></script>

        {{-- Plugins js --}}
        <script src="{{ asset('libs/jquery-countdown/jquery.countdown.min.js') }}"></script>

        {{-- Countdown js --}}
        <script src="{{ asset('js/pages/coming-soon.init.js') }}"></script>

        {{-- App js --}}
        <script src="{{ asset('js/app.min.js') }}"></script>
        
    </body>
</html>