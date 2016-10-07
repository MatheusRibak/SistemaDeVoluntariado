


<div id="page-wrapper">
  <div class="row">

    <div class="col-lg-12">
      <h1 class="page-header">Dados da Vaga</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
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

          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                Observe os dados da vaga que você foi aceito...
              </div>
              <div class="panel-body">
                <?php foreach ($dadosVaga as $row): ?>

                  <div class="col-md-5">
                    <strong> <i class="fa fa-star"></i> Vaga com o nome: </strong> <?php echo $row->nome ?>

                  </div>
                  <div class="col-md-4">
                    <strong><i class="fa fa-calendar"></i> Data em que vai acontecer: </strong><?php echo $row->data_validade ?>
                    <br>
                    <br>
                  </div>


                  <div class="col-md-12">
                    <strong><i class="fa fa-th-list"></i> Descrição da vaga: </strong><?php echo $row->descricao ?>
                    <br><br>
                  </div>


                  <div class="col-md-5">
                    <strong><i class="fa fa-suitcase"></i> Área: </strong><?php echo $row->area?>
                    <br>
                    <br>
                  </div>

                  <div class="col-md-5">
                    <strong><i class="fa fa-suitcase"></i> Local: </strong><?php echo $row->estado?> / <?php echo $row->cidade?>
                    <br>
                    <br>
                  </div>


                <?php endforeach; ?>
                <div class="col-md-12">
                  <?php foreach ($dadosEntidade as $entidade): ?>
                    <h4 class="page-header">Dados da ONG</h4>

                  </div>

                  <div class="col-md-5">
                    <strong> <i class="fa fa-suitcase"></i> Nome: </strong><?php echo $entidade->nome ?>



                  </div>
                  <div class="col-md-4">
                    <strong>	<i class="fa fa-envelope" aria-hidden="true"></i> E-mail: </strong><?php echo $entidade->email ?>

                    <br>
                    <br>

                  </div>
                  <div class="col-md-5">
                    <strong>	<i class="fa fa-phone" aria-hidden="true"></i> Telefone: </strong><?php echo $entidade->telefone ?>



                  </div>

                <?php endforeach; ?>


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
