<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Militares_model extends CI_Model {
	var $table = "tb_pessoas";
	/**
  * Método Construtor
  */
 	public function __construct() {
    parent::__construct();
  }


	public function get_militares(){
		   $results = array();
    $this->db->select('*');
    $this->db->from('tb_pessoas');

    $query = $this->db->get();

    
    $results = $query->result();
  
    return $results;
	}



}
