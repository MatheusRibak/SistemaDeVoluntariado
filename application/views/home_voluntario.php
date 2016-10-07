


<div id="page-wrapper">
  <div class="row">

    <div class="col-lg-12">
      <h2 class="page-header">Seja bem-vindo: <?php echo $dadosVoluntario->nome ?></h2>
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
                Candidaturas Atuais
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
                    <?php if (!empty($minhasVagas)):
                      foreach ($minhasVagas as $row): ?>
                      <tr class="odd gradeX">
                        <td>
                          <?php echo $row->nome;?>
                        </td>
                        <td>
                          <?php echo $row->status_vaga;?>
                        </td>
                        <td>
                          <a  href="<?= site_url('Painel_voluntario/excluirNaoaceita/' . $row->id_vaga . '/' . $row->id_voluntario ) ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Têm certeza que deseja excluir esta informação?')">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>   Excluir Candidatura
                          </a>
                        </td>

                      </tr>
                    <?php endforeach; ?>
                  <?php else: {
                    echo "<td colspan='5' align = 'center'>
                    Você não tem nenhuma vaga atual..
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
