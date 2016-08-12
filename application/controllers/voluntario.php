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
					   redirect('Voluntario/index/?aviso=2');
											} else {

												$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
												$this->form_validation->set_rules('voluntario_nome', 'Nome', 'required|max_length[120]');
												$this->form_validation->set_rules('voluntario_telefone', 'Telefone', 'required|max_length[120]');
												$this->form_validation->set_rules('voluntario_email', 'E-mail', 'required|max_length[120]|valid_email');
												$this->form_validation->set_rules('voluntario_senha', 'Senha', 'required|max_length[120]');

												if ($this->form_validation->run() == FALSE) {
													$this->index();
													return;
												}
												else {
													$this->Voluntario_model->nome = $this->input->post('voluntario_nome');
							            $this->Voluntario_model->telefone = $this->input->post('voluntario_telefone');
							            $this->Voluntario_model->email = $this->input->post('voluntario_email');
							            $this->Voluntario_model->senha = md5 ($this->input->post('voluntario_senha'));

							 					 $this->Voluntario_model->Salvar();


							        redirect('Voluntario/index/?aviso=1');
												}

          }
 }


 public function loginvoluntario(){

				//pega os dados vindos da view de login
				$voluntario_email = $this->input->post('voluntario_email');
				$voluntario_senha = $this->input->post('voluntario_senha');

				 //fazendo a validação do formulario de login
				 $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
				 $this->form_validation->set_rules('voluntario_email', 'email', 'required|max_length[120]');
				 $this->form_validation->set_rules('voluntario_senha', 'Senha', 'required|max_length[120]');

				 if ($this->form_validation->run() == FALSE) {
						 $this->carregarLogin();
						 return;
				 }

				//seleciona os dados na tabela de voluntario
				$this->db
				->select("*")
				->from("voluntario")
				->where("email", $voluntario_email)
				->where("senha", md5($voluntario_senha));

				$dadosVoluntario = $this->db->get();

				//se tiver um igual vai fazer o login e passar o id
				if($dadosVoluntario->num_rows() > 0){
				$voluntario = $dadosVoluntario->row();

				$this->session->set_userdata('logado', TRUE);
				$this->session->set_userdata('id_voluntario', $voluntario->id_voluntario);

					 redirect('/Painel_voluntario');

				} else {
					//se não tiver login e senha certo vai cair aqui
					 redirect('/Login/?aviso=1');


				}

				}
 }
