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
    public  $data_cadastro;

    function __construct() {
        parent::__construct();
    }

    public function Salvar(){
       //método que vai realizar o insert na tabela de vaga do sistema
       return $this->db->insert('vaga', $this);
   }

}
