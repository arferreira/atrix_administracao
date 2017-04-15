<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {


	public function check_login($saram, $senha){
		$this->db->from("tb_pessoas");
		$this->db->where("pescodigo", $saram);
		$this->db->where("sasis_senha", $senha);
		//$this->db->where("peslocaltrabalho", "95");
		//executando a query no banco
		$usuarios = $this->db->get();

		//verificação
		if ($usuarios->num_rows()) {
			# existe usuarios no db
			$usuario = $usuarios->result_array();
			return $usuario[0];
		}else{
			return FALSE;
		}
	}



}
