<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EuVoluntário - Voluntário</title>
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/metisMenu.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/morris.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/sb-admin-2.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/dataTables.bootstrap.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/dataTables.responsive.css')?>"  >
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/npm.js')?>"></script>

	<script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/holder.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/demo.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/jquery.dataTables.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/dataTables.bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/dataTables.responsive.js')?>"></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<script type="text/javascript" src="<?=base_url('assets/js/sb-admin-2.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/metisMenu.js')?>"></script>


</head>

<body>



	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=site_url('Painel_voluntario/index')?>">Eu Voluntário</a>
		</div>
		<!-- /.navbar-header -->

		<ul class="nav navbar-top-links navbar-right">



			<!-- /.dropdown -->
			<li class="dropdown">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span> <?php echo $dadosVoluntario->nome ?></span> <span class="caret"></span> </a>

				<ul class="dropdown-menu" role="menu">



					<li>
						<a href="<?=site_url('Painel_voluntario/deslogar')?>"><i class="fa fa-sign-out"></i>Sair</a>
					</li>
				</ul>
			</li>
			<!-- /.dropdown -->
		</ul>
		<!-- /.navbar-top-links -->

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li class="sidebar-search">
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Procurar Vagas...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
						<li class="">
							<a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class=""> Home</span></a>
						</li>
						<li class="">
							<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user" aria-hidden="true"></i><span class=""> Meu Perfil</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_voluntario/carregaFormularioBusca')?>"><i class="fa fa-search" aria-hidden="true"></i><span class=""> Procurar Vaga</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_voluntario/carregaVagaPorArea')?>"><i class="fa fa-search-plus" aria-hidden="true"></i><span class=""> Vaga Por Área</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_voluntario/carregaHistoricoDeVagas')?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span class=""> Historico de Vagas</span></a>
						</li>


					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>
