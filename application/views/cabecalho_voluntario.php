<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EuVoluntário - Voluntário</title>
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/main.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/dashboard.css')?>"  >
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/npm.js')?>"></script>
	<link href="<?=base_url('assets/css/main.css')?>" rel="stylesheet" />

	<script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/holder.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/demo.js')?>"></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<script type="text/javascript" src="<?=base_url('assets/js/paginacao.js')?>"></script>
</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Eu Voluntário</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span> <?php echo $dadosVoluntario->nome ?></span> <span class="caret"></span> </a>

						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="<?=site_url('Painel_voluntario')?>"><i class="fa fa-home"></i>  Home</a>
							</li>
							<li>
								<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user"></i>  Meu Perfil</a>
							</li>
							<li class="divider"></li>

							<li>
								<a href="<?=site_url('Painel_voluntario/deslogar')?>"><i class="fa fa-sign-out"></i>Sair</a>
							</li>
						</ul>
					</li>

				</ul>
				<form class="navbar-form navbar-right" action="<?=site_url('Painel_voluntario/getVagas')?>" method="post">
					<input type="text" class="form-control" placeholder="Procurar Vaga..." name="input_busca">
				</form>
			</div>
		</div>
	</nav>
