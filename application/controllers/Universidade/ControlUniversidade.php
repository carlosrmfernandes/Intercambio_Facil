<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControlUniversidade extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('universidade/CadastroUniveridade', 'CadastroUniveridade_apelido');
    }

    function cadastroUniversidade() {

        $senha = $this->input->post('senha');
        $rsenha = $this->input->post('repsenha');
        $dados = array(
            "nome_universidade" => $this->input->post('nome_universidade'),
            "descricao" => $this->input->post('descricao'),
            "email" => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
            'cep' => $this->input->post('cep'),
            'endereco' => $this->input->post('endereco'),
            'estado' => $this->input->post('estado'),
            'cidade' => $this->input->post('cidade'),
            'celular' => $this->input->post('celular'),
        );

        foreach ($dados as $value) {
            if (empty($value)) {
                echo"<script type='text/javascript'>alert('Preencher todos os Campos');</script>";
                $this->load->view('cadastroauniversidade');
                return;
            }
        }

        if ($senha != $rsenha) {
            echo"<script type='text/javascript'>alert('A senha Não confere');</script>";
            $this->load->view('cadastroauniversidade');
            return;
        }

        $verificacao = $this->CadastroUniveridade_apelido->inseriuniversidade();

        if ($verificacao) {
            echo"<script type='text/javascript'>alert('cadastro com succeso');</script>";
            $this->load->view('cadastroauniversidade');
        } else {
            echo"<script type='text/javascript'>alert('Erro verificar o email e o nome da universidade');</script>";
            $this->load->view('cadastroauniversidade');
        }
    }

}
