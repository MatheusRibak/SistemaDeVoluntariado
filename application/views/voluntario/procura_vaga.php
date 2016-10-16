


<div id="page-wrapper">
  <div class="row">

    <div class="col-lg-12">
      <h1 class="page-header">Procurar Vaga</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-sm-12">
      <?php if ($this->input->get('aviso') == 5) { ?>
        <div class="alert alert-danger">
          Você já se candidatou a essa vaga anteriormente!!!
        </div>
        <?php } ?>
      </div>

      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Procurar Vaga
          </div>
          <div class="panel-body">
            <form action="<?=site_url('Painel_voluntario/getVagas')?>" method="post">
              <div class="row">



                <div class="col-sm-12">
                  <div class="form-group col-sm-12">
                    <label for="">Por favor digite algo referente a vaga que deseja pesquisar...</label>
                    <br>	<input
                    type="text" class="form-control" name="input_busca"
                    placeholder="Procurar vaga" value=""   />
                  </div>


                </div>

              </div>
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-search"></i>		PROCURAR VAGA
                </button>
              </div>



            </form>
          </div>

        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            Resultados de sua busca...
          </div>
          <div class="panel-body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Área</th>
                  <th>Presencial?</th>
                  <th>Vaga Completa</th>
                </tr>
              </thead>
              <tbody>
                <td colspan="5" align = "center">
                  Você ainda não pesquisou nada...
                </td>
              </tbody>
            </table>


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
