<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Perfil - Entidade</title>
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

							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span> <?php echo $dadosEntidade->nome ?></span> <span class="caret"></span> </a>

							<ul class="dropdown-menu" role="menu">

								<li>
									<a href=""><i class=""></i>Minhas Vagas</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?=site_url('Painel_entidade/carregarPerfil')?>"><i class=""></i>Meu Perfil</a>
								</li>
								<li class="divider"></li>

								<li>
									<a href="<?=site_url('Painel_entidade/deslogar')?>"><i class=""></i>Sair</a>
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
						<li class="">
							<a href="<?=site_url('Painel_entidade/index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a>
						</li>
						<li class="active">
							<a href="<?=site_url('Painel_entidade/carregarPerfil')?>"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Meu Perfil</span></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Minhas Vagas</span></a>
						</li>
						<li class="">
							<a href="<?=site_url('Painel_entidade/carregarCadastroVaga')?>"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cadastrar Nova Vaga</span></a>
						</li>
					</ul>

				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<h1 class="page-header">Meu Perfil</h1>
					<div class="row">
						<div class="col-md-12 col-sm-5 col-xs-12 ">

							<div class="sales">
								<!-- -->

								<form action="<?=site_url('Painel_entidade/atualizar') ?>" method="post">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Entidade</label>

												<input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $dadosEntidade->nome ?>" />

											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Email</label>
												<input
												type="email" class="form-control" name=""
												placeholder="Email" value="<?php echo $dadosEntidade->email ?>" disabled  />
											</div>
											<input type="hidden" name="email" value="<?php echo $dadosEntidade->email ?>">
										</div>

									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Senha</label>
												<input type="password" class="form-control"
												name="senha" placeholder="senha"
												value="<?php echo $dadosEntidade->senha ?>" required/>
											</div>
										</div>
										<div class="form-group col-md-6">
											<label>telefone</label>
											<input type="text"
											class="form-control" name="telefone"
											placeholder="Telefone"
											value="<?php echo $dadosEntidade->telefone ?>" required>
										</div>

									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Rua</label>
												<input type="text" class="form-control"
												name="rua" placeholder="Rua"
												value="<?php echo $dadosEntidade->rua ?>" required>
											</div>
										</div>
										<div class="form-group col-md-4">
											<label>Bairro</label>
											<input type="text"
											class="form-control" name="bairro"
											placeholder="Bairro"
											value="<?php echo $dadosEntidade->bairro ?>" required>
										</div>
										<div class="form-group col-md-2">
											<label>Nº</label>
											<input type="text" class="form-control"
											name="numero" placeholder="Nº"
											value="<?php echo $dadosEntidade->numero ?>" required>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Cidade</label>
												<input type="text"
												class="form-control" name="cidade"
												placeholder="Cidade"
												value="<?php echo $dadosEntidade->cidade ?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>UF</label>
												<input type="text" class="form-control"
												name="uf" placeholder="Unidade Federativa"
												value="<?php echo $dadosEntidade->uf ?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>CEP</label>
												<input type="text" class="form-control"
												name="cep" placeholder="CEP"
												value="<?php echo $dadosEntidade->cep ?>" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-8">
											<div class="form-group">
												<label>Area de atuação</label>
												<input type="text"
												name="area_atuacao"
												value="<?php echo $dadosEntidade->area_atuacao ?>"
												class="form-control"
												placeholder="Área de atuação" required>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<br>
												<button type="submit" class="btn btn-primary pull-right">
													SALVAR
													ALTERAÇÕES
												</button>
											</div>

										</div>
									</div>

								</form>
							</div>

						</div>

					</div>

				</div>
			</div>
		</div>

	</body>
</html>
