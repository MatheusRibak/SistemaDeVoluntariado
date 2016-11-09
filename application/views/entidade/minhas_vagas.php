


<div id="page-wrapper">
  <div class="row">

    <div class="col-lg-12">
      <h2 class="page-header">Vagas ativas e finalizadas</h2>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-sm-12">
      <?php if ($this->input->get('aviso') == 1) { ?>
        <div class="alert alert-success">
          Você recadastrou a vaga com sucesso!
        </div>
        <?php } ?>
        <?php if ($this->input->get('aviso') == 2) { ?>
          <div class="alert alert-danger">
            Está vaga possui voluntários que se candidataram a mesma. Você não pode exclui-la!!!
          </div>
          <?php } ?>
          <?php if ($this->input->get('aviso') == 3) { ?>
            <div class="alert alert-success">
              Você finalizou a vaga com sucesso!!!
            </div>
            <?php } ?>
          </div>
          <div class="col-xs-12 col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                Minhas Vagas Ativas
              </div>
              <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Descrição</th>
                      <th>Opções</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($minhasVagas)):
                      foreach ($minhasVagas as $row): ?>
                      <td>
                        <?php echo $row->nome;?>
                      </td>
                      <td>
                        <?php echo $row->descricao;?>
                      </td>
                      <td>
                        <a  href="<?= site_url('Vaga/finalizarVaga/' . $row->id_vaga) ?>"
                          class="btn btn-danger btn-sm "
                          onclick="return confirm('Têm certeza que deseja finalizar esta vaga?')">
                          <i class="fa fa-trash-o" aria-hidden="true"></i>   Finalizar Vaga
                        </a>

                      </td>



                    </tr>
                  <?php endforeach; ?>
                <?php else: {
                  echo "<td colspan='5' align = 'center'>
                  Você não tem nenhuma vaga ativa atualmente..
                  </td>";
                } ?>
              <?php	endif; ?>
            </tbody>
          </table>


        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          Minhas Vagas Finalizadas
        </div>
        <div class="panel-body">
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Opções</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($minhasVagasFinalizadas)):
                foreach ($minhasVagasFinalizadas as $row): ?>
                <td>
                  <?php echo $row->nome;?>
                </td>
                <td>
                  <?php echo $row->descricao;?>
                </td>
                <td>
                  <a  href="<?= site_url('Vaga/recadastrarVaga/' . $row->id_vaga . '/' . $row->id_entidade ) ?>"
                    class="btn btn-success btn-sm"
                    >
                    <i class="fa fa-check" aria-hidden="true"></i>   Recadastrar Vaga
                  </a>
                </td>

              </tr>
            <?php endforeach; ?>
          <?php else: {
            echo "<td colspan='5' align = 'center'>
            Você não tem nenhuma vaga finalizada atualmente..
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
