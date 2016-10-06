

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li class="">
					<a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class=""> Home</span></a>
				</li>
				<li class="">
					<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user" aria-hidden="true"></i><span class=""> Meu Perfil</span></a>
				</li>
				<li>
					<a href="<?=site_url('Painel_voluntario/carregaFormularioBusca')?>"><i class="fa fa-search" aria-hidden="true"></i><span class=""> Procurar Vaga</span></a>
				</li>
				<li class="active">
					<a href="<?=site_url('Painel_voluntario/carregaVagaPorArea')?>"><i class="fa fa-search-plus" aria-hidden="true"></i><span class=""> Vaga Por Área</span></a>
				</li>
				<li>
					<a href="<?=site_url('Painel_voluntario/carregaHistoricoDeVagas')?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span class=""> Historico de Vagas</span></a>
				</li>

			</ul>

		</div>

		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
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
										<span><h3>Área: <?php
										echo $dadosVoluntario->atuacao_um;

										?></h3></span>
										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
														<th>Nome</th>
														<th>Presencial?</th>
														<th>Opções</th>
													</tr>
												</thead>
												<tbody id="myTable">
													<?php if (!empty($vagaPorAreaUm)):
														foreach ($vagaPorAreaUm as $row): ?>
														<td>
															<?php echo $row->nome;?>
														</td>
														<td>
															<?php echo $row->presencial;?>
														</td>

														<td>
															<a  href="<?= site_url('Painel_voluntario/vagaCompleta/' . $row->id_vaga . '/' . $row->id_entidade ) ?>" class="btn btn-primary btn-xs">
																<i class="fa fa-pencil fa-fw"></i> Ver Vaga
															</a>

														</td>

													</tr>
												<?php endforeach; ?>
											<?php else: {
												echo "<td colspan='5' align = 'center'>
												Não há nenhuma vaga cadastrada nesta área no sistema...
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
							<span><h3>Área: <?php
							echo $dadosVoluntario->atuacao_dois;

							?></h3></span>
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Nome</th>
											<th>Presencial?</th>
											<th>Opções</th>
										</tr>
									</thead>
									<tbody id="myTable4">
										<?php if (!empty($vagaPorAreaDois)):
											foreach ($vagaPorAreaDois as $row): ?>
											<td>
												<?php echo $row->nome;?>
											</td>
											<td>
												<?php echo $row->presencial;?>
											</td>
											<td>
												<a  href="<?= site_url('Painel_voluntario/vagaCompleta/' . $row->id_vaga . '/' . $row->id_entidade ) ?>" class="btn btn-primary btn-xs">
													<i class="fa fa-pencil fa-fw"></i> Ver Vaga
												</a>

											</td>

										</tr>
									<?php endforeach; ?>
								<?php else: {
									echo "<td colspan='5' align = 'center'>
									Não há nenhuma vaga cadastrada nesta área no sistema...
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
