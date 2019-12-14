<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Escrutinio::Panel de administración</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Sistema para generar un propio escrutinio provisorio durante un acto eleccionario" name="description" />
        <meta content="Old Valley Soft" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- App favicon --}}
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        {{-- App css --}}
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
     </head>
    <body class="left-side-menu-dark topbar-light">
        {{-- Pre-loader --}}
        <div id="preloader">
            <div id="status">
                <div class="bouncingLoader"><div ></div><div ></div><div ></div></div>
            </div>
        </div>
        {{-- End Preloader --}}

        {{-- Begin page --}}
        <div id="wrapper">

                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h4 class="modal-title" style="margin-right: auto;"  id="myModalLabel">Editar votos en mesas</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           
                                            </div>
                                            <div class="modal-body">
                                            <p>
                                                Ingrese el numero de mesa:
                                            </p>

                                            


                                            <div class="input-group mb-3">
                                                    <input type="text" class="form-control"  placeholder="Mesa N°" name="nummesa" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-outline-secondary" type="button" onclick="alerta()" id="mesa">Verificar</button>
                                                    </div>
                                                  </div>
                                            </div>

                                            <div class="modal-footer">
                                            {{-- <button type="submit" class="btn btn-info">Editar Mesa</button> --}}
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                            
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    {{-- <script>
                                    function alerta(){
                                        var mensaje;
                                        var opcion = confirm("Clicka en Aceptar o Cancelar");
                                        if (opcion == true) {
                                            mensaje = "Has clickado OK";
                                        } else {
                                            mensaje = "Has clickado Cancelar";
                                        }
                                        document.getElementById("ejemplo").innerHTML = mensaje;}
                                       
                                    </script> --}}

                                    <script>
                                        console.log("PRUEBA")
                                    $("#mesa").on("click", function(){
                                        console.log("OTRO")
                                    
                                    }); 
                                    </script>
                                    
                                   

                                    <script>
                                            function alerta(){
                                               
                                                var mesas = document.getElementsByName("nummesa")[0].value;;
                                                
                                                $.get('/getMesa/' + mesas,
                                                
                                                    function(mesa, status) {
                                                        console.log(mesa);
                                                        
                                                        if (mesa.cargado=="1")
                                                        {
                                                           
                                                            location.href = "http://project-sysvot.com/escrutinio/"+mesa.idMesas+"/edit" ;

                                                        }else{
                                                            alert('La mesa aun no fue cargada');
                                                        }
                                                    });
                                                };
                                                
                                    </script>
                                   

                                        {{-- Luciano --}}
                                        {{-- <script>
                                                $("#mesa").change(function() {
                                                    var mesa = $("input:text[name=mesa]").val();
                                                    $.get('/getMesa/' + mesa,
                                                    function(mesa, status) {
                                                        if (mesa.cargado=="1")
                                                        {
                                                            alert('La mesa ya fue cargada');
                                                            $("input:text[name=mesa]").val("");
                                                            $("input:text[name=mesa]").focus();
                                                        }
                                                    });
                                                })
                                            </script> --}}



                                    


            @include('admin.layouts.partials.topbar')

            @include('admin.layouts.partials.sidebar')