<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Militares extends CI_Controller {

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
		$militares = array();
		$nome = $this->session->userdata('nome');
		$this->load->model('militares_model', 'militares');
		$results = $this->militares->get_militares();
		$dados = array(
			'titulo' => "ATRIX | Área Administrativa | 1.17",
			'nome' => $nome,
			'militares' => $results 
			);
		if ($this->session->userdata('logado') === TRUE) {
				
				
					$this->load->view('militares/index', $dados);
		}else{
			$alerta = array(
					"class" => "danger",
					"mensagem" => "Atenção! Usuário não realizou login. <br>"
					);
			redirect('conta/entrar', $alerta);
		}

		
	}

}