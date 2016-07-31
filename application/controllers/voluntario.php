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

				 $this->db->select('email');
				 $this->db->where('email', $this->input->post('voluntario_email'));
				 $retorno = $this->db->get('voluntario')->num_rows();
					//verifica se já existe um email igual cadastrado, caso exista vai mostrar a mensagem
					//caso não o cadastro será realizado
					if($retorno > 0 ){
						 $teste['mensagem'] = 'Não foi possivel cadastrar';
						$this->load->view('cadastro_voluntario', $teste);
											} else {
						//pegando os dados vindos do formulario de cadastro;

           $this->Voluntario_model->nome = $this->input->post('voluntario_nome');
           $this->Voluntario_model->telefone = $this->input->post('voluntario_telefone');
           $this->Voluntario_model->email = $this->input->post('voluntario_email');
           $this->Voluntario_model->senha = md5 ($this->input->post('voluntario_senha'));
           if($this->Voluntario_model->Salvar()){
               $dados['msg'] = 'Voluntario cadastrado com sucesso!';
           }
           else{
               $dados['msg'] = 'Erro ao cadastrar novo Voluntario, tente novamente ou contate o administrador do sistema!';
           }
       $this->load->view('cadastro', $dados);
          }
 }


						 public function loginVoluntario(){



						 $voluntario_email = $this->input->post('voluntario_email');
						 $voluntario_senha = $this->input->post('voluntario_senha');

						 $this->db
						 ->select("*")
						 ->from("voluntario")
						 ->where("email", $voluntario_email)
						 ->where("senha", md5($voluntario_senha));

						 $dadosVoluntario = $this->db->get();

						 if($dadosVoluntario->num_rows() > 0){
						 $voluntario = $dadosVoluntario->row();

						 $this->session->set_userdata('logado', TRUE);
						 $this->session->set_userdata('id_voluntario', $voluntario->id_voluntario);

						 echo $voluntario->id_voluntario;
						 echo "login funcionou eeee";

						 } else {
						 $this->load->view('login_tpl', ['login_falhou' => TRUE]);
						 }

						 }
 }
//}
