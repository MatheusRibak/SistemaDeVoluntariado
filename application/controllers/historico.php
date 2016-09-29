<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Historico extends MY_ControllerLogado {

	public function index() {

		$id_entidade = $this->session->userdata('id_entidade');

		$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row());

		$this->load->view('home_entidade', $data);
	}

  public function cadastrarHistorico($id_voluntario){

    $this->db->select("*")
    ->from("voluntario")
    ->where("id_voluntario", $id_voluntario);

    $teste = $query = $this->db->get()->row();
    $id_entidade = $this->session->userdata('id_entidade');

    $data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row());

    $this->load->view('historico', $data, $teste);
  }

  public function salvarHistorico(){
    
  }



}
