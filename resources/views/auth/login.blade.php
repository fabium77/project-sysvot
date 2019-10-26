<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Escrutinio::Ingresar al sistema</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Sistema para generar un propio escrutinio provisorio durante un acto eleccionario" name="description" />
        <meta content="Old Valley Soft" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- App favicon --}}
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        {{-- App css --}}
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span>
                                            <img src="{{ asset('images/logo-dark.png') }}" alt="" height="60">
                                        </span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Ingrese su correo electrónico y su contraseña para acceder.</p>
                                </div>

                                <form action="{{ route('login') }}" method="POST" >
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="email">Correo electrónico</label>
                                        <input class="form-control" type="email" id="email" placeholder="Ingrese su correo electrónico" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" required  autofocus>
                                        
                                        @error('email')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Contraseña</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Ingrese su contraseña" @error('password') is-invalid @enderror" name="password" autocomplete="current-password" required>

                                        @error('password')
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">Recordarme</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> 
                                            {{ __('Ingresar') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                            {{-- end card-body --}}
                            
                            <div class="row mt-1">
                                <div class="col-12 text-center">
                                    <p> 
                                        <a href="pages-recoverpw.html" class="text-primary font-weight-medium ml-1">
                                            Olvidó su contraseña?
                                        </a>
                                    </p>
                                    <p class="text-muted">
                                        No tienes cuenta? 
                                        <a href="{{ route('register') }}" class="text-primary font-weight-medium ml-1">
                                            Registrar
                                        </a>
                                    </p>
                                </div> 
                                {{-- end col --}}
                            </div>
                            {{-- end row --}}
                        </div>
                        {{-- end card --}}


                    </div> 
                    {{-- end col --}}
                </div>
                {{-- end row --}}
            </div>
            {{-- end container --}}
        </div>
        {{-- end page --}}

        <footer class="footer footer-alt">
            2019 &copy; Escrutinio por <a href="#">Old Valle Soft</a> 
        </footer>

        {{-- Vendor js --}}
        <script src="assets/js/vendor.min.js"></script>

        {{-- App js --}}
        <script src="assets/js/app.min.js"></script>
    </body>
</html>

