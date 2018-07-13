<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Listar_Universidade extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function get_listar_universidade() {
//        $array = array("Nome" => "Carlos", "Sobrenome" => "Fernandes", "ola" => "bemvindo", "fernandes" => "ok");
//        return $array;

        $this->db->select('*');
        $this->db->from('Universidade_has_contacto');
        $this->db->join('Universidade', 'Universidade.idUniversidade = Universidade_has_contacto.Universidade_idUniversidade');
        $this->db->join('contacto', 'contacto.idcontacto = Universidade_has_contacto.contacto_idcontacto');
        $this->db->join('login', 'login.idlogin = Universidade_has_contacto.contacto_idcontacto');
        $query = $this->db->get();

        $array = array();
        if ($query->num_rows() > 0) {
            $array = $query->result_array();
            return $array;
        }
        return $array;
    }

}
