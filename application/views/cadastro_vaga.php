


<title>Cadastrar vaga - EuVoluntário</title>
<link rel="icon" type="image/png" href="img/favicon.ico">

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
                    <a href="/your.groupid/homeEntidade">
                        <i class="pe-7s-graph"></i>
                        <p>Principal</p>
                    </a>
                </li>
                <li>
                    <a href="/your.groupid/perfilEntidade">
                        <i class="pe-7s-user"></i>
                        <p>Meu Perfil</p>
                    </a>
                </li>
                <li>
                    <a href="/your.groupid/atuacaoEntidade">
                        <i class="pe-7s-note2"></i>
                        <p>Minhas vagas</p>
                    </a>
                </li>
				<li>
					<a href="/your.groupid/cadastrarVaga">
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
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span> <span
								class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Cadastrar nova vaga</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-left"></ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/your.groupid/cadastro">Deslogar</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<br>
			<div class="content card  col-sm-10 col-sm-offset-1">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 col-sm-offset-1 col-md-10 main">
							<h3 class="page-header">Cadastro de Nova Vaga</h3>
							<h4>Complete os campos abaixo:</h4>
							<form class="form-horizontal"
								action="/your.groupid/salvarVaga" method="post">
								<div class="form-group">
									<label class="col-sm-2">Nome <br> da Vaga
									</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="vaga_nome_vaga"
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

									<input type="text" name="vaga_dataValidade" class="form-control" value="">


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
				</div>
			</div>




<br>
        <footer class="footer col-sm-12">
            <div class="container-fluid">

                <p class="copyright pull-right">
                    &copy; 2016 EuVoluntário
                </p>
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="<?=base_url('assets/js/light-bootstrap-dashboard.js')?>"></script>
	<script src="<?=base_url('assets/js/demo.js')?>"></script>



</html>
