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

  public  function getVagaEntidadeAtiva() {
    $id_entidade = $this->session->userdata('id_entidade');
    $ativo = 'SIM';
    $this->db
    ->select("*")
    ->from("vaga")
    ->where('id_entidade', $id_entidade)
    ->where('ativo', $ativo);

    return $qr = $this->db->get()->result();

 }

  public  function getVagaEntidadeFinalizada() {
     $id_entidade = $this->session->userdata('id_entidade');
     $ativo = 'NAO';
     $this->db
     ->select("*")
     ->from("vaga")
     ->where('id_entidade', $id_entidade)
     ->where('ativo', $ativo);

     return $qr = $this->db->get()->result();

    }

  public function recadastrarVaga($data, $id_vaga){
      $id_entidade = $this->session->userdata('id_entidade');
      $this->db->where('id_vaga', $id_vaga);
      $this->db->where('id_entidade', $id_entidade);
      $this->db->set($data);
      return $this->db->update('vaga');
    }

    public function finalizarVaga($data, $id_vaga){
        $id_entidade = $this->session->userdata('id_entidade');
        $this->db->where('id_vaga', $id_vaga);
        $this->db->where('id_entidade', $id_entidade);
        $this->db->set($data);
        return $this->db->update('vaga');
      }




}
