<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!---->
	<title>Atencion al cliente</title>
</head>

<body class="">
	<header>
		<nav class="navbar navbar-light nave fixed-top"> <img class="logo-img" src="" alt="logo">
		
		</nav>
	</header>
	<div class="contenedor container-fluid">
		<div class="container">

		<h1>Ticket de atencion al Cliente</h1></div>
		<hr>



		<div class="container">
			<div class="row">
				<div class="col align-self-start align-center">

				</div>
				<div class="col align-self-center">
					@yield('contenido')
				</div>
				<div class="col align-self-end">

				</div>
			</div>
		</div>


	</div>
</body>
</html>
