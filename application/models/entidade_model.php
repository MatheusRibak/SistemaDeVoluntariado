<?php

class Entidade_model extends CI_Model {

	public $id_entidade;
	public $nome;
	public $telefone;
	public $email;
	public $senha;
	public $area_atuacao;
	public $rua;
	public $numero;
	public $bairro;
	public $cidade;
	public $cep;
	public $uf;

	function __construct() {
		parent::__construct();
	}

	public function Salvar() {
		return $this->db->insert('entidade', $this);
	}

	function getEntidade($id_entidade) {
		$id_entidade = (int)$id_entidade;
		$this->db->where('id_entidade', $id_entidade);
		return $this->db->get('entidade');
	}

	function alterar($data) {
		$id_entidade = $this->session->userdata('id_entidade');
		$this->db->where('id_entidade', $id_entidade);
		$this->db->set($data);
		return $this->db->update('entidade');
	}

	function getEntidadeSozinho($id_entidade) {
		$this->db
		->select("*")
		->from("entidade")
		->where('id_entidade', $id_entidade);
		return $query2 = $this->db->get()->result();
	}

}
