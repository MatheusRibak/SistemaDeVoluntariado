

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
							<a href="<?=site_url('Painel_voluntario/carregaVagaPorArea')?>"><i class="fa fa-search-plus" aria-hidden="true"></i><span class=""> Vaga Por Área</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_voluntario/carregaHistoricoDeVagas')?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span class=""> Historico de Vagas</span></a>
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
                <th>Área</th>
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
                    <td><?php echo $row->area; ?></td>
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
