<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Perfil - Voluntário</title>
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
					<a class="navbar-brand" href="#">Project name</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span> <?php echo $dadosVoluntario->nome ?></span> <span class="caret"></span> </a>

							<ul class="dropdown-menu" role="menu">

								<li>
									<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class=""></i> Meu Perfil</a>
								</li>
								<li class="divider"></li>

								<li>
									<a href="<?=site_url('Painel_voluntario/deslogar')?>"><i class=""></i>Sair</a>
								</li>
							</ul>
						</li>

					</ul>
					<form class="navbar-form navbar-right">
						<input type="text" class="form-control" placeholder="Search...">
					</form>
				</div>
			</div>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li>
							<a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a>
						</li>
						<li class="active">
							<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Meu Perfil</span></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Procurar Vaga</span></a>
						</li>

					</ul>

				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<h1 class="page-header">Meu Perfil</h1>
					<div class="row">
						<div class="col-md-12 col-sm-5 col-xs-12 ">

							<div class="sales">
								<!-- -->

								<form action="<?=site_url('Painel_voluntario/atualizar')?>" method="post">
									<div class="row">

										<div class="col-md-12">
											<div class="form-group col-md-6">
												<label for="exampleInputEmail1">Nome</label>
												<input
												type="text" class="form-control" name="nome"
												placeholder="Nome" value="<?php echo $dadosVoluntario->nome ?>"  />
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Telefone</label>
													<input type="tel" class="form-control"
													name="telefone" placeholder="telefone"
													value="<?php echo $dadosVoluntario->telefone ?>" required/>
												</div>
											</div>
											<input type="hidden" name="email" value="<?php echo $dadosVoluntario->email ?>">
										</div>

										<div class="col-md-12">
											<div class="form-group col-md-6">
												<label for="exampleInputEmail1">Email</label>
												<input
												type="email" class="form-control" name=""
												placeholder="Email" value="<?php echo $dadosVoluntario->email ?>" disabled  />
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Senha</label>
													<input type="password" class="form-control"
													name="senha" placeholder="senha"
													value="<?php echo $dadosVoluntario->senha ?>" required/>
												</div>
											</div>

										</div>

									</div>

									<button type="submit" class="btn btn-primary pull-right">
										SALVAR
										ALTERAÇÕES
									</button>

								</form>
							</div>

						</div>

					</div>

				</div>
			</div>
		</div>

	</body>
</html>
