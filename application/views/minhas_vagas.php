


<title>Minhas Vagas - EuVoluntário</title>
<link rel="icon" type="image/png" href="img/favicon.ico">
</head>

<body>
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
						<a class="navbar-brand" href="#">Minhas vagas</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-left">



						</ul>

						<ul class="nav navbar-nav navbar-right">



							<li><a href="/your.groupid/cadastro">Deslogar</a></li>
						</ul>
					</div>
				</div>
			</nav>


			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="header">
									<h4 class="title">Vagas ativas</h4>
									<p class="category">Limite de voluntários ainda não atingido</p>
								</div>
								<div class="content table-responsive table-full-width">
									<table class="table table-hover table-striped">
										<thead>
											<th>Nome da vaga</th>
											<th>Cidade</th>
											<th>Estado</th>
											<th>Presencial</th>
											<th>Restante</th>
											<th>Descrição</th>
										</thead>
										<tbody>

										</tbody>
									</table>

								</div>
							</div>
						</div>


						<div class="col-md-12">
							<div class="card card-plain">
								<div class="header">
									<h4 class="title">Vagas concluídas</h4>
									<p class="category">Atuações com voluntários confirmados</p>
								</div>
								<div class="content table-responsive table-full-width">
									<table class="table table-hover">
										<thead>
											<th>Nome da vaga</th>
											<th>Cidade</th>
											<th>Estado</th>
											<th>Presencial</th>
											<th>Nome do voluntário</th>
											<th>E-mail</th>
										</thead>
										<tbody>

										</tbody>
									</table>

								</div>
							</div>
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

<!--   Core JS Files   -->
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
