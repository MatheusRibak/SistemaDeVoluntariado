<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vaga extends MY_ControllerLogado {

	public function index() {

		$id_entidade = $this->session->userdata('id_entidade');

		$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row());

		$this->load->view('home_entidade', $data);
	}

  public function carregaMinhasVagas(){
    $id_entidade = $this->session->userdata('id_entidade');
    $data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row(),
    "minhasVagas" => $this->Vaga_model->getVagaEntidadeAtiva(),
    "minhasVagasFinalizadas" => $this->Vaga_model->getVagaEntidadeFinalizada());
    $this->load->view('minhas_vagas', $data);
  }


	public function finalizarVaga($id_vaga, $id_entidade){
    $data = array();
    $data['ativo'] = 'NAO';
		$status = 'Aguardando Resposta';
    $this->db->select('*');
    $this->db->where('id_entidade', $id_entidade);
    $this->db->where('id_vaga', $id_vaga);
    $this->db->where('status_vaga', $status);
    $retorno = $this->db->get('vaga_candidato')->num_rows();
    if ($retorno == 0) {
			$this->Vaga_model->finalizarVaga($data, $id_vaga);
	    redirect('Vaga/carregaMinhasVagas/?aviso=3');
    }
    else {
      redirect('Vaga/carregaMinhasVagas/?aviso=2');
    }
	}

  public function recadastrarVaga($id_vaga, $id_entidade){
    $data = array();
    $data['ativo'] = 'SIM';
    $id_entidade = $this->session->userdata('id_entidade');

    $this->Vaga_model->recadastrarVaga($data, $id_vaga);
    redirect('Vaga/carregaMinhasVagas/?aviso=1');
  }




}
