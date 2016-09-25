<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Resultado da Busca- Voluntário</title>
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
							<a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span> Home</span></a>
						</li>
						<li class="">
							<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user" aria-hidden="true"></i><span> Meu Perfil</span></a>
						</li>
						<li class="active">
							<a href="<?=site_url('Painel_voluntario/carregaFormularioBusca')?>"><i class="fa fa-search" aria-hidden="true"></i><span> Procurar Vaga</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_voluntario/carregaHistoricoDeVagas')?>"><i class="fa fa-search" aria-hidden="true"></i><span class=""> Historico de Vagas</span></a>
						</li>

					</ul>

				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<h1 class="page-header">Procurar Vaga</h1>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 ">

							<div class="sales">
								<!-- -->

								<form action="<?=site_url('Painel_voluntario/getVagas')?>" method="post">
									<div class="row">



										<div class="col-xs-12">
											<div class="form-group ">
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
            <div class="col-md-12 col-sm-12 col-xs-12 ">

              <div class="sales">
                <!-- -->


                  <div class="row">



                    <div class="col-sm-12">
                      <div class="form-group">
                        <div class="table-responsive">
    <table class="table table-hover no-margin" >


        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Presencial?</th>
                <th>Vaga Completa</th>
            </tr>
        </thead>
        <tbody id="myTable3">
          <?php if (!empty($dados)):

            foreach ($dados as $row): ?>

            <input type="hidden" name="id_entidade" value="<?php echo $row->id_entidade; ?>">
                <tr>
                    <td><?php echo $row->nome; ?></td>
                    <td><?php echo $row->descricao; ?></td>
                    <td><?php echo $row->presencial; ?></td>
                    <td>
                      <a  href="<?= site_url('Painel_voluntario/vagaCompleta/' . $row->id_vaga . '/' . $row->id_entidade ) ?>" class="btn btn-primary btn-xs">
                          <i class="fa fa-pencil fa-fw"></i> Ver Vaga
                      </a>

                    </td>
                </tr>
            <?php endforeach;
						 elseif ($this->input->get('aviso') == 2): {
               echo "<td colspan='5' align = 'center'>
               <div class='alert alert-danger'>
                            A sua busca não retornou nenhum resultado...
                           </div>
             						 </td>";
						 }
           endif; ?>
        </tbody>

    </table>

</div>
<div class="col-md-12 text-center">
<ul class="pagination pagination-lg pager" id="myPager3"></ul>
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
