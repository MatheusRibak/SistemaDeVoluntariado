<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home - Voluntário</title>
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
				<script type="text/javascript" src="<?=base_url('assets/js/paginacao.js')?>"></script>
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
									<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user"></i>  Meu Perfil</a>
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
						<li class="">
							<a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class=""> Home</span></a>
						</li>
						<li class="">
							<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user" aria-hidden="true"></i><span class=""> Meu Perfil</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_voluntario/carregaFormularioBusca')?>"><i class="fa fa-search" aria-hidden="true"></i><span class=""> Procurar Vaga</span></a>
						</li>
						<li class="active">
							<a href="<?=site_url('Painel_voluntario/carregaHistoricoDeVagas')?>"><i class="fa fa-search" aria-hidden="true"></i><span class=""> Historico de Vagas</span></a>
						</li>

					</ul>

				</div>

				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h3>Historico de Vagas</h3><br>
<div class="col-sm-12">
	<?php if ($this->input->get('aviso') == 2) { ?>
	<div class="alert alert-success">
		Você se candidatou a vaga com sucesso! Logo você vai ter um retorno referente a mesma!!!
	</div>
	<?php } ?>
	<?php if ($this->input->get('aviso') == 3) { ?>
	<div class="alert alert-success">
		Você excluiu a sua candidatura com sucesso!!!
	</div>
	<?php } ?>
	<?php if ($this->input->get('aviso') == 4) { ?>
	<div class="alert alert-danger">
		Você não pode excluir a vaga pois faltam menos de 48 horas para ela ser executada, caso você
		 não compareça a ONG provavelmente irá falar mal a seu respeito no seu historico...
	</div>
	<?php } ?>
</div>




	<div class="row">
		<div class="col-sm-12  col-xs-12 ">

<div class="sales">


				<!-- -->





							<div class="form-group col-sm-12">
												<span><h3>Vagas Aceitas</h3></span>
								<div class="table-responsive">
<table class="table">
<thead>
		<tr>
				<th>Nome</th>
				<th>Status</th>
				<th>Opções</th>
		</tr>
</thead>
<tbody id="myTable">
<?php if (!empty($vagasAceitas)):
	 foreach ($vagasAceitas as $row): ?>
						<td>
							<?php echo $row->nome;?>
						</td>
						<td>
							<?php echo $row->status_vaga;?>
						</td>

						<td>
							<a  href="<?= site_url('Painel_voluntario/excluir/' . $row->id_vaga . '/' . $row->id_voluntario ) ?>"
								class="btn btn-danger btn-sm"
								onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
									<i class="fa fa-trash-o" aria-hidden="true"></i>   Não vou conseguir ir
							</a>
							<a  href="<?= site_url('Vaga/verAceita/' . $row->id_vaga . '/' . $row->id_entidade) ?>"
								class="btn btn-info btn-sm">
									<i class="fa fa-trash-o" aria-hidden="true"></i>   Ver Detalhes
							</a>
						</td>

			</tr>
						<?php endforeach; ?>
					<?php else: {
						echo "<td colspan='5' align = 'center'>
					Você não tem nenhuma vaga aceita atualmente...
											</td>";
					} ?>
					<?php	endif; ?>
</tbody>

</table>
<div class="text-center">
<ul class="pagination pagination-lg pager" id="myPager"></ul>
</div>

</div>



							</div>







							</div>




              <div class="sales">


              				<!-- -->





              							<div class="form-group col-sm-12">
              												<span><h3>Vagas Recusadas</h3></span>
              								<div class="table-responsive">
              <table class="table">
              <thead>
              		<tr>
              				<th>Nome</th>
              				<th>Status</th>

              		</tr>
              </thead>
              <tbody id="myTable">
              <?php if (!empty($vagasRecusadas)):
              	 foreach ($vagasRecusadas as $row): ?>
              						<td>
              							<?php echo $row->nome;?>
              						</td>
              						<td>
              							<?php echo $row->status_vaga;?>
              						</td>


              			</tr>
              						<?php endforeach; ?>
              					<?php else: {
              						echo "<td colspan='5' align = 'center'>
              					Você não tem nenhuma vaga recusada..
              											</td>";
              					} ?>
              					<?php	endif; ?>
              </tbody>

              </table>
              <div class="text-center">
              <ul class="pagination pagination-lg pager" id="myPager"></ul>
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
