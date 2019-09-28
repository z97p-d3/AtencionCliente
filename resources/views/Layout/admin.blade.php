<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos.css')}}">

	<!---->
	<title>Atencion al cliente</title>
</head>
	
		<header>





<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Go Trade</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Reporte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="false">Graficas</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
				</header>
<body class="container">


		<div class="container">

	
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

	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/archivos modificados/highcharts.js')}}"></script>
</body>
</html>
