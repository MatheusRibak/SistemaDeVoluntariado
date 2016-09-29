<?php

class Voluntario_model extends CI_Model {

	public $id_voluntario;
	public $nome;
	public $email;
	public $telefone;
	public $senha;
	public $atuacao_um;
	public $atuacao_dois;

	function __construct() {
		parent::__construct();
	}

	public function Salvar() {
		return $this->db->insert('voluntario', $this);
	}

	function getVoluntario($id_voluntario) {
		$id_voluntario = (int)$id_voluntario;
		$this->db->where('id_voluntario', $id_voluntario);
		return $this->db->get('voluntario');
	}


	function alterar($data) {
		$id_voluntario = $this->session->userdata('id_voluntario');
		$this->db->where('id_voluntario', $id_voluntario);
		$this->db->set($data);
		return $this->db->update('voluntario');
	}





}
