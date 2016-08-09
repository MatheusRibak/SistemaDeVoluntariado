<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Painel_entidade extends MY_ControllerLogado {

    public function index() {


        $id_entidade = $this->session->userdata('id_entidade');

      $data = array(
           "dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row()
       );

        $this->load->view('home_entidade', $data);
    }


  function deslogar(){
    $this->session->sess_destroy();
    $this->load->view('home');

}





}
