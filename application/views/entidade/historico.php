


<div id="page-wrapper">
  <div class="row">

    <div class="col-lg-12">
      <h2 class="page-header">Histórico</h2>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-sm-12">
      <?php if ($this->input->get('aviso') == 1) { ?>
        <div class="alert alert-success">
          Dados atualizados com sucesso!!!
        </div>
        <?php } ?>
      </div>

      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Informe como o voluntário se saiu...
          </div>
          <div class="panel-body">

            <form action="<?=site_url('Historico/salvarHistorico') ?>" method="post">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">

                    <div class="col-md-2">
                      <br>

                      <label for="">Preencha o historico do voluntario</label>
                    </div>

                    <div class="col-md-10">
                      <textarea name="historico" rows="5" cols="40" class="form-control"></textarea>
                    </div>



                    <input type="hidden" name="id_voluntario" value="	<?php echo $dadosVoluntario->id_voluntario ?>">

                    <?php foreach ($dadosVaga as $key): ?>
                      <input type="hidden" name="id_vaga" value="<?php echo $key->id_vaga ?>">
                    <?php endforeach; ?>


                  </div>
                </div>


              </div>





              <div class="row">

                <div class="col-sm-offset-2 col-sm-10">
                  <div class="form-group">
                    <br>
                    <button type="submit" class="btn btn-primary">
                      CADASTRAR HISTORICO
                    </button>
                  </div>

                </div>
              </div>

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
