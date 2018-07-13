<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('universidade/Listar_Universidade', 'listar_universidade');
    }

    public function index() {
        $dados['dados'] = $this->listar_universidade->get_listar_universidade();
        
        $this->load->view('welcome_message', $dados);
    }

    public function cadastroaluno() {
        $this->load->view('cadastroaluno');
    }

    public function cadastroauniversidade() {

        $this->load->view('cadastroauniversidade');
    }
    public function loginaluno() {

        $this->load->view('Login_Aluno');
    }
    public function loginuniversidade() {

        $this->load->view('Login_Universidade');
    }


}
