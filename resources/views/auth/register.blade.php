<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Escrutinio::Registrar Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                    <a href="{{ route('login') }}">
                                        <span><img src="{{ asset('images/logo-dark.png') }}" alt="" height="60"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">
                                        ¿No tienes una cuenta? Crea tu propia cuenta, lleva menos de un minuto
                                    </p>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">
                                            {{ __('Nombre') }}
                                        </label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Ingrese nombre de usuario" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            {{ __('E-Mail') }}
                                        </label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Ingrese correo electrónico" required autocomplete="email">
                                        @error('Correo electrónico')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">
                                            {{ __('Contraseña') }}
                                        </label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Ingrese contraseña" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">
                                            {{ __('Confirmar Contraseña') }}
                                        </label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Reingrese contraseña" required autocomplete="new-password">
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> 
                                            Registrar 
                                        </button>
                                    </div>
                                </form>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <p class="text-muted">
                                            ¿Ya tienes cuenta?
                                            <a href="{{ route('login') }}" class="font-weight-medium ml-1">
                                                Inicia sesión
                                            </a>
                                        </p>
                                    </div>
                                    {{-- end col --}}
                                </div>
                                {{-- end row --}}
                            </div>
                            {{-- end card-body --}}
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
            2019 &copy; Escrutinio por <a href="#" class="text-muted">Gabriel Villalon</a> 
        </footer>

        {{-- Vendor js --}}
        <script src="{{ asset('js/vendor.min.js') }}"></script>

        {{-- App js --}}
        <script src="{{ asset('js/app.min.js') }}"></script>
    </body>
</html>
