<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diarias extends CI_Controller {

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
	public function incluir()
	{
		$this->load->model('diarias_model');
		$posto = $this->diarias_model->get_posto_grad($this->session->userdata('posto_grad'));
		$om = $this->diarias_model->get_om($this->session->userdata('om'));

		$nome = $this->session->userdata('nome');
		$dados = array(
			'titulo' => "ATRIX | Área Administrativa | 1.17",
			'nome' => $nome, 
			'localtrabalho' => $this->session->userdata('peslocaltrabalho'), 
			'posto' => $posto, 
			'om' => $om
			);
		if ($this->session->userdata('logado') === TRUE) {

				$this->load->view('diarias/cadastrar', $dados);
				
		}else{
			$alerta = array(
					"class" => "danger",
					"mensagem" => "Atenção! Usuário não realizou login. <br>"
					);
			redirect('conta/entrar', $alerta);
		}
		
	}

	public function cadastrar(){

		if (isset($_POST['btn_bm'])) {
			
		$nome = $this->session->userdata('nome');
		$saram_busca = $_POST['busca_saram'];


		$this->load->model('diarias_model');

		$busca_militar = $this->diarias_model->busca_militar($saram_busca);

		if ($busca_militar) {
			$usuario = $busca_militar;

			$posto = $this->diarias_model->get_posto_grad($usuario['pespostograd']);
			$om = $this->diarias_model->get_om($usuario['pesom']);

			$dados = array(
			'titulo' => "ATRIX | Área Administrativa | 1.17",
			'nome' => $nome, 
			'localtrabalho' => $this->session->userdata('peslocaltrabalho'),
			'posto_grad' => $posto, 
			'nome_completo' => $usuario['pesncompleto'],
			'saram' => $usuario['pescodigo'],
			'cpf' => $usuario['pescpf'],
			'email' => $usuario['pesemail'],
			'data_nascimento' => $usuario['pesdn'],
			'identidade' => $usuario['pesidentidade'],
			'om' => $om,
			'telefone' => $usuario['pesfone1'], 
			'om' => $om
			);

			$this->load->view('diarias/incluir', $dados);

			
		}



		/*
		$posto = $this->diarias_model->get_posto_grad($this->session->userdata('posto_grad'));
		$om = $this->diarias_model->get_om($this->session->userdata('om'));
		

		$insert = $this->diarias_model->insere_diaria($saram_busca);
		$id = $this->db->insert_id();

		$dados = array(
			'titulo' => "ATRIX | Área Administrativa | 1.17",
			'posto_grad' => $posto, 
			'nome_completo' => $this->session->userdata('nome_completo'),
			'saram' => $this->session->userdata('saram'),
			'cpf' => $this->session->userdata('cpf'),
			'email' => $this->session->userdata('email'),
			'data_nascimento' => $this->session->userdata('data_nascimento'),
			'identidade' => $this->session->userdata('identidade'),
			'om' => $om,
			'telefone' => $this->session->userdata('telefone'), 
			'id' => $this->session->userdata('id'),
			'om' => $om
			);

		if ($insert) {
			$this->load->view('diarias/print', $dados);
		}else{
			$this->load->view('diarias/error');
		}

	*/
		}
		if (isset($_POST['gerar'])) {

			$this->load->model('diarias_model');
			$saram_busca = $_POST['saram'];
			$insert = $this->diarias_model->insere_diaria($saram_busca);
			$id = $this->db->insert_id();

		


				$dados = array(
					'titulo' => "ATRIX | Área Administrativa | 1.17",
					'posto_grad_nome' => $_POST['posto_grad_nome'],
					'sc' => $_POST['sc'],
					'id' => $this->session->userdata('id'),
					'saram' => $_POST['saram'], 
					'cpf' => $_POST['cpf'],
					'banco' => $_POST['banco'],
					'agencia' => $_POST['agencia'],
					'conta' => $_POST['conta'],
					'email' => $_POST['email'], 
					'data_nascimento' => $_POST['data_nascimento'],
					'amparo' => $_POST['amparo'],
					'identidade' => $_POST['identidade'],
					'unidade' => $_POST['unidade'],
					'telefone' => $_POST['telefone'],
					'servico' => $_POST['servico'],
					'documentos_origem' => $_POST['documentos_origem'],
					'ne' => $_POST['ne'],
					'missao_proveito' => $_POST['missao_proveito'],
					'custeio' => $_POST['custeio'],
					'sv1' => $_POST['sv1'],
					'sv1datai' => $_POST['sv1datai'],
					'sv1dataf' => $_POST['sv1dataf'],
					'sv1horai' => $_POST['sv1horai'],
					'sv1horaf' => $_POST['sv1horaf'],
					'pernoite' => $_POST['pernoite'],
					'adicional_deslocamento' => $_POST['adicional_deslocamento'],
					'total_acrescimos' => $_POST['total_acrescimos'],
					'acrescimos' => $_POST['acrescimos'],
					'valor_total_radio' => $_POST['valor_total_radio'],
					'valor_total_extenso' => $_POST['valor_total_extenso'],
					'aux_transporte' => $_POST['aux_transporte'],
					'aux_alimentacao' => $_POST['aux_alimentacao'],
					'just_missao' => $_POST['just_missao'],
					'just_conv' => $_POST['just_conv'],
					'justificativa' => $_POST['justificativa']
					);

					if ($insert) {
								$this->load->view('diarias/print', $dados);
							}else{
								$this->load->view('diarias/error');
							}

			}

		
	}

	public function gera_os(){

		if (isset($_POST['gerar'])) {

				$saram = $_POST['saram'];
				echo $saram;
				//$insert = $this->diarias_model->insere_diaria($saram_busca);

			}
	}


}
