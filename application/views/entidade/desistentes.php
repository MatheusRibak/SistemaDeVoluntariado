


<div id="page-wrapper">
  <div class="row">

    <div class="col-lg-12">
      <h2 class="page-header">Voluntários Desistentes</h2>
    </div>
    <div class="col-lg-12">
      <p>Observe abaixo os voluntários que você tinha aceito e desistiram de comparacer.</p>
      <p>
      <b>Observação:</b>Voluntários que quiserem desistir faltando 2 dias da data de atuação não vai conseguir. Logo recomendamos que informe o acontecido no feedback do mesmo. </p>
      <p><b>Nós recomendamos que caso o voluntário desista faltando 2 dias para a vaga acontecer ele entre em contato com a ONG em questão, mas infelizmente isso não acontece sempre.</b></p>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-sm-12">
      <?php if ($this->input->get('aviso') == 1) { ?>
        <div class="alert alert-success">
          Você aceitou o candidato com sucesso, entre você mesmo em contato com o mesmo!!!
        </div>
        <?php } ?>
        <?php if ($this->input->get('aviso') == 2) { ?>
          <div class="alert alert-success">
            Você recusou o candidato com sucesso!!!
          </div>
          <?php } ?>
          <?php if ($this->input->get('aviso') == 3) { ?>
            <div class="alert alert-success">
              Você cadastrou o historico do voluntário com sucesso!!!
            </div>
            <?php } ?>
          </div>
          <div class="col-xs-12 col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                Voluntários que você aceitou e desistiram de sua vaga...
              </div>
              <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Nome da Vaga</th>
                      <th>Nome do Candidato</th>
                      <th>Data da Vaga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($candidatoDesistente)):
                      foreach ($candidatoDesistente as $row): ?>
                      <td>
                        <?php echo $row->nome;?>
                      </td>
                      <td>
                        <?php echo $row->nome_voluntario;?>
                      </td>
                      <td>
                      <?php
                      echo $row->data_validade; ?></td>


                    </tr>

                  <?php endforeach; ?>
                <?php else: {
                  echo "<td colspan='5' align = 'center'>
                  Nenhum candidato que você aceitou desistiu da sua vaga...
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
