<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_entidade extends MY_ControllerLogado {

	public function index() {

		$id_entidade = $this->session->userdata('id_entidade');

		$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row());

		$this->load->view('home_entidade', $data);
	}

	function deslogar() {
		$this->session->sess_destroy();
		$this->load->view('home');

	}

	public function carregarPerfil() {
		$id_entidade = $this->session->userdata('id_entidade');
		$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row());
		$this->load->view('perfil_entidade', $data);
	}

	public function carregarCadastroVaga() {
		$id_entidade = $this->session->userdata('id_entidade');
		$data = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row());
		$this->load->view('cadastro_vaga', $data);
	}

	public function salvarVaga() {
		$dados_vaga = array();

		$this->Vaga_model->nome = $this->input->post('vaga_nome');
		$this->Vaga_model->quantidade_pessoa = $this->input->post('vaga_quantidade_pessoa');
		$this->Vaga_model->descricao = $this->input->post('vaga_descricao');
		$this->Vaga_model->quantidade_vaga = $this->input->post('vaga_quantidade');
		$this->Vaga_model->importancia = $this->input->post('vaga_importancia');
		$this->Vaga_model->presencial = $this->input->post('vaga_presencial');
		$this->Vaga_model->estado = $this->input->post('vaga_estado');
		$this->Vaga_model->cidade = $this->input->post('vaga_cidade');
		$this->Vaga_model->id_entidade = $session_id = $this->session->userdata('id_entidade');
		$this->Vaga_model->data_validade = $this->input->post('vaga_data_validade');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('vaga_nome', 'Nome', 'required|max_length[120]');
		$this->form_validation->set_rules('vaga_descricao', 'Descrição da vaga', 'required|max_length[120]');
		$this->form_validation->set_rules('vaga_importancia', 'Importancia da vaga', 'required|max_length[120]');
		$this->form_validation->set_rules('vaga_presencial', 'Informar se a vaga é presencial', 'required|max_length[120]');
		$this->form_validation->set_rules('vaga_quantidade_pessoa', 'Informar a quantidade de pessoas', 'required|max_length[5]');
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

	function Atualizar() {

		$data = array();
		$data['senha'] = md5($this->input->post('senha'));
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

		$this->Entidade_model->alterar($data);

		$id_entidade = $this->session->userdata('id_entidade');
		$dados2 = array("dadosEntidade" => $this->Entidade_model->getEntidade($id_entidade)->row());
		$this->load->view('perfil_entidade', $dados2);

	}

}
