<?php

class Vaga_model extends CI_Model {

    public  $id_vaga;
    public  $nome;
  	public  $quantidade_pessoa;
  	public  $descricao;
  	public  $quantidade_vaga;
  	public  $importancia;
  	public  $presencial;
  	public  $estado;
  	public  $cidade;
    public  $id_entidade;
    public  $data_validade;
    public  $ativo;

    function __construct() {
        parent::__construct();
    }

    public function Salvar(){
       return $this->db->insert('vaga', $this);
   }

   function getVagas($teste) {

   $ativo = 'SIM';
	 $this->db
   ->select("*")
   ->from("vaga")
   ->like('nome', $teste)
   ->where('ativo', $ativo);

	 return $qr = $this->db->get()->result();

}

    function getVagaSozinha($id_vaga) {

    	$this->db
      ->select("*")
      ->from("vaga")
      ->like('id_vaga', $id_vaga);

    	return $query = $this->db->get()->result();

    }




}
