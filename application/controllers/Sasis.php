<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sasis extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
		$alerta = array();
	}
	public function index()
	{
		

		
	}

	public function altera_senha()
	{
		$nome = $this->session->userdata('nome');
		$alerta = array();

		if ($this->input->post('alterar') === "alterar") {

			$this->form_validation->set_rules('saram', 'SARAM', 'required');

			if($this->form_validation->run() === TRUE){

				$saram = $this->input->post('saram');
				$this->load->model('sasis_model');

				$senha_alterar = $this->sasis_model->altera_senha($saram);

				if ($senha_alterar) {
					$alerta = array(
					"class" => "success",
					"mensagem" => "Parabéns! <br> A senha foi resetada com sucesso. <br>"
					);
				}else{
					$alerta = array(
					"class" => "danger",
					"mensagem" => "Erro!<br /> Ocorreu um erro ao resetar a senha do militar $saram. <br>"
					);
				}
			}else{
				$alerta = array(
					"class" => "danger",
					"mensagem" => "Atenção! Falha na validação do formulário. <br>".validation_errors()
					);
			}

		}

		
		$dados = array(
			'titulo' => "ATRIX | Área Administrativa | 1.17",
			'nome' => $nome,
			"alerta" => $alerta
			);
		$this->load->view('sasis/altera_senha', $dados);
		
	}


}
