<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voluntario extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('cadastro');
	}

  public function salvarEntidade(){
         $dados = array();
         $this->db->select('email');
         $this->db->where('email', $this->input->post('email'));
         $retorno = $this->db->get('voluntario')->num_rows();
         //verifica se já existe um email igual cadastrado, caso exista vai mostrar a mensagem
         //caso não o cadastro será realizado
         if($retorno > 0 ){
           echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
                   alert ('Já existe alguem cadastrado com este email, verifique se você já se cadastrou, ou
                   digite um email diferente.')</SCRIPT>";
           $this->load->view('cadastro_academico');
                     } else {
           //pegando os dados vindos do formulario de cadastro;
           $this->Voluntario_model->nome = $this->input->post('nome');
           $this->Voluntario_model->telefone = $this->input->post('telefone');
           $this->Voluntario_model->email = $this->input->post('email');
           $this->Voluntario_model->senha = $this->input->post('senha');
           if($this->Voluntario_model->salvarVoluntario()){
               $dados['msg'] = 'Voluntario cadastrado com sucesso!';
           }
           else{
               $dados['msg'] = 'Erro ao cadastrar novo Voluntario, tente novamente ou contate o administrador do sistema!';
           }
       $this->load->view('home', $dados);
          }
 }
}
