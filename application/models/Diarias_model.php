<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diarias_model extends CI_Model {
	var $table = "tb_posto_graduacao";
	/**
  * Método Construtor
  */
 	public function __construct() {
    parent::__construct();
  }

  public function busca_militar($saram){
    $this->db->from("tb_pessoas");
    $this->db->where("pescodigo", $saram);
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


	public function get_posto_grad($posto){
    $query = $this->db->query("select pgabrev from tb_posto_graduacao where pgid = $posto");
	  $results = $query->result_array();
    $posto_novo = $results[0];
    return $posto_novo;
	}

  public function get_om($om){
    $query = $this->db->query("select omabrev from tb_om where omid = $om");
    $results = $query->result_array();
    $om_nova = $results[0];
    return $om_nova;
  }

  public function insere_diaria($saram){
    $data = array(
      'pescodigo' => $saram
      );
    $return = $this->db->insert('tb_diarias', $data);
    $id = $this->db->insert_id();

    if ($return) {
      $session_id = array(
              'id'  =>  $id,
              
          );
      $this->session->set_userdata($session_id);
      return TRUE;
    }else{
      return FALSE;
    }
  }



}
