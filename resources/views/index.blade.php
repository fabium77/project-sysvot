@extends('../layout')

@section('content')

<div class="content">

        		<!-- Page content -->
		<div class="page-content">

                <!-- Main content -->
                <div class="content-wrapper">
                    <!-- Content area -->
                    <div class="content d-flex justify-content-center align-items-center">
                        <!-- Login card -->
                        <form method="POST" action="{{ route('login') }}"  class="login-form form-validate" >
                                        @csrf
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <i class="icon-users icon-2x border-2 rounded-round p-3 mb-3 mt-1 text-orange-600"></i>
                                        <h5 class="mb-0">Ingresar al Sistema</h5>
                                        <span class="d-block text-muted">Ingresa tus credenciales</span>
                                    </div>
        
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                    

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        
                                        <div class="form-control-feedback">
                                                <i class="icon-user text-muted"></i>
                                        </div>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
        
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <div class="form-control-feedback">
                                            <i class="icon-lock2 text-muted"></i>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">


                                    <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Login') }}
                                        </button>
        
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}"  class="btn btn-primary btn-block">Registrarse</a>
                                     @endif
    
                                
                                    <a href="escritorio.php"  class="btn btn-info btn-block">Ver Estaditicas<i class="icon-circle-right2 ml-2"></i></a>
                                    
                                <!--	
                                    <div class="form-group text-center text-muted content-divider">
                                        <span class="px-2">Acerca de Escrutinio</span>
                                    </div>
                                    <span class="form-text text-center text-muted">Escrutinio es desarrollado y mantenido por <a href="#">Old Valley Soft</a> - ©2019</span>
    
                                    <div class="form-group content-divider">
                                        <img src="images/munilogo2.png" alt="Logo Valle Viejo Municipio" width="75%">
                                    </div>
                                -->
                                </div>
                            </div>
                        </form>
                        <!-- /login card -->
                    </div>
                    
                    <!-- /content area -->
                </div>
                <!-- /main content -->
            </div>
            <!-- /page content -->

@endsection
