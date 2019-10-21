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

            @include('admin.layouts.partials.topbar')

            @include('admin.layouts.partials.sidebar')