
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li class="active">
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
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="col-sm-12">
				<?php if ($this->input->get('aviso') == 1) { ?>
					<div class="alert alert-success">
						Você aceitou o candidato com sucesso, o mesmo já recebeu um email avisando sobre isso, ou entre você mesmo em contato com o mesmo!!!
					</div>
					<?php } ?>
					<?php if ($this->input->get('aviso') == 2) { ?>
						<div class="alert alert-success">
							Você recusou o candidato com sucesso!!!
						</div>
						<?php } ?>


					</div>

					<div class="row">

						<div class="col-sm-12  col-xs-12 ">

							<div class="sales">


								<!-- -->





								<div class="form-group col-sm-12">
									<span><h3>Candidaturas para as minhas vagas</h3></span>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Vaga</th>
													<th>Voluntário</th>
													<th>Opções</th>
												</tr>
											</thead>
											<tbody id="myTable">
												<?php if (!empty($dadosVagaAtuais)):
													foreach ($dadosVagaAtuais as $row): ?>
													<td>
														<?php echo $row->nome;?>
													</td>
													<td>
														<?php foreach ($candidato as $key): ?>
															<?php echo $key->nome;?>


														</td>
														<td>
															<a  href="<?= site_url('Painel_entidade/verCandidato/' . $row->id_voluntario . '/' . $row->id_vaga) ?>"
																class="btn btn-info btn-sm">
																<i class="fa fa-eye" aria-hidden="true"></i>   Ver Candidato
															</a>
														</td>

													</tr>
												<?php endforeach; ?>
											<?php endforeach; ?>
										<?php else: {
											echo "<td colspan='5' align = 'center'>
											Você não possui nenhuma candidatura para as suas vagas atualmente...
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

				<div class="sales">


					<!-- -->





					<div class="form-group col-sm-12">
						<span><h3>Meus Voluntários</h3></span>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Vaga</th>
										<th>Voluntário</th>
										<th>Opções</th>
									</tr>
								</thead>
								<tbody id="myTable">
									<?php if (!empty($dadosVagaAtuais)):
										foreach ($dadosVagaAtuais as $row): ?>
										<td>
											<?php echo $row->nome;?>
										</td>
										<td>
											<?php foreach ($candidato as $key): ?>
												<?php echo $key->nome;?>


											</td>
											<td>
												<a  href="<?= site_url('Historico/cadastrarHistorico/' . $row->id_voluntario . '/' . $row->id_vaga) ?>"
													class="btn btn-info btn-sm">
													<i class="fa fa-eye" aria-hidden="true"></i>   Feedback
												</a>
											</td>

										</tr>
									<?php endforeach; ?>
								<?php endforeach; ?>
							<?php else: {
								echo "<td colspan='5' align = 'center'>
								Você não possui nenhum candidato aceito até o momento...
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





</div>

</div>


</div>
</div>
</div>

</body>
</html>
