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
							<a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a>
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
          <h2 class="page-header">Vaga Completa</h2>
          <div class="row">
            <div class="col-md-12 col-sm-5 col-xs-12 ">

              <div class="sales">
                <!-- -->


                  <div class="row">



                    <div class="col-md-12">
                      <div class="form-group col-sm12">

<div class="row">
      <?php foreach ($dadosVaga as $row): ?>

  <div class="col-md-12">
      <h3 class="page-header">Dados da Vaga</h3>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Nome da Vaga</label>

      <input type="text" class="form-control" name="nome" placeholder="" value="<?php echo $row->nome ?>" disabled=""/>

    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Data de Atuação</label>

      <input type="text" class="form-control" name="data" placeholder="" value="<?php echo $row->data_validade ?>" disabled=""/>

    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Area</label>

      <input type="text" class="form-control" name="area" placeholder="" value="<?php echo $row->area?>" disabled=""/>

    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group">
      <label>Descrição</label>

      <input type="text" class="form-control" name="descricao" placeholder="" value="<?php echo $row->descricao ?>" disabled=""/>

    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Estado</label>

      <input type="text" class="form-control" name="estado" placeholder="" value="<?php echo $row->estado ?>" disabled=""/>

    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Cidade</label>

      <input type="text" class="form-control" name="cidade" placeholder="" value="<?php echo $row->cidade ?>" disabled=""/>

    </div>
  </div>
	  <?php endforeach; ?>
  <div class="col-md-12">
		      <?php foreach ($dadosEntidade as $entidade): ?>
      <h3 class="page-header">Dados da ONG</h3>
  </div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Nome da ONG</label>

			<input type="text" class="form-control" name="nome_ong" placeholder="" value="<?php echo $entidade->nome ?>" disabled=""/>

		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Área de Atuação</label>

			<input type="text" class="form-control" name="area_atuacao" placeholder="" value="<?php echo $entidade->area_atuacao ?>" disabled=""/>

		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Telefone</label>

			<input type="text" class="form-control" name="telefone" placeholder="" value="<?php echo $entidade->telefone ?>" disabled=""/>

		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label>Email</label>

			<input type="text" class="form-control" name="email" placeholder="" value="<?php echo $entidade->email ?>" disabled=""/>

		</div>
	</div>
  <?php endforeach; ?>
	<div class="col-md-12">
<form class="" action="<?=site_url('Painel_voluntario/candidataVaga')?>" method="post">
	  <?php foreach ($dadosEntidade as $entidade): ?>
<input type="hidden" name="id_entidade" value="<?php echo $entidade->id_entidade ?>">
			  <?php endforeach; ?>
				  <?php foreach ($dadosVaga as $row): ?>
<input type="hidden" name="id_vaga" value="<?php echo $row->id_vaga ?>">
						<?php endforeach; ?>
	<button type="submit" class="btn btn-primary pull-right">
		Quero me Candidatar <span class="glyphicon glyphicon-ok"></span>
	</button>
</form>
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
		</div>

	</body>
</html>
