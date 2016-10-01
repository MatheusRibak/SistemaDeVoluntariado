

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

		<div class="col-md-5">
			<strong> <i class="fa fa-star"></i> Vaga com o nome:</strong> <?php echo $row->nome ?>

		</div>
		<div class="col-md-4">
				<strong><i class="fa fa-calendar"></i> Data em que vai acontecer: </strong><?php echo $row->data_validade ?>
					<br>
					<br>
		</div>


		<div class="col-md-12">
			 <strong><i class="fa fa-th-list"></i> Descrição da vaga: </strong><?php echo $row->descricao ?>
<br><br>
		</div>


		<div class="col-md-5">
			 <strong><i class="fa fa-suitcase"></i> Área:</strong><?php echo $row->area?>
			 <br>
			 <br>
		</div>
		<div class="col-md-5">
			 <strong><i class="fa fa-suitcase"></i> Local: </strong><?php echo $row->estado?> / <?php echo $row->cidade?>
			 <br>
			 <br>
		</div>



	  <?php endforeach; ?>
  <div class="col-md-12">
		      <?php foreach ($dadosEntidade as $entidade): ?>
      <h3 class="page-header">Dados da ONG</h3>
  </div>
	<div class="col-md-5">
		<strong> <i class="fa fa-suitcase"></i> Nome: </strong><?php echo $entidade->nome ?>



	</div>
	<div class="col-md-4">
	<strong>	<i class="fa fa-envelope" aria-hidden="true"></i> E-mail:</strong><?php echo $entidade->email ?>

<br>
<br>

	</div>
	<div class="col-md-5">
<strong>	<i class="fa fa-phone" aria-hidden="true"></i> Telefone:</strong><?php echo $entidade->telefone ?>



	</div>

  <?php endforeach; ?>

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
