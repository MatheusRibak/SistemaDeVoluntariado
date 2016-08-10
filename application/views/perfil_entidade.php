<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home - Entidade</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>"  >
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>"  >
    <link rel="stylesheet" href="<?=base_url('assets/css/main.css')?>"  >
    <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/npm.js')?>"></script>
		<link href="<?=base_url('assets/css/main.css')?>" rel="stylesheet" />

    <script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/holder.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/demo.js')?>"></script>
  </head>



  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <body class="home">
      <div class="container-fluid display-table">
          <div class="row display-table-row">
              <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                  <div class="logo">
                      <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                          <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                      </a>
                  </div>
                  <div class="navi">
                      <ul>
                          <li><a href="<?=site_url('Painel_entidade/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                          <li class="active"><a href="<?=site_url('Painel_entidade/carregarPerfil')?>"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Meu Perfil</span></a></li>
                          <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Minhas Vagas</span></a></li>
                          <li><a href="<?=site_url('Painel_entidade/carregarCadastroVaga')?>"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cadastrar Nova Vaga</span></a></li>


                      </ul>
                  </div>
              </div>
              <div class="col-md-10 col-sm-11 display-table-cell v-align">
                  <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                  <div class="row">
                      <header>
                          <div class="col-md-7">
                              <nav class="navbar-default pull-left">
                                  <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                          <span class="sr-only">Toggle navigation</span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                          <span class="icon-bar"></span>
                                      </button>
                                  </div>
                              </nav>
                              <div class="search hidden-xs hidden-sm">
                                  <input type="text" placeholder="Search" id="search">
                              </div>
                          </div>
                          <div class="col-md-5">
                              <div class="header-rightside">
                                  <ul class="list-inline header-top pull-right">
                                      <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                                      <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                      <li>
                                          <a href="#" class="icon-info">
                                              <i class="fa fa-bell" aria-hidden="true"></i>
                                              <span class="label label-primary">3</span>
                                          </a>
                                      </li>
                                      <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="user">
                                              <b class="caret"></b></a>
                                          <ul class="dropdown-menu">
                                              <li>
                                                  <div class="navbar-content">
                                                      <span>    <?php echo $dadosEntidade->nome ?></span>
                                                      <p class="text-muted small">
                                                          <?php echo $dadosEntidade->email ?>
                                                      </p>
                                                      <div class="divider">
                                                      </div>
                                                      <a href="#" class="view btn-sm active">View Profile</a>
                                                    <a href="<?=site_url('Entidade/deslogarEntidade')?>" class="view btn-sm active">Sair</a>
                                                  </div>
                                              </li>
                                          </ul>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </header>
                  </div>
                  <div class="user-dashboard">
                      <h1>Hello:  <?php echo $dadosEntidade->nome ?></h1>
                      <div class="row">
                          <div class="col-md-12 col-sm-5 col-xs-12 ">

                              <div class="sales">


																	<form action="<?=site_url('Painel_entidade/atualizar')?>" method="post">
																		<div class="row">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label>Entidade</label>


											<input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $dadosEntidade->nome ?>" />


																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="form-group">
																					<label for="exampleInputEmail1">Email</label> <input
																						type="email" class="form-control" name=""
																						placeholder="Email" value="<?php echo $dadosEntidade->email ?>" disabled  />
																				</div>
																				<input type="hidden" name="email" value="<?php echo $dadosEntidade->email ?>">
																			</div>



																		</div>

																		<div class="row">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label>Senha</label> <input type="password" class="form-control"
																						name="senha" placeholder="senha"
																						value="<?php echo $dadosEntidade->senha ?>" required/>
																				</div>
																			</div>
																			<div class="form-group col-md-6">
																				<label>telefone</label> <input type="text"
																					class="form-control" name="telefone"
																					placeholder="Telefone"
																					value="<?php echo $dadosEntidade->telefone ?>" required>
																			</div>

																		</div>

																		<div class="row">
																			<div class="col-md-6">
																				<div class="form-group">
																					<label>Rua</label> <input type="text" class="form-control"
																						name="rua" placeholder="Rua"
																						value="<?php echo $dadosEntidade->rua ?>" required>
																				</div>
																			</div>
																			<div class="form-group col-md-4">
																				<label>Bairro</label> <input type="text"
																					class="form-control" name="bairro"
																					placeholder="Bairro"
																					value="<?php echo $dadosEntidade->bairro ?>" required>
																			</div>
																			<div class="form-group col-md-2">
																				<label>Nº</label> <input type="text" class="form-control"
																					name="numero" placeholder="Nº"
																					value="<?php echo $dadosEntidade->numero ?>" required>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-4">
																				<div class="form-group">
																					<label>Cidade</label> <input type="text"
																						class="form-control" name="cidade"
																						placeholder="Cidade"
																						value="<?php echo $dadosEntidade->cidade ?>" required>
																				</div>
																			</div>
																			<div class="col-md-4">
																				<div class="form-group">
																					<label>UF</label> <input type="text" class="form-control"
																						name="uf" placeholder="Unidade Federativa"
																						value="<?php echo $dadosEntidade->uf ?>" required>
																				</div>
																			</div>
																			<div class="col-md-4">
																				<div class="form-group">
																					<label>CEP</label> <input type="text" class="form-control"
																						name="cep" placeholder="CEP"
																						value="<?php echo $dadosEntidade->cep ?>" required>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="form-group">
																					<label>Area de atuação</label> <input type="text"
																						name="area_atuacao"
																						value="<?php echo $dadosEntidade->area_atuacao ?>"
																						class="form-control"
																						placeholder="Área de atuação" required>
																				</div>
																			</div>
																		</div>

																		<button type="submit" class="btn btn-primary pull-right">SALVAR
																			ALTERAÇÕES</button>

																	</form>
                              </div>

                          </div>

                      </div>
                  </div>
              </div>
          </div>

      </div>
  </body>
</html>
