



<link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/css/signin.css')?>" rel="stylesheet">
<link href="<?=base_url('assets/css/cadastro.css')?>" rel="stylesheet">
<title>Cadastro de novo usuário - EuVoluntário</title>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?xml version="1.0" encoding="ISO-8859-1" ?>


<html lang="pt-br">
	<head>
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title" charset="utf-8">
	<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

	<link href="<?=base_url('assets/css/carousel.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />

	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


	<script src="<?=base_url('jquery/jquery-1.10.2.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/bootstrap.js')?>" type="text/javascript"></script>

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
<a class="navbar-brand" href="/your.groupid/;jsessionid=B3492B48A59F9AF78373ADB67BDBC592">Eu Voluntário</a>


			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a data-toggle="modal" href="<?=site_url('home')?>" >
              <i class="fa fa-home" aria-hidden="true"></i>	 Home</a></li>


			</ul>

				<ul class="nav navbar-nav navbar-right">


					<li><a data-toggle="modal" href="<?=site_url('login')?>" onclick="openLoginModal();">
							<i class="fa fa-user" aria-hidden="true"></i>	 Login</a></li>


					<li><a data-toggle="modal" href="<?=base_url('cadastro')?>">
					<i class="fa fa-plus" aria-hidden="true"></i> Cadastrar</a></li>




				</ul>
			</div>
		</div>
	</nav>


	<div class="content container-fluid  card col-sm-8 col-sm-offset-2">
		<div class="row content">
			<div>
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Cadastro de novo usuário</h2>
					<p>Escolha como você deseja se cadastrar:</p>
					  <?php echo validation_errors(); ?>
					<?php if ($this->input->get('aviso') == 1) { ?>
                                <div class="alert alert-success">
                                     Cadastrado realizado com sucesso! Por favor faça login para usar o sistema!
                                </div>
                            <?php } ?>
														<?php if ($this->input->get('aviso') == 2) { ?>
									                                <div class="alert alert-danger">
									                                  E-mail já cadastrado! Tente inserir outro e-mail, ou se lembrar se já não se cadastrou no sistema!
									                                </div>
									                            <?php } ?>
					<ul class="nav nav-tabs">
						<li><a data-toggle="tab" href="#entidade">Voluntário</a></li>
						<li class="active"><a data-toggle="tab" href="#ong">ONG</a></li>
					</ul>

					<div class="tab-content">
						<div id="ong" class="tab-pane fade in active">
							</br>
							<form action="<?=base_url('salvar_entidade')?>" method="post">
								<div class="form-group">
									<label for="nomeEntidade">Nome da sua organização(ONG):</label>
									<input type="text"
										id="nomeEntidade" name="entidade_nome"
										value="" class="form-control" required />
								</div>
								<div class="form-group">
									<label for="telefoneEntidade">Telefone para contato:</label>
									<input type="tel"
										id="telefoneEntidade" name="entidade_telefone"
										value="" class="form-control" required  />
								</div>
								<div class="form-group">
									<label for="emailEntidade">E-mail:</label>
									<input type="email"
										name="entidade_email" id="emailEntidade"
										value="" class="form-control" required  />
								</div>

								<div class="form-group">
									<label for="senhaEntidade">Senha:</label>
									<input type="password"
										id="senhaEntidade" name="entidade_senha"
										value="" class="form-control" required  />
								</div>
								<div class="form-group">
									<label for="areaAtuacao">Area de atuação da organização:</label>
									<input type="text"
										id="areaAtuacao" name="entidade_area_atuacao"
										value=""	class="form-control" required  />
								</div>
								<h3>Endereço da organização:</h3>
								<div class="form-group">
									<label for="ruaEntidade">Rua:</label>
									<input type="text"
										id="ruaEntidade" name="entidade_rua"
										value="" class="form-control" required  />
								</div>
								<div class="form-group">
									<label for="bairroEntidade">Bairro:</label>
									<input type="text"
										id="bairroEntidade" name="entidade_bairro"
										value="" class="form-control" required  />
								</div>
								<div class="form-group">
									<label for="numeroEntidade">Número:</label>
									<input type="text"
										id="numeroEntidade" name="entidade_numero"
										value="" class="form-control" required  />
								</div>
								<div class="form-group">
									<label for="cidadeEntidade">Cidade:</label>
									<input type="text"
										id="cidadeEntidade" name="entidade_cidade"
										value="" class="form-control" required  />
								</div>
								<div class="form-group">
									<label for="ufEntidade">UF:</label>
									<input type="text"
										id="ufEntidade" name="entidade_uf"
										value="" class="form-control" required  />
								</div>
								<div class="form-group">
									<label for="cepEntidade">Cep:</label>
									<input type="text"
										id="cepEntidade" name="entidade_cep"
										value="" class="form-control" required  />
								</div>

								 <div class="form-group">
									 <label for="cepEntidade">Foto</label>
									 <input type="file" name="foto">
								 </div>
								<button type="submit" class="btn btn-primary">CADASTRAR <span class="glyphicon glyphicon-ok"></span></button>
								<br> <br>
							</form>
						</div>
						<div id="entidade" class="tab-pane fade">
							</br>
							<form action="<?=base_url('salvar_voluntario')?>" method="post">
								<div class="form-group">
									<label for="nomeVoluntario">Nome completo:</label>
									<input type="text"
										id="nomeVoluntario" name="voluntario_nome"
										value="" class="form-control" required  />
								</div>
								<div class="form-group">
									<label for="celularVoluntario">Celular para contato:</label>
									<input type="tel"
										id="celularVoluntario" name="voluntario_telefone"
										value="" class="form-control" required  />
								</div>

								<div class="form-group">
									<label for="emailVoluntario">Email:</label>
									<input type="email"
										id="emailVoluntario" name="voluntario_email"
										value="" class="form-control" required  />
								</div>

								<div class="form-group">
									<label for="senhaVoluntario">Senha:</label>
									<input type="password"
										id="senhaVoluntario" name="voluntario_senha"
										value="" class="form-control" required  />
								</div>
								<button type="submit" class="btn btn-primary">CADASTRAR <span class="glyphicon glyphicon-ok"></span></button>
								<br> <br>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<footer class="footer col-sm-8 col-sm-offset-2">
		<div class="container-fluid">




	<p class="pull-right">
		<a href="#">Voltar para o topo.</a>
	</p>

	<p>Eu Voluntário - 2016</p>

</footer>
</div>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
		window.jQuery
				|| document
						.write(
								'<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
	</script>


	<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('../../assets/js/vendor/holder.min.js')?>"></script>


</body>
</html>
