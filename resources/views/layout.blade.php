<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Ingresar al sistema</title>
		<!-- CSS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/components.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/colors.min.css') }}" rel="stylesheet" type="text/css">
		<!-- /CSS -->
	</head>
	<body><!--class="bg-slate-800">-->

        @yield('content')
		
		<!-- core JS -->
		<script src="{{ asset('js/main/jquery.min.js') }}"></script>
		<script src="{{ asset('js/main/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
		<!-- /core JS -->
		<!-- Theme JS -->
		<script src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
		<script src="{{ asset('js/plugins/forms/validation/validate.min.js') }}"></script>
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/login_validation.js') }}"></script>
		<!-- /theme JS -->
	</body>
</html>