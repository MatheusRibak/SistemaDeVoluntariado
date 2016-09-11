<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home - Entidade</title>
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
						<li class="active">
							<a href="<?=site_url('Painel_entidade/index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_entidade/carregarPerfil')?>"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Meu Perfil</span></a>
						</li>
						<li>
							<a href="<?=site_url('Vaga/carregaMinhasVagas')?>"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Minhas Vagas</span></a>
						</li>
						<li class="">
							<a href="<?=site_url('Painel_entidade/carregarCadastroVaga')?>"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cadastrar Nova Vaga</span></a>
						</li>
					</ul>

				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<div class="row">
						<div class="col-sm-12  col-xs-12 ">

				<div class="sales">


								<!-- -->





											<div class="form-group col-sm-12">
																<span><h3>Candidaturas para as minhas vagas</h3></span>
												<div class="table-responsive">
				<table class="table">
				<thead>
						<tr>
								<th>Vaga</th>
								<th>Voluntário</th>
								<th>Opções</th>
						</tr>
				</thead>
				<tbody id="myTable">
				<?php if (!empty($minhasVagas)):
					 foreach ($minhasVagas as $row): ?>
										<td>
											<?php echo $row->nome;?>
										</td>
										<td>
											<?php echo $row->descricao;?>
										</td>
										<td>
											<a  href="<?= site_url('Painel_entidade/excluir/' . $row->id_vaga . '/' . $row->id_entidade ) ?>"
												class="btn btn-danger btn-sm"
												onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
													<i class="fa fa-trash-o" aria-hidden="true"></i>   Excluir Vaga
											</a>
										</td>

							</tr>
										<?php endforeach; ?>
									<?php else: {
										echo "<td colspan='5' align = 'center'>
									Você não possui nenhuma candidatura para as suas vagas atualmente...
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
