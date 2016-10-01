

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li>
							<a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class=""> Home</span></a>
						</li>
						<li class="">
							<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user" aria-hidden="true"></i><span class=""> Meu Perfil</span></a>
						</li>
						<li class="active">
							<a href="<?=site_url('Painel_voluntario/carregaFormularioBusca')?>"><i class="fa fa-search" aria-hidden="true"></i><span class=""> Procurar Vaga</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_voluntario/carregaVagaPorArea')?>"><i class="fa fa-search-plus" aria-hidden="true"></i><span class=""> Vaga Por Área</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_voluntario/carregaHistoricoDeVagas')?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span class=""> Historico de Vagas</span></a>
						</li>

					</ul>

				</div>

				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<div class="col-sm-12">
						<?php if ($this->input->get('aviso') == 5) { ?>
						<div class="alert alert-danger">
							Você já se candidatou a essa vaga anteriormente!!!
						</div>
						<?php } ?>
					</div>
					<h1 class="page-header">Procurar Vaga</h1>
					<div class="row">
						<div class="col-sm-12  col-xs-12 ">

							<div class="sales">
								<!-- -->

								<form action="<?=site_url('Painel_voluntario/getVagas')?>" method="post">
									<div class="row">



										<div class="col-sm-12">
											<div class="form-group col-sm-12">
                        <label for="">Por favor digite algo referente a vaga que deseja pesquisar...</label>
											<br>	<input
												type="text" class="form-control" name="input_busca"
												placeholder="Procurar vaga" value=""   />
											</div>


										</div>

									</div>
									<div class="col-sm-12">
										<button type="submit" class="btn btn-primary">
									<i class="fa fa-search"></i>		PROCURAR VAGA
										</button>
									</div>



								</form>
							</div>



						</div>

					</div>

				</div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Resultados da sua Busca</h1>
          <div class="row">
            <div class="col-sm-12  col-xs-12 ">

              <div class="sales">
                <!-- -->


                  <div class="row">



                    <div class="col-sm-12">
                      <div class="form-group col-sm-12">
                        <div class="table-responsive">
    <table class="table table-hover no-margin">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Área</th>
                <th>Presencial?</th>
                <th>Vaga Completa</th>
            </tr>
        </thead>
        <tbody>
					<td colspan="5" align = "center">
							Você ainda não pesquisou nada...
						 </td>
        </tbody>
    </table>
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
