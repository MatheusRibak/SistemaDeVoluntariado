

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li class="active">
							<a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class=""> Home</span></a>
						</li>
						<li class="">
							<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user" aria-hidden="true"></i><span class=""> Meu Perfil</span></a>
						</li>
						<li>
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
<h3>Seja bem vindo: <?php echo $dadosVoluntario->nome ?>!!!</h3><br>
<div class="col-sm-12">
	<?php if ($this->input->get('aviso') == 2) { ?>
	<div class="alert alert-success">
		Você se candidatou a vaga com sucesso! Logo você vai ter um retorno referente a mesma!!!
	</div>
	<?php } ?>
	<?php if ($this->input->get('aviso') == 3) { ?>
	<div class="alert alert-success">
		Você excluiu a sua candidatura com sucesso!!!
	</div>
	<?php } ?>
	<?php if ($this->input->get('aviso') == 4) { ?>
	<div class="alert alert-danger">
		Você não pode excluir a vaga pois faltam menos de 48 horas para ela ser executada, caso você
		 não compareça a ONG provavelmente irá falar mal a seu respeito no seu historico...
	</div>
	<?php } ?>
</div>




	<div class="row">
		<div class="col-sm-12  col-xs-12 ">

<div class="sales">


				<!-- -->





							<div class="form-group col-sm-12">
												<span><h3>Minhas Candidaturas Atuais</h3></span>
								<div class="table-responsive">
<table class="table">
<thead>
		<tr>
				<th>Nome</th>
				<th>Status</th>
				<th>Opções</th>
		</tr>
</thead>
<tbody id="myTable">
<?php if (!empty($minhasVagas)):
	 foreach ($minhasVagas as $row): ?>
						<td>
							<?php echo $row->nome;?>
						</td>
						<td>
							<?php echo $row->status_vaga;?>
						</td>
						<td>
							<a  href="<?= site_url('Painel_voluntario/excluirNaoaceita/' . $row->id_vaga . '/' . $row->id_voluntario ) ?>"
								class="btn btn-danger btn-sm"
								onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
									<i class="fa fa-trash-o" aria-hidden="true"></i>   Excluir Candidatura
							</a>
						</td>

			</tr>
						<?php endforeach; ?>
					<?php else: {
						echo "<td colspan='5' align = 'center'>
					Você não tem nenhuma vaga atual..
											</td>";
					} ?>
					<?php	endif; ?>
</tbody>

</table>
<div class="text-center">
<ul class="pagination pagination-lg pager" id="myPager"></ul>
</div>

</div>



							</div>
							</div>

<br> <br>
							<div class="sales">


                      <!-- -->





                            <div class="form-group col-sm-12">
                                      <span><h3>Atuaçãoes Finalizadas</h3></span>
                              <div class="table-responsive">
              <table class="table">
              <thead>
                  <tr>
                      <th>Nome</th>
                      <th>Status</th>
                      <th>Opções</th>
                  </tr>
              </thead>
              <tbody id="myTable4">
              <?php if (!empty($vagasFinalizadas)):
                 foreach ($vagasFinalizadas as $row): ?>
                          <td>
                            <?php echo $row->nome;?>
                          </td>
                          <td>
                            <?php echo $row->status_vaga;?>
                          </td>
                          <td>
                            <a  href="<?= site_url('Painel_voluntario/verHistorico/' . $row->id_vaga . '/' . $row->id_voluntario ) ?>"
                              class="btn btn-info btn-sm">
                                <i class="" aria-hidden="true"></i>   Ver comentário da ONG
                            </a>
                          </td>

                    </tr>
                          <?php endforeach; ?>
                        <?php else: {
                          echo "<td colspan='5' align = 'center'>
                      Você não possui nenhuma vaga executada ainda...
                                    </td>";
                        } ?>
                        <?php	endif; ?>
              </tbody>

              </table>
              <div class="text-center">
              <ul class="pagination pagination-lg pager" id="myPager4"></ul>
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
