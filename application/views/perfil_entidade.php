


<title>Perfil - EuVoluntário</title>
</head>

<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" />
    <link href="<?=base_url('assets/css/animate.min.css')?>" rel="stylesheet"/>
    <link href="<?=base_url('assets/css/light-bootstrap-dashboard.css')?>" rel="stylesheet"/>
    <link href="<?=base_url('assets/css/demo.css')?>" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?=base_url('assets/css/pe-icon-7-stroke.css')?>" rel="stylesheet" />
    <title>Cabecalho</title>

<body>

	<div class="wrapper">


<div class="sidebar" data-color="gray" data-image="<?=base_url('assets/img/sidebar-3.jpg')?>">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Eu Voluntário
                </a>
            </div>
            <ul class="nav">
 				<li>
                  <a href="<?=base_url('home_entidade')?>">
                        <i class="pe-7s-graph"></i>
                        <p>Principal</p>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('entidade/carregarPerfil')?>">
                        <i class="pe-7s-user"></i>
                        <p>Meu Perfil</p>
                    </a>
                </li>
                <li>
                  <a href="<?=base_url('entidade/carregarVagasEntidade')?>">
                        <i class="pe-7s-note2"></i>
                        <p>Minhas vagas</p>
                    </a>
                </li>
				<li>
					<a href="<?=base_url('entidade/carregarCadastroVaga')?>">
					<i class="pe-7s-portfolio"></i>
					<p>Cadastrar Nova Vaga</p>
					</a>
				</li>
            </ul>
    	</div>
    </div>
		<div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target="#navigation-example-2">
							<span class="sr-only">Toggle navigation</span> <span
								class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Meu Perfil</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-left"></ul>
						<ul class="nav navbar-nav navbar-right">

							<li><a href="/your.groupid/cadastro">
							 Deslogar
							</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="header">
									<h4 class="title">Editar perfil</h4>
								</div>
								<div class="content">
									<form action="<?=site_url('entidade/atualizar')?>" method="post">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Entidade</label> <input type="text"
														class="form-control" name="nome"
														placeholder="Entidade"
														value=""  />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputEmail1">Email</label> <input
														type="email" class="form-control" name=""
														placeholder="Email" value="" disabled  />
												</div>
												<input type="hidden" name="email" value="teste">
											</div>



										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Senha</label> <input type="password" class="form-control"
														name="senha" placeholder="senha"
														value="" required/>
												</div>
											</div>
											<div class="form-group col-md-6">
												<label>telefone</label> <input type="text"
													class="form-control" name="telefone"
													placeholder="Telefone"
													value="" required>
											</div>

										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Rua</label> <input type="text" class="form-control"
														name="rua" placeholder="Rua"
														value="" required>
												</div>
											</div>
											<div class="form-group col-md-4">
												<label>Bairro</label> <input type="text"
													class="form-control" name="bairro"
													placeholder="Bairro"
													value="" required>
											</div>
											<div class="form-group col-md-2">
												<label>Nº</label> <input type="text" class="form-control"
													name="numero" placeholder="Nº"
													value="" required>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label>Cidade</label> <input type="text"
														class="form-control" name="cidade"
														placeholder="Cidade"
														value="" required>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>UF</label> <input type="text" class="form-control"
														name="uf" placeholder="Unidade Federativa"
														value="" required>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label>CEP</label> <input type="text" class="form-control"
														name="cep" placeholder="CEP"
														value="" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label>Area de atuação</label> <input type="text"
														name="area_atuacao"
														value=""
														class="form-control"
														placeholder="Área de atuação" required>
												</div>
											</div>
										</div>

										<button type="submit" class="btn btn-primary pull-right">SALVAR
											ALTERAÇÕES</button>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-user">
								<div class="image">
									<img
										src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
										alt="..." />
								</div>
								<div class="content">
									<div class="author">


   												<a href="#"> <img class="avatar border-gray"
												src="img/def-user.png" width="100" height="100" alt="..." />






											<h4 class="title">Matheus Ribak<br />
												<small>1</small>
											</h4>
										</a>
									</div>
									<p class="description text-center">""</p>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-4">

						<form action="/your.groupid/salvarImagem/imagem"
							method="POST" enctype="multipart/form-data">
							<fieldset>
								<legend>Upload de Imagem</legend>
								<input type="file" name="imagem" />


								<button type="submit">Enviar</button>
							</fieldset>
						</form>
						</div>


					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<p class="copyright pull-right">&copy; 2016 EuVoluntário</p>
				</div>
			</footer>
		</div>
	</div>
</body>



<script src="<?=base_url('assets/js/jquery-1.10.2.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('assets/js/bootstrap-checkbox-radio-switch.js')?>"></script>
<script src="<?=base_url('assets/js/chartist.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap-notify.js')?>"></script>
<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="<?=base_url('assets/js/light-bootstrap-dashboard.js')?>"></script>
<script src="<?=base_url('assets/js/demo.js')?>"></script>
</html>
