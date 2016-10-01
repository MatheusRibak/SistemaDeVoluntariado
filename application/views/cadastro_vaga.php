

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li class="">
							<a href="<?=site_url('Painel_entidade/index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class=""> Home</span></a>
						</li>
						<li class="">
							<a href="<?=site_url('Painel_entidade/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i><span class=""> Meu Perfil</span></a>
						</li>
						<li>
							<a href="<?=site_url('Vaga/carregaMinhasVagas')?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span class=""> Minhas Vagas</span></a>
						</li>
						<li class="active">
							<a href="<?=site_url('Painel_entidade/carregarCadastroVaga')?>"><i class="fa fa-plus"  aria-hidden="true"></i><span class=""> Cadastrar Nova Vaga</span></a>
						</li>
					</ul>

				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<h1 class="page-header">Cadastrar nova vaga</h1>

					<?php echo validation_errors(); ?>
					<?php if ($this->input->get('aviso') == 1) { ?>
					<div class="alert alert-success">
						Você cadastrou a sua vaga com sucesso!!!
					</div>
					<?php } ?>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 ">

							<div class="sales ">
								<!-- -->

								<form class="form-horizontal"
								action="<?=site_url('Painel_entidade/salvarVaga')?>" method="post">
									<div class="form-group">
										<label class="col-sm-2">Nome
											<br>
											da Vaga </label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="vaga_nome"
											value="" placeholder="Nome da Vaga" required/>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-2">Urgência</label>
										<div class="col-xs-12 col-sm-9">
											<select class="col-xs-12 col-sm-12 form-control" name="urgencia"
											onchange="trocaUrgencia()" id="listaUrgencia">
												<option value="option">Por favor selecione a
													urgência da vaga</option>
												<option value="option">Muito Importante - Precisamos
													de voluntários urgentemente</option>
												<option value="option">Normal</option>
											</select>
											<input type="hidden" id="vaga_importancia"
											name="vaga_importancia" value="" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2">Vaga presencial</label>
										<div class="col-sm-9">
											<select class="col-xs-12 col-sm-12 form-control" name="presencial"
											onchange="trocaPresencial()" id="presencial">
												<option value="option">Por favor selecione a
													modalidade</option>
												<option value="option">Sim</option>
												<option value="option">Não</option>
											</select>
											<input type="hidden" id="vaga_presencial"
											name="vaga_presencial" value="" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2">Área de Atuação</label>
										<div class="col-sm-9">
											<select class="col-xs-12 col-sm-12 form-control" name="vaga_area">

												<option value="ONG optou por não informar">Não desejo informar</option>
												<option value="Animais">Animais</option>
												<option value="Crianças">Crianças</option>
												<option value="Idosos">Idosos</option>
												<option value="Educação">Educação</option>
												<option value="Meio Ambiente">Meio Ambiente</option>
												<option value="Computação">Computação</option>
												<option value="Politica">Politica</option>
												<option value="Pessoas com necessidades Especiais">Pessoas com necessidades Especiais</option>
												<option value="Comunidade LGBT">Comunidade LGBT</option>
												<option value="Esporte">Esportes</option>
												<option value="Religiões">Religiões</option>
												<option value="Saúde">Saúde</option>
												<option value="Reformas">Reformas</option>
												<option value="Outras Áreas">Outros</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2">Cidade / UF
											<br> </label>

											<div class="col-sm-5">
												<input type="text" class="form-control" name="vaga_cidade"
												value="" placeholder="Cidade" required/>
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="vaga_estado"
												value="" placeholder="Estado" required/>
											</div>


									</div>

									<script type="text/javascript"
									src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>
									<script type="text/javascript">
										window.onload = function() {
											new dgCidadesEstados(document.getElementById('estado'), document.getElementById('cidade'), true);
										}
									</script>

									<div class="form-group">
										<label class="col-sm-2">Descrição da
											<br>
											Vaga </label>
										<div class="col-sm-9">
											<textarea name="vaga_descricao" value=""
                              											placeholder="Descreva o que o voluntário vai ter que fazer, seja o mais detalhista possível..."
                              											class="form-control" rows="3"></textarea>


										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2"> Data Em que a Vaga vai acontecer</label>
										<div class="col-sm-9">

											<input type="text" name="vaga_data_validade" class="form-control data" value="" placeholder="00-00-0000">

										</div>
									</div>

									<div class="form-group">

										<label class="col-sm-2"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-primary">
												CADASTRAR VAGA <span class="glyphicon glyphicon-ok"></span>
											</button>
										</div>

									</div>

								</form>

							</div>

						</div>

					</div>

				</div>
			</div>
		</div>
		<script type="text/javascript">
																						$('.data').mask('00-00-0000');
</script>
	</body>
</html>
