<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voluntario extends CI_Controller {


	 public function __construct() {
            parent::__construct();
        }

	public function index()
	{
		$this->load->view('cadastro');
	}

  public function Salvar(){
         $dados = array();
        // $this->db->select('email');
        // $this->db->where('email', $this->input->post('voluntario_email'));
        // $retorno = $this->db->get('voluntario')->num_rows();
         //verifica se já existe um email igual cadastrado, caso exista vai mostrar a mensagem
         //caso não o cadastro será realizado
        // if($retorno > 0 ){
          // echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
            //       alert ('Já existe alguem cadastrado com este email, verifique se você já se cadastrou, ou
              //     digite um email diferente.')</SCRIPT>";
           //$this->load->view('cadastro');
                    // } else {
           //pegando os dados vindos do formulario de cadastro;
           $this->Voluntario_model->nome = $this->input->post('voluntario_nome');
           $this->Voluntario_model->telefone = $this->input->post('voluntario_telefone');
           $this->Voluntario_model->email = $this->input->post('voluntario_email');
           $this->Voluntario_model->senha = $this->input->post('voluntario_senha');
           if($this->Voluntario_model->Salvar()){
               $dados['msg'] = 'Voluntario cadastrado com sucesso!';
           }
           else{
               $dados['msg'] = 'Erro ao cadastrar novo Voluntario, tente novamente ou contate o administrador do sistema!';
           }
       $this->load->view('cadastro', $dados);
          }
 }
//}
