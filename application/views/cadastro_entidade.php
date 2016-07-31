



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
	<link href="<?=base_url('assets/css/ie10-viewport-bug-workaround.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/carousel.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
	<link href="<?=base_url('assets/css/login-register.css')?>" rel="stylesheet" />

	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="<?=base_url('assets/js/ie-emulation-modes-warning.js')?>"></script>
	<script src="<?=base_url('jquery/jquery-1.10.2.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/bootstrap.js')?>" type="text/javascript"></script>
	<script src="<?=base_url('assets/js/login-register.js')?>" type="text/javascript"></script>
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
	<div class="content"></div>



<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span> <span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/your.groupid/">Eu Voluntário</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="/your.groupid/">
					<i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

			</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">
						<i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
					<li><a data-toggle="modal" href="/your.groupid/cadastro">
						<i class="fa fa-plus" aria-hidden="true"></i> Cadastrar</a></li>

				</ul>
		</div>
	</div>
</nav>


	<div class="content container-fluid  card col-sm-8 col-sm-offset-2">
		<div class="row content">
			<div>
				<div class="col-sm-8 col-sm-offset-2">
            <?php echo (isset($mensagem) ? $mensagem : '') ?>

							<?php echo (isset($mensagem_dois) ? $mensagem_dois : '') ?>


					<h2>Cadastro de nova organização</h2>


					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#">ONG</a></li>
					</ul>

					<div class="tab-content">

							</br>
              <form  method="post" action="<?=base_url('salvar_entidade')?>">
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
										name="entidade_email" id="email_entidade"
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
								<button type="submit" class="btn btn-primary">CADASTRAR <span class="glyphicon glyphicon-ok"></span></button>
								<br> <br>
							</form>


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
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="../../assets/js/vendor/holder.min.js"></script>
	<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<div class="container">
	<div class="row">
		<div class="modal fade login" id="loginModal">
			<div class="modal-dialog login animated">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<br>
							<h2 class="" align="center">Login</h2>
						</div>
						<div class="modal-body">
							<div class="box">
								<div class="content">
									<div class="error"></div>
									<div class="form loginBox">
										<form  method="post" accept-charset="UTF-8" action="<?=site_url('entidade/loginEntidade')?>">
											<input id="email" class="form-control" type="text" placeholder="Usuário" name="entidade_email" value="" required>
												<input id="password" class="form-control" type="password" placeholder="Senha" name="entidade_senha" value="" required>
												<input class="btn btn-default btn-login" type="submit" value="Entrar" onclick="">

										</form>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="content registerBox" style="display: none;">
									<div class="form">
										<form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
											<input id="email" class="form-control" type="text" placeholder="Email" name="email">
											<input id="password" class="form-control" type="password" placeholder="Password" name="password">
											<input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
											<input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="forgot login-footer">
								<span><a href="/your.groupid/cadastro">Deseja criar uma conta? É de graça!</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
</body>
</html>
