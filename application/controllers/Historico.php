<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Historico extends MY_ControllerLogado {

	public function index() {

		$id_entidade = $this->session->userdata('id_entidade');
		$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row());
		$this->load->view('home_entidade', $data);
	}

	public function cadastrarHistorico($id_voluntario, $id_vaga){

		$this->db->select("*")
		->from("voluntario")
		->where("id_voluntario", $id_voluntario);

		$teste = $query = $this->db->get()->row();
		$id_entidade = $this->session->userdata('id_entidade');

		$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row(),
		"dadosVoluntario" => $this->Historico_model->getVoluntario($id_voluntario)->row(),
		"dadosVaga" => $this->Vaga_model->getVagaSozinha($id_vaga));

		$this->load->view('entidade/cabecalho_entidade', $data);
		$this->load->view('entidade/historico', $data);
	}

	public function salvarHistorico(){
		$data = array();
		$this->Historico_model->id_voluntario =  $this->input->post('id_voluntario');
		$this->Historico_model->historico = $this->input->post('historico');
		$this->Historico_model->id_entidade = $this->session->userdata('id_entidade');
		$this->Historico_model->id_vaga = $this->input->post('id_vaga');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('historico', 'Historico', 'required|max_length[120]');

		if ($this->form_validation->run() == FALSE) {
			$this->carregarCadastroVaga();
			return;
		} else {
			$this->Historico_model->Salvar($data);
			redirect('Painel_entidade/index/?aviso=3');
		}
	}



}
