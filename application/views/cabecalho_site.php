<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?xml version="1.0" encoding="ISO-8859-1" ?>

<html lang="pt-br">
<head>
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title" charset="utf-8">
	<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/ie10-viewport-bug-workaround.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/carousel.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
	<link href="<?=base_url('assets/css/login-register.css')?>" rel="stylesheet" />

	<title>EuVoluntário</title>

	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="<?=base_url('assets/js/ie-emulation-modes-warning.js')?>"></script>
	<script src="<?=base_url('jquery/jquery-1.10.2.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/bootstrap.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/login-register.js')?>" type="text/javascript"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
	<div class="content"></div>

	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=site_url('home')?>">Eu Voluntário</a>

			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a data-toggle="modal" href="<?=site_url('home')?>" > <i class="fa fa-home" aria-hidden="true"></i> Home</a>
					</li>

				</ul>

				<ul class="nav navbar-nav navbar-right">

					<li>
						<a data-toggle="modal" href="<?=site_url('login')?>" onclick="openLoginModal();"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
					</li>

					<li>
						<a data-toggle="modal" href="<?=site_url('cadastro')?>"> <i class="fa fa-plus" aria-hidden="true"></i> Cadastrar</a>
					</li>

				</ul>
			</div>
		</div>
	</nav>
