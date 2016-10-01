

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li>
							<a href="<?=site_url('Painel_voluntario/Index')?>"><i class="fa fa-home" aria-hidden="true"></i><span> Home</span></a>
						</li>
						<li class="active">
							<a href="<?=site_url('Painel_voluntario/carregaPerfilVoluntario')?>"><i class="fa fa-user" aria-hidden="true"></i><span> Meu Perfil</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_voluntario/carregaFormularioBusca')?>"><i class="fa fa-search" aria-hidden="true"></i><span> Procurar Vaga</span></a>
						</li>
						<li>
							<a href="<?=site_url('Painel_voluntario/carregaHistoricoDeVagas')?>"><i class="fa fa-search" aria-hidden="true"></i><span class=""> Historico de Vagas</span></a>
						</li>

					</ul>

				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<h1 class="page-header">Meu Perfil</h1>
					<div class="row">
						<div class="col-sm-12  col-xs-12 ">

							<div class="sales">
								<!-- -->

								<form action="<?=site_url('Painel_voluntario/atualizar')?>" method="post">
									<div class="row">

										<div class="col-sm-12">
											<div class="form-group col-sm-6">
												<label for="exampleInputEmail1">Nome</label>
												<input
												type="text" class="form-control" name="nome"
												placeholder="Nome" value="<?php echo $dadosVoluntario->nome ?>"  />
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Telefone</label>
													<input type="tel" class="form-control"
													name="telefone" placeholder="telefone"
													value="<?php echo $dadosVoluntario->telefone ?>" required/>
												</div>
											</div>
											<input type="hidden" name="email" value="<?php echo $dadosVoluntario->email ?>">
										</div>

										<div class="col-sm-12">
											<div class="form-group col-sm-6">
												<label for="exampleInputEmail1">Email</label>
												<input
												type="email" class="form-control" name=""
												placeholder="Email" value="<?php echo $dadosVoluntario->email ?>" disabled  />
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>Senha</label>
													<input type="password" class="form-control"
													name="senha_voluntario" placeholder="senha"
													value="" />
												</div>
											</div>

										</div>

									</div>

									<button type="submit" class="btn btn-primary pull-right">
										SALVAR
										ALTERAÇÕES
									</button>

								</form>
							</div>

						</div>

					</div>

				</div>
			</div>
		</div>

	</body>
</html>
