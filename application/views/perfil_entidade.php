

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li class="">
							<a href="<?=site_url('Painel_entidade/index')?>"><i class="fa fa-home" aria-hidden="true"></i><span class=""> Home</span></a>
						</li>
						<li class="active">
							<a href="<?=site_url('Painel_entidade/carregarPerfil')?>"><i class="fa fa-user" aria-hidden="true"></i><span class=""> Meu Perfil</span></a>
						</li>
						<li>
							<a href="<?=site_url('Vaga/carregaMinhasVagas')?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span class=""> Minhas Vagas</span></a>
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
							Dados atualizados com sucesso!!!
						</div>
						<?php } ?>

					</div>
					<h1 class="page-header">Meu Perfil</h1>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 ">

							<div class="sales">
								<!-- -->

								<form action="<?=site_url('Painel_entidade/atualizar') ?>" method="post">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Entidade</label>

												<input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $dadosEntidade->nome ?>" />

											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputEmail1">Email</label>
												<input
												type="email" class="form-control" name=""
												placeholder="Email" value="<?php echo $dadosEntidade->email ?>" disabled  />
											</div>
											<input type="hidden" name="email" value="<?php echo $dadosEntidade->email ?>">
										</div>

									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Senha</label>
												<input type="password" class="form-control"
												name="senha" placeholder="Senha"
												/>
											</div>
										</div>
										<div class="form-group col-md-6">
											<label>telefone</label>
											<input type="text"
											class="form-control" name="telefone"
											placeholder="Telefone"
											value="<?php echo $dadosEntidade->telefone ?>" required>
										</div>

									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Rua</label>
												<input type="text" class="form-control"
												name="rua" placeholder="Rua"
												value="<?php echo $dadosEntidade->rua ?>" required>
											</div>
										</div>
										<div class="form-group col-md-4">
											<label>Bairro</label>
											<input type="text"
											class="form-control" name="bairro"
											placeholder="Bairro"
											value="<?php echo $dadosEntidade->bairro ?>" required>
										</div>
										<div class="form-group col-md-2">
											<label>Nº</label>
											<input type="text" class="form-control"
											name="numero" placeholder="Nº"
											value="<?php echo $dadosEntidade->numero ?>" required>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Cidade</label>
												<input type="text"
												class="form-control" name="cidade"
												placeholder="Cidade"
												value="<?php echo $dadosEntidade->cidade ?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>UF</label>
												<input type="text" class="form-control"
												name="uf" placeholder="Unidade Federativa"
												value="<?php echo $dadosEntidade->uf ?>" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>CEP</label>
												<input type="text" class="form-control"
												name="cep" placeholder="CEP"
												value="<?php echo $dadosEntidade->cep ?>" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-8">
											<div class="form-group">
												<label>Area de atuação</label>
												<select class="form-control" name="atuacao_um" value="">
													<option value="<?php echo $dadosEntidade->area_atuacao ?>"><?php echo $dadosEntidade->area_atuacao ?></option>
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
										<div class="col-sm-4">
											<div class="form-group">
												<br>
												<button type="submit" class="btn btn-primary pull-right">
													SALVAR
													ALTERAÇÕES
												</button>
											</div>

										</div>
									</div>

								</form>
							</div>

						</div>

					</div>

				</div>
			</div>
		</div>

	</body>
</html>
