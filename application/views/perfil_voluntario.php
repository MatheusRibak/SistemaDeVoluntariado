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
                      <span><h2>Eu Voluntário</h2></span>
                  </div>
                  <div class="navi">
                      <ul>
                          <li><a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                          <li class="active"><a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Meu Perfil</span></a></li>
                          <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Procurar Vaga</span></a></li>



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

                          </div>
                          <div class="col-md-5">
                              <div class="header-rightside">
                                  <ul class="list-inline header-top pull-right">



                                      <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="user">
                                              <b class="caret"></b></a>
                                          <ul class="dropdown-menu">
                                              <li>
                                                  <div class="navbar-content">
                                                      <span>    <?php echo $dadosVoluntario->nome ?></span>
                                                      <p class="text-muted small">
                                                          <?php echo $dadosVoluntario->email ?>
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
                      <h1>Hello:  <?php echo $dadosVoluntario->nome ?></h1>
                      <div class="row">
                          <div class="col-md-12 col-sm-5 col-xs-12 ">

                              <div class="sales">


																	<form action="<?=site_url('Painel_voluntario/atualizar')?>" method="post">
																		<div class="row">


                                      <div class="col-md-12">
                                        <div class="form-group col-md-6">
                                          <label for="exampleInputEmail1">Nome</label> <input
                                            type="text" class="form-control" name="nome"
                                            placeholder="Nome" value="<?php echo $dadosVoluntario->nome ?>"  />
                                        </div>
                                        <div class="col-md-6">
  																				<div class="form-group">
  																					<label>Telefone</label> <input type="tel" class="form-control"
  																						name="telefone" placeholder="telefone"
  																						value="<?php echo $dadosVoluntario->telefone ?>" required/>
  																				</div>
  																			</div>
                                        <input type="hidden" name="email" value="<?php echo $dadosVoluntario->email ?>">
                                      </div>

                                      <div class="col-md-12">
                                        <div class="form-group col-md-6">
                                          <label for="exampleInputEmail1">Email</label> <input
                                            type="email" class="form-control" name=""
                                            placeholder="Email" value="<?php echo $dadosVoluntario->email ?>" disabled  />
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Senha</label> <input type="password" class="form-control"
                                              name="senha" placeholder="senha"
                                              value="<?php echo $dadosVoluntario->senha ?>" required/>
                                          </div>
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
