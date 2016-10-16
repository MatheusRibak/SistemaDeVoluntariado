


<div id="page-wrapper">
  <div class="row">

    <div class="col-lg-12">
      <h2 class="page-header">Seja bem-vindo: <?php echo $dadosEntidade->nome ?></h2>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-sm-12">
      <?php if ($this->input->get('aviso') == 1) { ?>
        <div class="alert alert-success">
          Você aceitou o candidato com sucesso, o mesmo já recebeu um email avisando sobre isso, ou entre você mesmo em contato com o mesmo!!!
        </div>
        <?php } ?>
        <?php if ($this->input->get('aviso') == 2) { ?>
          <div class="alert alert-success">
            Você recusou o candidato com sucesso!!!
          </div>
          <?php } ?>
        </div>
        <div class="col-xs-12 col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              Candidaturas Para as minhas Vagas
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
                  <?php if (!empty($dadosVagaAtuais)):
                    foreach ($dadosVagaAtuais as $row): ?>
                    <td>
                      <?php echo $row->nome;?>
                    </td>
                    <td>
                      <?php foreach ($candidato as $key): ?>
                        <?php echo $key->nome;?>


                      </td>
                      <td>
                        <a  href="<?= site_url('Painel_entidade/verCandidato/' . $row->id_voluntario . '/' . $row->id_vaga) ?>"
                          class="btn btn-info btn-sm">
                          <i class="fa fa-eye" aria-hidden="true"></i>   Ver Candidato
                        </a>
                      </td>

                    </tr>
                  <?php endforeach; ?>
                <?php endforeach; ?>
              <?php else: {
                echo "<td colspan='5' align = 'center'>
                Você não possui nenhuma candidatura para as suas vagas atualmente...
                </td>";
              } ?>
            <?php	endif; ?>
          </tbody>
        </table>


      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        Meus Voluntários
      </div>
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example2">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Status</th>
              <th>Opções</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($dadosVagaAtuais)):
              foreach ($dadosVagaAtuais as $row): ?>
              <td>
                <?php echo $row->nome;?>
              </td>
              <td>
                <?php foreach ($candidato as $key): ?>
                  <?php echo $key->nome;?>


                </td>
                <td>
                  <a  href="<?= site_url('Historico/cadastrarHistorico/' . $row->id_voluntario . '/' . $row->id_vaga) ?>"
                    class="btn btn-info btn-sm">
                    <i class="fa fa-eye" aria-hidden="true"></i>   Feedback
                  </a>
                </td>

              </tr>
            <?php endforeach; ?>
          <?php endforeach; ?>
        <?php else: {
          echo "<td colspan='5' align = 'center'>
          Você não possui nenhum candidato aceito até o momento...
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

<script>
$(document).ready(function() {
  $('#dataTables-example2').DataTable({
    responsive: true
  });
});
</script>

</body>

</html>
