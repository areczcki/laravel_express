<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>@yield('title')</title>

<!-- Bootstrap core CSS -->
<link href="{{ asset("
	assets/bootstrap/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset("
	assets/bootstrap/css/blog-home.css") }}" rel="stylesheet">

</head>

<body>

	<!-- Topo -->
	@extends('layout.topo')

	<div class="container">
		<div class="row">

			<!-- Blog Entries Column -->
			<div class="col-md-8">
				<!-- Conteúdo -->
				@yield('body')
			</div>
			
			<div class="col-md-4">
				@yield('menu')
			</div>
			
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

	<!-- Footer -->
	@extends('layout.rodape')

</body>

</html>