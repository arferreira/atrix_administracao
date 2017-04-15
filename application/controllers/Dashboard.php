<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$nome = $this->session->userdata('nome');
		$dados = array(
			'titulo' => "ATRIX | Área Administrativa | 1.17",
			'nome' => $nome, 
			'localtrabalho' => $this->session->userdata('peslocaltrabalho')
			);
		if ($this->session->userdata('logado') === TRUE) {

				if ($this->session->userdata('peslocaltrabalho') == 95) {
					$this->load->view('dashboard/home', $dados);
				}elseif ($this->session->userdata('peslocaltrabalho') != 95) {
					$this->load->view('dashboard/user', $dados);
				}
				
		}else{
			$alerta = array(
					"class" => "danger",
					"mensagem" => "Atenção! Usuário não realizou login. <br>"
					);
			redirect('conta/entrar', $alerta);
		}
		
	}
}
