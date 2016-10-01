
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li class="">
							<a href="<?=site_url('Painel_entidade/index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Home</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_entidade/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Meu Perfil</span></a>
						</li>
						<li>
							<a href="<?=site_url('Vaga/carregaMinhasVagas')?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Minhas Vagas</span></a>
						</li>
						<li class="">
							<a href="<?=site_url('Painel_entidade/carregarCadastroVaga')?>"><i class="fa fa-plus"  aria-hidden="true"></i><span class="hidden-xs hidden-sm"> Cadastrar Nova Vaga</span></a>
						</li>
					</ul>

				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<div class="col-sm-12">
						<?php if ($this->input->get('aviso') == 1) { ?>
						<div class="alert alert-success">
							Dados atualizados com sucesso!!!
						</div>
						<?php } ?>

					</div>
					<h1 class="page-header">Dados do Candidato</h1>
					<div class="row">
						<div class="col-md-12 col-sm-5 col-xs-12 ">

							<div class="sales">
								<!-- -->

								<form action="<?=site_url('Painel_entidade/atualizar') ?>" method="post">
                  <?php foreach ($dadosVoluntario as $key): ?>


									<div class="row">
										<div class="col-md-6">
												<strong> <i class="fa fa-user"></i> Voluntário com o nome: </strong> <?php echo $key->nome ?>

										</div>
										<div class="col-md-6">
										<strong>	<i class="fa fa-phone" aria-hidden="true"></i> Telefone: </strong><?php echo $key->telefone ?>

<br><br>

										</div>
										<div class="col-md-4">
										<strong>	<i class="fa fa-envelope" aria-hidden="true"></i> E-mail: </strong><?php echo $key->email ?>



										</div>



                    <div class="form-group col-sm-12">
                              <span><h3>Comentários de Outras ONGs</h3></span>
                      <div class="table-responsive">
      <table class="table">
      <thead>
          <tr>
              <th>Comentário</th>

          </tr>
      </thead>
      <tbody id="myTable">
      <?php if (!empty($dadosHistorico)):
         foreach ($dadosHistorico as $row): ?>
                  <td>
                    <?php echo $row->comentario;?>
                  </td>



            </tr>

                  <?php endforeach; ?>
                <?php else: {
                  echo "<td colspan='5' align = 'center'>
                  Este voluntário ainda não tem nehum comentário...
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

                    <div class="col-md-12">
                      <div class="form-group ">
                        <label for="">Opções:</label>
												<?php foreach ($dadosVagaAtuais as $teste): ?>



                        <a  href="<?=site_url('Vaga/recusarCandidato' . '/' . $teste->id_vaga . '/' . $teste->id_voluntario) ?>"
  												class="btn btn-danger btn-md" 	onclick="return confirm('Têm certeza que deseja recusar este candidato?')">
  													<i class="fa fa-times"  aria-hidden="true"></i> Recusar Candidato
  											</a>
                        <a  href="<?=site_url('Vaga/aceitarCandidato' . '/' . $teste->id_vaga . '/' . $teste->id_voluntario) ?>"
  												class="btn btn-info btn-md">
  													<i class="fa fa-check" aria-hidden="true"></i> Aceitar Candidato
  											</a>
												<?php endforeach; ?>
                    </div>
                      </div>

									</div>





<?php endforeach; ?>
								</form>
							</div>

						</div>

					</div>

				</div>
			</div>
		</div>

	</body>
</html>
