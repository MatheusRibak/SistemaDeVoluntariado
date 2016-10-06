<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_voluntario extends MY_ControllerLogado {

	public function index() {

		$id_voluntario = $this->session->userdata('id_voluntario');

		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
		"minhasVagas" => $this->Candidato_model->minhasVagasAtuais(),
		"vagasFinalizadas" =>$this->Candidato_model->minhasVagasFinalizadas());
		$this->load->view('cabecalho_voluntario', $data);
		$this->load->view('home_voluntario', $data);
	}

	public function carregaPerfilVoluntario() {
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('cabecalho_voluntario', $data);
		$this->load->view('perfil_voluntario', $data);
	}

	public function carregaFormularioBusca() {
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('cabecalho_voluntario', $data);
		$this->load->view('procura_vaga', $data);
	}

	public function Atualizar() {

		$data = array();

		$senha = $this->input->post('senha_voluntario');
		$data['nome'] = $this->input->post('nome');
		$data['telefone'] = $this->input->post('telefone');
		$data['email'] = $this->input->post('email');

		if($senha == ''){

			$id_voluntario = $this->session->userdata('id_voluntario');
			$dados2 = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
			$this->Voluntario_model->alterar($data);
			$this->carregaPerfilVoluntario();

		} else {

			$data['senha'] = md5($this->input->post('senha_voluntario'));
			$this->Voluntario_model->alterar($data);
			$this->carregaPerfilVoluntario();

		}


	}

	function deslogar() {
		$this->session->sess_destroy();
		$this->load->view('home');
	}

	public function carregarPerfil() {
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('cabecalho_voluntario', $data);
		$this->load->view('perfil_voluntario', $data);
	}


	public function gambiarra(){
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('cabecalho_voluntario', $data);
		$this->load->view('resultado_busca', $data);
	}

	public function getVagas(){

		$teste = $this->input->post('input_busca');

		$this->db->select('*');
		$this->db->like('nome', $this->input->post('input_busca'));
		$this->db->where('ativo', 'SIM');
		$retorno = $this->db->get('vaga')->num_rows();

		if ($retorno == 0) {
			redirect('Painel_voluntario/gambiarra/?aviso=2');
		}

		else {
			$id_voluntario = $this->session->userdata('id_voluntario');
			$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
			"dados" => $this->Vaga_model->getVagas($teste));
			$this->load->view('cabecalho_voluntario', $data);
			$this->load->view('resultado_busca', $data);
		}


	}

	public function vagaCompleta($id_vaga, $id_entidade){

		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
		"dadosVaga" => $this->Vaga_model->getVagaSozinha($id_vaga),
		"dadosEntidade" => $this->Entidade_model->getEntidadeSozinho($id_entidade));
		$this->load->view('cabecalho_voluntario', $data);
		$this->load->view('vaga_completa', $data);
	}

	public function candidataVaga(){
		$id_voluntario = $this->session->userdata('id_voluntario');

		$id_vaga =  $this->input->post('id_vaga');
		$aguardando = "Aguardando Reposta";
		$this->db
		->select("*")
		->from("vaga_candidato")
		->where("id_voluntario", $id_voluntario)
		->where("id_vaga", $id_vaga)
		->where("status_vaga", $aguardando);

		$dadosCandidato = $this->db->get();

		if ($dadosCandidato->num_rows() > 0) {
			redirect('Painel_voluntario/carregaFormularioBusca/?aviso=5');
		}else {
			$data = array();

			$this->Candidato_model->id_entidade = $this->input->post('id_entidade');
			$this->Candidato_model->id_vaga = $this->input->post('id_vaga');
			$this->Candidato_model->id_voluntario = $this->session->userdata('id_voluntario');
			$this->Candidato_model->status_vaga = 'Aguardando Reposta';
			$this->Candidato_model->Salvar();

			redirect('Painel_voluntario/index/?aviso=2');
		}


	}

	public function excluir($id_vaga, $id_voluntario){

		$id_voluntario = $this->session->userdata('id_voluntario');
		$data_atual = date('d-m-Y');

		echo $data_atual;

		$this->db->select('data_validade')
		->from('vaga')
		->where('id_vaga', $id_vaga);

		$teste = $this->db->get()->result();

		foreach ($teste as $row) {
			$data_validade = $row->data_validade;
			echo $data_validade;

			$diferenca = strtotime($data_validade) - strtotime($data_atual);
			$dias = floor($diferenca / (60 * 60 * 24)); echo "A diferença é de $dias entre as datas";

			if ($dias < 2) {
				redirect('Painel_voluntario/index/?aviso=4');
			} else {
				$data = array(
					"excluir" => $this->Candidato_model->excluir($id_academico, $id_vaga)
				);
				redirect('Painel_voluntario/index/?aviso=3');
			}

		}
	}

	public function excluirNaoaceita($id_vaga, $id_voluntario){

		$id_voluntario = $this->session->userdata('id_voluntario');

		$data = array(
			"excluir" => $this->Candidato_model->excluir($id_academico, $id_vaga)
		);
		redirect('Painel_voluntario/index/?aviso=3');
	}

	public function carregaHistoricoDeVagas(){
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
		"vagasAceitas" => $this->Candidato_model->minhasVagasAceitas(),
		"vagasRecusadas" => $this->Candidato_model->minhasVagasRecusadas());
		$this->load->view('cabecalho_voluntario', $data);
		$this->load->view('historico_vagas', $data);
	}

	public function carregaVagaPorArea(){
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
		"vagaPorAreaUm" => $this->Vaga_model->getPorAreaUm(),
		"vagaPorAreaDois" =>$this->Vaga_model->getPorAreaDois());
		$this->load->view('cabecalho_voluntario', $data);
		$this->load->view('busca_por_area', $data);
	}




}
