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

    <script type="text/javascript">
         	function trocaUrgencia() {
         		var e = document.getElementById("listaUrgencia");
         		var strUrgencia = e.options[e.selectedIndex].text;
    			document.getElementById("vaga_importancia").value = strUrgencia;
    		}
         	function trocaCidade(){
         		var e = document.getElementById("cidade");
    			document.getElementById("vaga_cidade").value = e.options[e.selectedIndex].text;

    			var f = document.getElementById("estado");
    			document.getElementById("vaga_estado").value = f.options[f.selectedIndex].text;
         	}
         	function trocaPresencial(){
         		var e = document.getElementById("presencial");
    			document.getElementById("vaga_presencial").value = e.options[e.selectedIndex].text;
         	}

        </script>
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
                          <li><a href="<?=site_url('Painel_entidade/index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                          <li><a href="<?=site_url('Painel_entidade/carregarPerfil')?>"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Meu Perfil</span></a></li>
                          <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Minhas Vagas</span></a></li>
                          <li class="active"><a href="<?=site_url('Painel_entidade/carregarCadastroVaga')?>"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cadastrar Nova Vaga</span></a></li>


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
                    <br><br>
                      <div class="row">
                          <div class="col-md-12 col-sm-5 col-xs-12 ">

                              <div class="sales">

                                <div class="">
                                    <?php echo validation_errors(); ?>
                                                                  <?php if ($this->input->get('aviso') == 1) { ?>
                                                                                        <div class="alert alert-success">
                                                                            Vaga cadastrada com sucesso!
                                                                                    <?php } ?>
                                </div>

                                <h3 class="page-header">Cadastro de Nova Vaga - Complete os Campos abaixo</h3>


                                                  <div class="content">


                                <form class="form-horizontal"
                  								action="<?=site_url('Painel_entidade/salvarVaga')?>" method="post">
                  								<div class="form-group">
                  									<label class="col-sm-2">Nome <br> da Vaga
                  									</label>
                  									<div class="col-sm-9">
                  										<input type="text" class="form-control" name="vaga_nome"
                  											value="" placeholder="Nome da Vaga" required/>
                  									</div>
                  								</div>
                  								<div class="form-group">
                  									<label class="col-sm-2"> Voluntários <br>
                  										necessários
                  									</label>
                  									<div class="col-sm-9">
                  										<input type="number" class="form-control"
                  											name="vaga_quantidade_pessoa" value=""
                  											placeholder="Quantidade de valuntários que vão ser necessários" required/>
                  									</div>
                  								</div>
                  								<div class="form-group">
                  									<label class="col-sm-2"> Quantidade <br> de vaga
                  									</label>
                  									<div class="col-sm-9">
                  										<input type="number" class="form-control"
                  											name="vaga_quantidade" value=""
                  											placeholder="Quantidade de vagas que serão abertas" required/>
                  									</div>
                  								</div>
                  								<div class="form-group">
                  									<label class="col-sm-2">Urgência</label>
                  									<div class="col-xs-12 col-sm-9">
                  										<select class="col-xs-12 col-sm-12" name="urgencia"
                  											onchange="trocaUrgencia()" id="listaUrgencia">
                  											<option value="option">Por favor selecione a
                  												urgência da vaga</option>
                  											<option value="option">Muito Importante - Precisamos
                  												de voluntários urgentemente</option>
                  											<option value="option">Normal</option>
                  										</select> <input type="hidden" id="vaga_importancia"
                  											name="vaga_importancia" value="" />
                  									</div>
                  								</div>

                  								<div class="form-group">
                  									<label class="col-sm-2">Vaga presencial</label>
                  									<div class="col-sm-9">
                  										<select class="col-xs-12 col-sm-12" name="presencial"
                  											onchange="trocaPresencial()" id="presencial">
                  											<option value="option">Por favor selecione a
                  												modalidade</option>
                  											<option value="option">Sim</option>
                  											<option value="option">Não</option>
                  										</select> <input type="hidden" id="vaga_presencial"
                  											name="vaga_presencial" value="" />
                  									</div>
                  								</div>

                  								<div class="form-group form-inline">
                  									<label class="col-sm-2">UF/CIDADE</label>

                  									<div class="col-sm-9">
                  										<fieldset>
                  												<select id="estado" name="estado" class="col-xs-12 col-sm-6"
                  												onchange="trocaUf()"></select> <input type="hidden"
                  												name="vaga_estado" id="vaga_estado" value="" />
                  												<select id="cidade" name="cidade" class="col-xs-12 col-sm-6"
                  												onchange="trocaCidade()"></select> <input type="hidden"
                  												name="vaga_cidade" id="vaga_cidade" value="" />
                  										</fieldset>
                  									</div>

                  								</div>

                  								<script type="text/javascript"
                  									src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>
                  								<script type="text/javascript">
                      window.onload = function() {
                          new dgCidadesEstados(
                              document.getElementById('estado'),
                              document.getElementById('cidade'),
                              true
                          );
                      }
                  </script>

                  								<div class="form-group">
                  									<label class="col-sm-2">Descrição da <br> Vaga
                  									</label>
                  									<div class="col-sm-9">
                  										<textarea name="vaga_descricao" value=""
                  											placeholder="Descreva o que o voluntário vai ter que fazer, seja o mais detalhista possivel..."
                  											class="form-control" rows="3"></textarea>

                  									</div>
                  								</div>

                  								<div class="form-group">
                  									<label class="col-sm-2"> Data de Validade</label>
                  									<div class="col-sm-9">

                  									<input type="text" name="vaga_data_validade" class="form-control" value="">


                  									</div>
                  								</div>


                  								<div class="form-group">

                  									<label class="col-sm-2"></label>
                  									<button type="submit" class="btn btn-primary">
                  									 CADASTRAR VAGA <span class="glyphicon glyphicon-ok"></span></button>
                  								</div>


                  							</form>
                                </div>
                              </div>

                            <br><br><br><br><br><br>

                          </div>

                      </div>
                  </div>
              </div>
          </div>

      </div>
  </body>
</html>
