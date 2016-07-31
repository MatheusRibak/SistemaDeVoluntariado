<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entidade extends CI_Controller {

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

	public function carregarLogin(){
		$this->load->view('login_ong');
	}

	public function Salvar(){
				 $dados = array();

				 $this->db->select('email');
				 $this->db->where('email', $this->input->post('entidade_email'));
				 $retorno = $this->db->get('entidade')->num_rows();
					//verifica se já existe um email igual cadastrado, caso exista vai mostrar a mensagem
					//caso não o cadastro será realizado
				  if($retorno > 0 ){
						 $teste['mensagem'] = 'Não foi possivel cadastrar';
						$this->load->view('cadastro_entidade', $teste);
										  } else {
						//pegando os dados vindos do formulario de cadastro;
					 $this->Entidade_model->nome = $this->input->post('entidade_nome');
					 $this->Entidade_model->telefone = $this->input->post('entidade_telefone');
					 $this->Entidade_model->email = $this->input->post('entidade_email');
					 $this->Entidade_model->senha = md5($this->input->post('entidade_senha'));
					 $this->Entidade_model->area_atuacao = $this->input->post('entidade_area_atuacao');
					 $this->Entidade_model->rua = $this->input->post('entidade_rua');
					 $this->Entidade_model->bairro = $this->input->post('entidade_bairro');
					 $this->Entidade_model->numero = $this->input->post('entidade_numero');
					 $this->Entidade_model->cidade = $this->input->post('entidade_cidade');
					 $this->Entidade_model->uf = $this->input->post('entidade_uf');
					 $this->Entidade_model->cep = $this->input->post('entidade_cep');
					 if($this->Entidade_model->Salvar()){
							 $dados['msg'] = 'Entidade cadastrado com sucesso!';
					 }
					 else{
							 $dados['msg'] = 'Erro ao cadastrar novo Entidade, tente novamente ou contate o administrador do sistema!';
					 }
			 $this->load->view('cadastro', $dados);
					}
 }

 				public function loginEntidade(){


				//pega os dados vindos da view de login
				$entidade_email = $this->input->post('entidade_email');
				$entidade_senha = $this->input->post('entidade_senha');

				//seleciona os dados na tabela de entidade
				$this->db
				->select("*")
				->from("entidade")
				->where("email", $entidade_email)
				->where("senha", md5($entidade_senha));

				$dadosEntidade = $this->db->get();

				//se tiver um igual vai fazer o login e passar o id
				if($dadosEntidade->num_rows() > 0){
				$entidade = $dadosEntidade->row();

				$this->session->set_userdata('logado', TRUE);
				$this->session->set_userdata('id_entidade', $entidade->id_entidade);

				echo $entidade->id_entidade;
				echo "login funcionou eeee";

				} else {
					//se não tiver login e senha certo vai cair aqui
					$teste2['mensagem_dois'] = 'Login ou senha incorretos';

				$this->load->view('login', $teste2);

				}

				}



 }
