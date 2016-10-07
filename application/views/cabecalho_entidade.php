<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EuVoluntário - Entidade</title>
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/metisMenu.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/morris.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/sb-admin-2.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/dataTables.bootstrap.css')?>"  >
	<link rel="stylesheet" href="<?=base_url('assets/css/dataTables.responsive.css')?>"  >
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/npm.js')?>"></script>

	<script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/holder.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/demo.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/jquery.dataTables.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/dataTables.bootstrap.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/dataTables.responsive.js')?>"></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<script type="text/javascript" src="<?=base_url('assets/js/sb-admin-2.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/metisMenu.js')?>"></script>

	<script type="text/javascript">
	function trocaUrgencia() {
		var e = document.getElementById("listaUrgencia");
		var strUrgencia = e.options[e.selectedIndex].text;
		document.getElementById("vaga_importancia").value = strUrgencia;
	}

	function trocaCidade() {
		var e = document.getElementById("cidade");
		document.getElementById("vaga_cidade").value = e.options[e.selectedIndex].text;

		var f = document.getElementById("estado");
		document.getElementById("vaga_estado").value = f.options[f.selectedIndex].text;
	}

	function trocaPresencial() {
		var e = document.getElementById("presencial");
		document.getElementById("vaga_presencial").value = e.options[e.selectedIndex].text;
	}

	</script>

</head>

<body>



	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">SB Admin v2.0</a>
		</div>
		<!-- /.navbar-header -->

		<ul class="nav navbar-top-links navbar-right">



			<!-- /.dropdown -->
			<li class="dropdown">

				<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span> <?php echo $dadosEntidade->nome ?></span> <span class="caret"></span> </a>

				<ul class="dropdown-menu" role="menu">



					<li>
						<a href="<?=site_url('Painel_voluntario/deslogar')?>"><i class="fa fa-sign-out"></i>Sair</a>
					</li>
				</ul>
			</li>
			<!-- /.dropdown -->
		</ul>
		<!-- /.navbar-top-links -->

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li class="sidebar-search">

						<li class="">
							<a href="<?=site_url('Painel_entidade/index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class=""> Home</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_entidade/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i><span class=""> Meu Perfil</span></a>
						</li>
						<li>
							<a href="<?=site_url('Vaga/carregaMinhasVagas')?>"><i class="fa fa-list-alt"  aria-hidden="true"></i><span class=""> Minhas Vagas</span></a>
						</li>
						<li class="">
							<a href="<?=site_url('Painel_entidade/carregarCadastroVaga')?>"><i class="fa fa-plus"  aria-hidden="true"></i><span class=""> Cadastrar Nova Vaga</span></a>
						</li>


					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>
			<!-- /.navbar-static-side -->
		</nav>
