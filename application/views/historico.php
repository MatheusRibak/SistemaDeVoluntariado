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
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
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
						<a href="<?=site_url('Painel_entidade/index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class=""> Home</span></a>
					</li>
					<li class="active">
						<a href="<?=site_url('Painel_entidade/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i><span class=""> Meu Perfil</span></a>
					</li>
					<li>
						<a href="<?=site_url('Vaga/carregaMinhasVagas')?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span class=""> Minhas Vagas</span></a>
					</li>
					<li class="">
						<a href="<?=site_url('Painel_entidade/carregarCadastroVaga')?>"><i class="fa fa-plus"  aria-hidden="true"></i><span class=""> Cadastrar Nova Vaga</span></a>
					</li>
				</ul>

			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<div class="col-sm-12">
					<?php if ($this->input->get('aviso') == 1) { ?>
						<div class="alert alert-success">
							Dados atualizados com sucesso!!!
						</div>
						<?php } ?>

					</div>
					<h1 class="page-header">Historico</h1>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 ">

							<div class="sales">
								<!-- -->

								<form action="<?=site_url('Historico/salvarHistorico') ?>" method="post">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">

												<div class="col-md-2">
													<br>

													<label for="">Preencha o historico do voluntario</label>
												</div>

												<div class="col-md-10">
													<textarea name="historico" rows="5" cols="40" class="form-control"></textarea>
												</div>



												<input type="hidden" name="id_voluntario" value="	<?php echo $dadosVoluntario->id_voluntario ?>">

												<?php foreach ($dadosVaga as $key): ?>
													<input type="hidden" name="id_vaga" value="<?php echo $key->id_vaga ?>">
												<?php endforeach; ?>


											</div>
										</div>


									</div>





									<div class="row">

										<div class="col-sm-offset-2 col-sm-10">
											<div class="form-group">
												<br>
												<button type="submit" class="btn btn-primary">
													CADASTRAR HISTORICO
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
