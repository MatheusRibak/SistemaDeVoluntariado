<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?xml version="1.0" encoding="ISO-8859-1" ?>

<html lang="pt-br">
	<head>
		<link rel="icon" type="image/png" href="img/favicon.ico">
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title" charset="utf-8">
		<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/css/ie10-viewport-bug-workaround.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/css/carousel.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
		<link href="<?=base_url('assets/css/login-register.css')?>" rel="stylesheet" />

		<title>Home - EuVoluntário</title>

		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

		<script src="<?=base_url('assets/js/ie-emulation-modes-warning.js')?>"></script>
		<script src="<?=base_url('jquery/jquery-1.10.2.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('assets/js/bootstrap.js')?>" type="text/javascript"></script>
		<script src="<?=base_url('assets/js/login-register.js')?>" type="text/javascript"></script>
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	</head>

	<body>
		<div class="content"></div>

		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/your.groupid/;jsessionid=B3492B48A59F9AF78373ADB67BDBC592">Eu Voluntário</a>

				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a data-toggle="modal" href="<?=site_url('home')?>" > <i class="fa fa-home" aria-hidden="true"></i> Home</a>
						</li>

					</ul>

					<ul class="nav navbar-nav navbar-right">

						<li>
							<a data-toggle="modal" href="<?=site_url('login')?>" onclick="openLoginModal();"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
						</li>

						<li>
							<a data-toggle="modal" href="<?=base_url('cadastro')?>"> <i class="fa fa-plus" aria-hidden="true"></i> Cadastrar</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide" src="<?=base_url('assets/img/meslide2.jpg')?>" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>DEMONSTRE</h1>
							<p>
								"O amor não se vê com os olhos mas com o coração"
							</p>
							<p>
								<a class="btn btn-lg btn-primary"
								href="<?=base_url('cadastro')?>" role="button">CADASTRE-SE</a>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="second-slide" src="<?=base_url('assets/img/meslide3.jpg')?>" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>PERSISTA</h1>
							<p>
								"Você só terá fracassado quando desisitir de tentar"
							</p>
							<p>
								<a class="btn btn-lg btn-primary"
								href="<?=base_url('cadastro')?>" role="button">CADASTRE-SE</a>
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<img class="third-slide" src="<?=base_url('assets/img/mpslide2.jpg')?>" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>ALEGRE-SE</h1>
							<p>
								"Saber encontrar a alegria na alegria dos outros, é o segredo da felicidade"
							</p>
							<p>
								<a class="btn btn-lg btn-primary"
								href="<?=base_url('cadastro')?>" role="button">CADASTRE-SE</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button"
			data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
			aria-hidden="true"></span> <span class="sr-only">Anterior</span> </a><a class="right carousel-control" href="#myCarousel" role="button"
			data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Próximo</span> </a>
		</div>

		<div class="container marketing">
			<div class="row">
				<div class="col-lg-4">
					<img class="img-circle" src="<?=base_url('assets/img/backcircle80.png')?>"
					alt="Generic placeholder image" width="140" height="140">
					<h3>São mais de 80 ONGs</h3>
					<p>
						Na semana de lançamento do sistema foram cadastradas mais de
						80 organizações estabelecidas nos quatro cantos do páis.
					</p>
				</div>
				<div class="col-lg-4">
					<img class="img-circle" src="<?=base_url('assets/img/backcircle500.png')?>"
					alt="Generic placeholder image" width="140" height="140">
					<h3>Com mais de 500 vagas</h3>
					<p>
						Uma média de 50 vagas são abertas por dia pelas diversas
						organizações cadastradas e os números só crescem.
					</p>
				</div>
				<div class="col-lg-4">
					<img class="img-circle" src="<?=base_url('assets/img/backcircle764.png')?>"
					alt="Generic placeholder image" width="140" height="140">
					<h3>e 764 voluntários</h3>
					<p>
						Mais de 764 pessoas já se cadastraram como voluntários sendo
						que mais da metade já começou atuar em uma vaga.
					</p>
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-9">
					<h2 class="featurette-heading"> Dê o primeiro passo! </h2>
					<p class="lead">
						Faça como Joana, ela encarou que o primeiro passo para a mudança é a aceitação.
						Uma vez que você aceite a si mesmo, você abre a porta para a mudança.
						Isso é tudo o que você tem que fazer. Mudança não é algo que você faz, é algo que você permite.
					</p>
				</div>
				<div class="col-md-3">
					<img class="featurette-image img-responsive center-block"
					src="<?=base_url('assets/img/imagem4.jpg')?>" alt="Generic placeholder image">
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-9 col-md-push-3">
					<h2 class="featurette-heading"> Seja solidário, ame o próximo! </h2>
					<p class="lead">
						Sentimento de ajudar ao próximo.
						Esta é a base deste conceito tão amplo chamado solidariedade.
						Uma postura solidária envolve a capacidade de compartilhar o sentimento de outra pessoa e,
						de alguma forma, tentar amenizar o problema.
					</p>
				</div>
				<div class="col-md-3 col-md-pull-9">
					<img class="featurette-image img-responsive center-block"
					src="<?=base_url('assets/img/imagem6.jpg')?>" alt="Generic placeholder image">
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-9">
					<h2 class="featurette-heading"> Transforme a si e o resto do mundo em algo melhor! </h2>
					<p class="lead">
						O sentimento verdadeiro é a compreensão, é o perdão;
						é aquele que dá uma sensação de paz.
						Em vez da ação que busca se desfazer de partes de nós mesmos,
						devemos aprender a arte da transformação. Podemos transformar nossa raiva,
						por exemplo, em algo mais salutar, como a compreensão.
					</p>
				</div>
				<div class="col-md-3">
					<img class="featurette-image img-responsive center-block"

					src="<?=base_url('assets/img/imagem 10.jpg')?>" alt="Generic placeholder image">
				</div>
			</div>

			<hr class="featurette-divider">

			<footer>
				<div>

					<p class="pull-right">
						<a href="#">Voltar para o topo.</a>
					</p>

					<p>
						Eu Voluntário - 2016
					</p>

				</div>
				<script
				src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script>
					window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
				</script>

				<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
				<script src="<?=base_url('../../assets/js/vendor/holder.min.js')?>"></script>
				<script src="<?=base_url('assets/js/ie10-viewport-bug-workaround.js')?>"></script>

	</body>
</html>
