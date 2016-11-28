<?php

class Vaga_model extends CI_Model {

  public  $id_vaga;
  public  $nome;
  public  $area;
  public  $descricao;
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
    ->select('*')
    ->from('vaga')
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
    ->select('*')
    ->from('vaga')
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

  public function vagaDaEntidade(){
    $status = 'Aguardando Reposta';
    $id_entidade = $this->session->userdata('id_entidade');
    $this->db
    ->select("*")
    ->from("vaga")
    ->join('vaga_candidato', 'vaga.id_vaga = vaga_candidato.id_vaga')
    ->where('status_vaga', $status);
    return $query = $this->db->get()->result();
  }

  public function getCandidato(){
    $status = 'Aguardando Reposta';
    $this->db
    ->select('*')
    ->from('vaga_candidato')
    ->join('vaga', 'vaga.id_vaga  = vaga_candidato.id_vaga')
    ->join('voluntario', 'voluntario.id_voluntario = vaga_candidato.id_voluntario')
    ->where('status_vaga', $status);

  return $this->db->get()->result();

  }

  public function getCandidatoDesistente(){
    $status = 'Voluntário Desistiu...';
    $this->db
    ->select('*')
    ->from('vaga_candidato')
    ->join('vaga', 'vaga.id_vaga  = vaga_candidato.id_vaga')
    ->join('voluntario', 'voluntario.id_voluntario = vaga_candidato.id_voluntario')
    ->where('status_vaga', $status);

  return $this->db->get()->result();
  }

  public function getCandidatoAceito(){
    $status = 'Aceito';
    $this->db
    ->select('*')
    ->from('vaga_candidato')
    ->join('vaga', 'vaga.id_vaga  = vaga_candidato.id_vaga')
    ->join('voluntario', 'voluntario.id_voluntario = vaga_candidato.id_voluntario')
    ->where('status_vaga', $status);

  return $this->db->get()->result();

  }

  public function getCandidatoSozinho($id_voluntario){
    $this->db->select("*")
    ->from("voluntario")
    ->where("id_voluntario", $id_voluntario);
    return $this->db->get()->result();
  }

  public function vagaSozinha($id_vaga, $id_voluntario){
    $this->db->select("*")
    ->from("vaga_candidato")
    ->where("id_vaga", $id_vaga)
    ->where('id_voluntario', $id_voluntario);
    return $this->db->get()->result();
  }

  public function aceitarOuRecusar($id_vaga, $id_voluntario, $dados){
    $id_entidade = $this->session->userdata('id_entidade');
    $this->db->where('id_voluntario', $id_voluntario);
    $this->db->where('id_vaga', $id_vaga);
    $this->db->where('id_entidade', $id_entidade);
    $this->db->set($dados);
    return $this->db->update('vaga_candidato');
  }

  public function getPorAreaUm(){
    $id_voluntario = $this->session->userdata('id_voluntario');
    $this->db->select("*")
    ->from("voluntario")
    ->where("id_voluntario", $id_voluntario);

    $resultado_area_um = $this->db->get()->row();

    $this->db->select("*")
    ->from("vaga")
    ->where("area", $resultado_area_um->atuacao_um);
    return $this->db->get()->result();
  }

  public function getPorAreaDois(){
    $id_voluntario = $this->session->userdata('id_voluntario');

    $this->db->select("*")
    ->from("voluntario")
    ->where("id_voluntario", $id_voluntario);

    $resultado_area_um = $this->db->get()->row();

    $this->db->select("*")
    ->from("vaga")
    ->where("area", $resultado_area_um->atuacao_dois);

    return $this->db->get()->result();
  }

}
