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

    public function Salvar(){
       //método que vai realizar o insert na tabela de entidade do sistema
       return $this->db->insert('entidade', $this);
   }

   function getEntidade($id_entidade) {
       $id_entidade = (int) $id_entidade;
       $this->db->where('id_entidade', $id_entidade);
       return $this->db->get('entidade');
   }


}
