<?php

class Historico_model extends CI_Model {

  public $id_entidade;
  public $id_voluntario;
  public $historico;

  function __construct() {
    parent::__construct();
  }

  public function Salvar() {
    return $this->db->insert('historico', $this);
  }

  function getVoluntario($id_voluntario) {
    $id_voluntario = (int)$id_voluntario;
    $this->db->where('id_voluntario', $id_voluntario);
    return $this->db->get('voluntario');
  }







}
