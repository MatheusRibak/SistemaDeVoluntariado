<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Procurar Vaga - Voluntário</title>
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
									<a href="<?=site_url('Painel_voluntario')?>"><i class="fa fa-home"></i>  Home</a>
								</li>
								<li>
									<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user"></i>   Meu Perfil</a>
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
							<a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Home</span></a>
						</li>
						<li class="">
							<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Meu Perfil</span></a>
						</li>
						<li class="active">
							<a href="<?=site_url('Painel_voluntario/carregaFormularioBusca')?>"><i class="fa fa-search" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Procurar Vaga</span></a>
						</li>

					</ul>

				</div>

				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<div class="col-sm-12">
						<?php if ($this->input->get('aviso') == 5) { ?>
						<div class="alert alert-danger">
							Você já se candidatou a essa vaga anteriormente!!!
						</div>
						<?php } ?>
					</div>
					<h1 class="page-header">Procurar Vaga</h1>
					<div class="row">
						<div class="col-sm-12  col-xs-12 ">

							<div class="sales">
								<!-- -->

								<form action="<?=site_url('Painel_voluntario/getVagas')?>" method="post">
									<div class="row">



										<div class="col-sm-12">
											<div class="form-group col-sm-12">
                        <label for="">Por favor digite algo referente a vaga que deseja pesquisar...</label>
											<br>	<input
												type="text" class="form-control" name="input_busca"
												placeholder="Procurar vaga" value=""   />
											</div>


										</div>

									</div>

									<button type="submit" class="btn btn-primary">
										PROCURAR VAGA
									</button>

								</form>
							</div>



						</div>

					</div>

				</div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Resultados da sua Busca</h1>
          <div class="row">
            <div class="col-sm-12  col-xs-12 ">

              <div class="sales">
                <!-- -->


                  <div class="row">



                    <div class="col-sm-12">
                      <div class="form-group col-sm-12">
                        <div class="table-responsive">
    <table class="table table-hover no-margin">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Presencial?</th>
                <th>Vaga Completa</th>
            </tr>
        </thead>
        <tbody>
					<td colspan="5" align = "center">
							Você ainda não pesquisou nada...
						 </td>
        </tbody>
    </table>
</div>
                      </div>


                    </div>

                  </div>



              </div>



            </div>

          </div>

        </div>
			</div>
		</div>

	</body>
</html>
