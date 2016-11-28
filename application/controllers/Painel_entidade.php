<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_entidade extends MY_ControllerLogado {

	public function index() {

		$id_entidade = $this->session->userdata('id_entidade');

		$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row(),
		"candidato" => $this->Vaga_model->getCandidato(),
		"candidatoAceito" => $this->Vaga_model->getCandidatoAceito());

		$this->load->view('entidade/cabecalho_entidade', $data);
		$this->load->view('entidade/home_entidade');
	}

	function deslogar() {
		$this->session->sess_destroy();
		$this->load->view('home');
	}

	public function carregaDesistentes(){
			$id_entidade = $this->session->userdata('id_entidade');
			$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row(),
			"candidato" => $this->Vaga_model->getCandidato(),
			"candidatoDesistente" => $this->Vaga_model->getCandidatoAceito());

			$this->load->view('entidade/cabecalho_entidade', $data);
			$this->load->view('entidade/desistentes');
	}

	public function carregarPerfil() {
		$id_entidade = $this->session->userdata('id_entidade');
		$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row());
		$this->load->view('entidade/cabecalho_entidade', $data);
		$this->load->view('entidade/perfil_entidade', $data);
	}

	public function carregarCadastroVaga() {
		$id_entidade = $this->session->userdata('id_entidade');
		$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row());
		$this->load->view('entidade/cabecalho_entidade', $data);
		$this->load->view('entidade/cadastro_vaga', $data);
	}


	public function salvarVaga() {
		$dados_vaga = array();

		$this->Vaga_model->nome = $this->input->post('vaga_nome');
		$this->Vaga_model->area = $this->input->post('vaga_area');
		$this->Vaga_model->descricao = $this->input->post('vaga_descricao');
		$this->Vaga_model->importancia = $this->input->post('vaga_importancia');
		$this->Vaga_model->presencial = $this->input->post('vaga_presencial');
		$this->Vaga_model->estado = $this->input->post('vaga_estado');
		$this->Vaga_model->cidade = $this->input->post('vaga_cidade');
		$this->Vaga_model->id_entidade = $session_id = $this->session->userdata('id_entidade');
		$this->Vaga_model->data_validade = $this->input->post('vaga_data_validade');
		$this->Vaga_model->ativo = 'SIM';

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('vaga_nome', 'Nome', 'required|max_length[120]');
		$this->form_validation->set_rules('vaga_descricao', 'Descrição da vaga', 'required|max_length[1200]');
		$this->form_validation->set_rules('vaga_importancia', 'Importancia da vaga', 'required|max_length[120]');
		$this->form_validation->set_rules('vaga_presencial', 'Informar se a vaga é presencial', 'required|max_length[120]');
		$this->form_validation->set_rules('vaga_area', 'Informar a área para a vaga', 'required|max_length[120]');
		$this->form_validation->set_rules('vaga_estado', 'Estado', 'required|max_length[120]');
		$this->form_validation->set_rules('vaga_cidade', 'Cidade', 'required|max_length[120]');
		$this->form_validation->set_rules('vaga_data_validade', 'Data de Validade', 'required|max_length[120]');

		if ($this->form_validation->run() == FALSE) {
			$this->carregarCadastroVaga();
			return;
		} else {
			$this->Vaga_model->Salvar();
			redirect('Painel_entidade/carregarCadastroVaga/?aviso=1');
		}

	}

	public function finalizarVaga(){

	}

	function Atualizar() {

		$data = array();
		$data['nome'] = $this ->input->post('nome');
		$data['telefone'] = $this->input->post('telefone');
		$data['email'] = $this->input->post('email');
		$data['area_atuacao'] = $this->input->post('area_atuacao');
		$data['rua'] = $this->input->post('rua');
		$data['bairro'] = $this->input->post('bairro');
		$data['numero'] = $this->input->post('numero');
		$data['cidade'] = $this->input->post('cidade');
		$data['uf'] = $this->input->post('uf');
		$data['cep'] = $this->input->post('cep');

		$senha = $this->input->post('senha');

		if($senha == ''){

			$id_entidade = $this->session->userdata('id_entidade');
			$this->Entidade_model->alterar($data);
			redirect('Painel_entidade/carregarPerfil/?aviso=1');
		} else {

			$data['senha'] = md5($this->input->post('senha'));
			$id_entidade = $this->session->userdata('id_entidade');

			$this->Entidade_model->alterar($data);
			redirect('Painel_entidade/carregarPerfil/?aviso=1');
		}

	}

	public function verCandidato($id_voluntario, $id_vaga){
		$id_entidade = $this->session->userdata('id_entidade');
		$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row(),
		"dadosVoluntario" => $this->Vaga_model->getCandidatoSozinho($id_voluntario),
		"dadosVagaAtuais" => $this->Vaga_model->vagaSozinha($id_vaga, $id_voluntario),
		"candidato" => $this->Vaga_model->getCandidato(),
		"historico" => $this->Historico_model->getHistorico($id_voluntario)->result());
		$this->load->view('entidade/cabecalho_entidade', $data);
		$this->load->view('entidade/ver_candidato', $data);
	}


}
