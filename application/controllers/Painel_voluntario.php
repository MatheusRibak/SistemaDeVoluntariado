<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_voluntario extends MY_ControllerLogado {

	public function index() {

		$id_voluntario = $this->session->userdata('id_voluntario');

		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());

		$this->load->view('home_voluntario', $data);
	}

	public function carregaPerfilVoluntario() {
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('perfil_voluntario', $data);
	}

	public function Atualizar() {

		$data = array();
		$data['senha'] = md5($this->input->post('senha'));
		$data['nome'] = $this->input->post('nome');
		$data['telefone'] = $this->input->post('telefone');
		$data['email'] = $this->input->post('email');

		$this->Voluntario_model->alterar($data);

		$id_voluntario = $this->session->userdata('id_voluntario');
		$dados2 = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('perfil_voluntario', $dados2);

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

}
