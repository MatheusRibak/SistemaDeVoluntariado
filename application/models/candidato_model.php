<?php

class Candidato_model extends CI_Model {

	public $id_voluntario;
	public $id_vaga;
	public $id_entidade;
	public $status_vaga;

	function __construct() {
		parent::__construct();
	}

	public function Salvar() {
		return $this->db->insert('vaga_candidato', $this);
	}

	public function minhasVagasAtuais(){
		$status = 'Aguardando Reposta';
		$id_voluntario = $this->session->userdata('id_voluntario');
		$this->db
		->select("*")
		->from("vaga")
		->join('vaga_candidato', 'vaga.id_vaga = vaga_candidato.id_vaga')
		->where('id_voluntario', $id_voluntario)
		->where('status_vaga', $status);
		return $query = $this->db->get()->result();
	}

	public function minhasVagasAceitas(){
		$status = 'Aceito';
		$id_voluntario = $this->session->userdata('id_voluntario');
		$this->db
		->select("*")
		->from("vaga")
		->join('vaga_candidato', 'vaga.id_vaga = vaga_candidato.id_vaga')
		->where('id_voluntario', $id_voluntario)
		->where('status_vaga', $status);
		return $query = $this->db->get()->result();
	}

	public function minhasVagasFinalizadas(){
		$status = 'Finalizada';
		$id_voluntario = $this->session->userdata('id_voluntario');
		$this->db
		->select("*")
		->from("vaga")
		->join('vaga_candidato', 'vaga.id_vaga = vaga_candidato.id_vaga')
		->where('id_voluntario', $id_voluntario)
		->where('status_vaga', $status);
		return $query = $this->db->get()->result();
	}

	public function minhasVagasRecusadas(){
		$status = 'Recusada';
		$id_voluntario = $this->session->userdata('id_voluntario');
		$this->db
		->select("*")
		->from("vaga")
		->join('vaga_candidato', 'vaga.id_vaga = vaga_candidato.id_vaga')
		->where('id_voluntario', $id_voluntario)
		->where('status_vaga', $status);
		return $query = $this->db->get()->result();
	}

	public function excluir($id_voluntario, $id_vaga){
		$id_voluntario = $this->session->userdata('id_voluntario');
		$this->db->where('id_voluntario', $id_voluntario);
		$this->db->where('id_vaga', $id_vaga);
		$this->db->delete('vaga_candidato');
	}




}
