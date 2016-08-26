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

	public function carregaFormularioBusca() {
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('procura_vaga', $data);
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
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('perfil_voluntario', $data);
	}


	public function gambiarra(){
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('resultado_busca', $data);


	}
	public function getVagas(){

		$teste = $this->input->post('input_busca');



		$this->db->select('*');
		$this->db->like('nome', $this->input->post('input_busca'));
		$retorno = $this->db->get('vaga')->num_rows();


		if ($retorno == 0) {
			redirect('Painel_voluntario/gambiarra/?aviso=2');
		}

		else {
			$id_voluntario = $this->session->userdata('id_voluntario');
			$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
			"dados" => $this->Vaga_model->getVagas($teste));

			$this->load->view('resultado_busca', $data);
		}


}

		public function vagaCompleta($id_vaga, $id_entidade){

		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
		"dadosVaga" => $this->Vaga_model->getVagaSozinha($id_vaga),
		"dadosEntidade" => $this->Entidade_model->getEntidadeSozinho($id_entidade));

		$this->load->view('vaga_completa', $data);

		}


}
