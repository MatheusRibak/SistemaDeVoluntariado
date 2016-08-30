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
		//método que vai realizar o insert na tabela de voluntário do sistema
		return $this->db->insert('vaga_candidato', $this);
	}




}
