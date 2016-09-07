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
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
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
									<a href="<?=site_url('Painel_voluntario')?>"><i class="fa fa-home"></i>Home</a>
								</li>
								<li>
									<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user"></i> Meu Perfil</a>
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

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li>
							<a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span> Home</span></a>
						</li>
						<li class="active">
							<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user" aria-hidden="true"></i><span> Meu Perfil</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_voluntario/carregaFormularioBusca')?>"><i class="fa fa-search" aria-hidden="true"></i><span> Procurar Vaga</span></a>
						</li>

					</ul>

				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<h1 class="page-header">Meu Perfil</h1>
					<div class="row">
						<div class="col-sm-12  col-xs-12 ">

							<div class="sales">
								<!-- -->

								<form action="<?=site_url('Painel_voluntario/atualizar')?>" method="post">
									<div class="row">

										<div class="col-sm-12">
											<div class="form-group col-sm-6">
												<label for="exampleInputEmail1">Nome</label>
												<input
												type="text" class="form-control" name="nome"
												placeholder="Nome" value="<?php echo $dadosVoluntario->nome ?>"  />
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Telefone</label>
													<input type="tel" class="form-control"
													name="telefone" placeholder="telefone"
													value="<?php echo $dadosVoluntario->telefone ?>" required/>
												</div>
											</div>
											<input type="hidden" name="email" value="<?php echo $dadosVoluntario->email ?>">
										</div>

										<div class="col-sm-12">
											<div class="form-group col-sm-6">
												<label for="exampleInputEmail1">Email</label>
												<input
												type="email" class="form-control" name=""
												placeholder="Email" value="<?php echo $dadosVoluntario->email ?>" disabled  />
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Senha</label>
													<input type="password" class="form-control"
													name="senha_voluntario" placeholder="senha"
													value="" />
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
