


<div id="page-wrapper">
  <div class="row">

    <div class="col-lg-12">
      <h1 class="page-header">Meu Perfil</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-sm-12">
      <?php if ($this->input->get('aviso') == 1) { ?>
        <div class="alert alert-success">
          Você alterou o seu perfil com sucesso!!!
        </div>
        <?php } ?>
          </div>

          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                Edite seu Perfil
              </div>
              <div class="panel-body">
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
          <!-- /.col-lg-4 -->

          <!-- /.col-lg-4 -->

          <!-- /.col-lg-4 -->

          <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- /.row -->

        <!-- /.row -->

        <!-- /.row -->
      </div>
      <!-- /#page-wrapper -->




      <!-- Page-Level Demo Scripts - Tables - Use for reference -->
      <script>
      $(document).ready(function() {
        $('#dataTables-example').DataTable({
          responsive: true
        });
      });
      </script>

    </body>

    </html>
