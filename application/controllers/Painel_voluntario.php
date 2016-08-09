<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Painel_voluntario extends MY_ControllerLogado {

    public function index() {


      //  $this->load->view('home_voluntario');
    }


  function deslogar(){
    $this->session->sess_destroy();
    $this->load->view('home');

}





}
