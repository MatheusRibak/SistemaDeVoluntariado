


<div id="page-wrapper">
  <div class="row">

    <div class="col-lg-12">
      <h1 class="page-header">Vagas na sua área de interesse</h1>
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
          <div class="col-xs-12 col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <b>Área: </b>			<?php echo $dadosVoluntario->atuacao_um; ?>
              </div>
              <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Status</th>
                      <th>Opções</th>
                    </tr>
                  </thead>
                  <tbody>
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


        </div>
      </div>





      <!-- /.panel -->
    </div>
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
