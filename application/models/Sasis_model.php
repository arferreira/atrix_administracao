<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sasis_model extends CI_Model {


	public function altera_senha($saram){
		$data = array(
			'sasis_senha' => '12345678'
			);
		$this->db->where("pescodigo", $saram);
		
		//executando a query no banco
		$usuarios = $this->db->update("tb_pessoas", $data);

		//verificação
		if ($usuarios) {
			# realizou o update
			
			return TRUE;
		}else{
			return FALSE;
		}
	}



}
