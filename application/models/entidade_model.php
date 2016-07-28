<?php

class Entidade_model extends CI_Model {

    public $id_entidade;
    public $area_atuação;
    public $nome;
    public $telefone;
    public $email;
    public $senha;
    public $codigo;
	  public $rua;
	  public $numero;
	  public $bairro;
	  public $cidade;
	  public $cep;
	  public $uf;

    function __construct() {
        parent::__construct();
    }

    public function salvarEntidade(){
       return $this->db->insert('', $this);
   }

}
