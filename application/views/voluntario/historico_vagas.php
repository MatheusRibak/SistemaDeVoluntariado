


<div id="page-wrapper">
  <div class="row">

    <div class="col-lg-12">
      <h1 class="page-header">Histórico de suas Vagas</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-sm-12">
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
                Vagas Aceitas
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
                    <?php if (!empty($vagasAceitas)):
                      foreach ($vagasAceitas as $row): ?>
                      <td>
                        <?php echo $row->nome;?>
                      </td>
                      <td>
                        <?php echo $row->status_vaga;?>
                      </td>

                      <td>
                        <a  href="<?= site_url('Painel_voluntario/excluir/' . $row->id_vaga . '/' . $row->id_voluntario ) ?>"
                          class="btn btn-danger btn-sm"
                          onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
                          <i class="fa fa-trash-o" aria-hidden="true"></i>   Não vou conseguir ir
                        </a>
                        <a  href="<?= site_url('Vaga/verAceita/' . $row->id_vaga . '/' . $row->id_entidade) ?>"
                          class="btn btn-info btn-sm">
                          <i class="fa fa-trash-o" aria-hidden="true"></i>   Ver Detalhes
                        </a>
                      </td>

                    </tr>
                  <?php endforeach; ?>
                <?php else: {
                  echo "<td colspan='5' align = 'center'>
                  Você não tem nenhuma vaga aceita atualmente...
                  </td>";
                } ?>
              <?php	endif; ?>
            </tbody>
          </table>


        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          Vagas Recusadas
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
              <?php if (!empty($vagasRecusadas)):
                foreach ($vagasRecusadas as $row): ?>
                <td>
                  <?php echo $row->nome;?>
                </td>
                <td>
                  <?php echo $row->status_vaga;?>
                </td>



              <?php endforeach; ?>
            <?php else: {
              echo "<td colspan='5' align = 'center'>
              Você não tem nenhuma vaga recusada..
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
