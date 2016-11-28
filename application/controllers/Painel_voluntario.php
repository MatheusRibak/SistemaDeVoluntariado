<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_voluntario extends MY_ControllerLogado {

	public function index() {

		$id_voluntario = $this->session->userdata('id_voluntario');

		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
		"minhasVagas" => $this->Candidato_model->minhasVagasAtuais(),
		"vagasFinalizadas" =>$this->Candidato_model->minhasVagasFinalizadas());
		$this->load->view('voluntario/cabecalho_voluntario', $data);
		$this->load->view('voluntario/home_voluntario', $data);
	}

	public function carregaPerfilVoluntario() {
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('voluntario/cabecalho_voluntario', $data);
		$this->load->view('voluntario/perfil_voluntario', $data);
	}

	public function carregaFormularioBusca() {
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('voluntario/cabecalho_voluntario', $data);
		$this->load->view('voluntario/procura_vaga', $data);
	}

	public function Atualizar() {

		$data = array();

		$senha = $this->input->post('senha_voluntario');
		$data['nome_voluntario'] = $this->input->post('nome');
		$data['telefone'] = $this->input->post('telefone');
		$data['email'] = $this->input->post('email');

		if($senha == ''){

			$id_voluntario = $this->session->userdata('id_voluntario');
			$dados2 = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
			$this->Voluntario_model->alterar($data);
			redirect('Painel_voluntario/carregaPerfilVoluntario/?aviso=1');

		} else {

			$data['senha'] = md5($this->input->post('senha_voluntario'));
			$this->Voluntario_model->alterar($data);
			redirect('Painel_voluntario/carregaPerfilVoluntario/?aviso=1');

		}


	}

	function deslogar() {
		$this->session->sess_destroy();
		$this->load->view('home');
	}

	public function carregarPerfil() {
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('voluntario/cabecalho_voluntario', $data);
		$this->load->view('voluntario/perfil_voluntario', $data);
	}


	public function NenhumResultado(){
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row());
		$this->load->view('voluntario/cabecalho_voluntario', $data);
		$this->load->view('voluntario/resultado_busca', $data);
	}

	public function getVagas(){

		$teste = $this->input->post('input_busca');

		$this->db->select('*');
		$this->db->like('nome', $this->input->post('input_busca'));
		$this->db->where('ativo', 'SIM');
		$retorno = $this->db->get('vaga')->num_rows();

		if ($retorno == 0) {
			redirect('Painel_voluntario/NenhumResultado/?aviso=2');
		}

		else {
			$id_voluntario = $this->session->userdata('id_voluntario');
			$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
			"dados" => $this->Vaga_model->getVagas($teste));
			$this->load->view('voluntario/cabecalho_voluntario', $data);
			$this->load->view('voluntario/resultado_busca', $data);
		}


	}

	public function vagaCompleta($id_vaga, $id_entidade){

		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
		"dadosVaga" => $this->Vaga_model->getVagaSozinha($id_vaga),
		"dadosEntidade" => $this->Entidade_model->getEntidadeSozinho($id_entidade));
		$this->load->view('voluntario/cabecalho_voluntario', $data);
		$this->load->view('voluntario/vaga_completa', $data);
	}

	public function candidataVaga(){
		$id_voluntario = $this->session->userdata('id_voluntario');

		$id_vaga =  $this->input->post('id_vaga');
		$this->db
		->select("*")
		->from("vaga_candidato")
		->where("id_voluntario", $id_voluntario)
		->where("id_vaga", $id_vaga);

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
			$dias = floor($diferenca / (60 * 60 * 24));

			if ($dias < 2) {
				redirect('Painel_voluntario/index/?aviso=4');
			} else {
				$dados['status_vaga'] = 'Voluntário Desistiu...';
				$data = array(
					"excluir" => $this->Vaga_model->aceitarOuRecusar($id_vaga, $id_voluntario, $dados)
				);
				redirect('Painel_voluntario/index/?aviso=3');
			}

		}
	}

	public function excluirNaoaceita($id_vaga, $id_voluntario){

		$id_voluntario = $this->session->userdata('id_voluntario');

		$data = array(
			"excluir" => $this->Candidato_model->excluirNaoAceita($id_academico, $id_vaga)
		);
		redirect('Painel_voluntario/index/?aviso=3');
	}

	public function carregaHistoricoDeVagas(){
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
		"vagasAceitas" => $this->Candidato_model->minhasVagasAceitas(),
		"vagasRecusadas" => $this->Candidato_model->minhasVagasRecusadas());
		$this->load->view('voluntario/cabecalho_voluntario', $data);
		$this->load->view('voluntario/historico_vagas', $data);
	}

	public function carregaVagaPorArea(){
		$id_voluntario = $this->session->userdata('id_voluntario');
		$data = array("dadosVoluntario" => $this->Voluntario_model->getVoluntario($id_voluntario)->row(),
		"vagaPorAreaUm" => $this->Vaga_model->getPorAreaUm());
		$this->load->view('voluntario/cabecalho_voluntario', $data);
		$this->load->view('voluntario/busca_por_area', $data);
	}




}
