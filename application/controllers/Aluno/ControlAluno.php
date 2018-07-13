<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControlAluno extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Aluno/CadastroAluno', 'CadastroAluno_apelido');
    }

    function cadastroaluno() {

        $senha = $this->input->post('senha');
        $repsenha = $this->input->post('repsenha');
        $dados = array(
            'nome_aluno' => $this->input->post('nome_aluno'),
            'pais' => $this->input->post('pais'),
            'celular' => $this->input->post('celular'),
            'cep' => $this->input->post('cep'),
            'endereco' => $this->input->post('endereco'),
            'estado' => $this->input->post('estado'),
            'cidade' => $this->input->post('cidade'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
        );

        foreach ($dados as $value) {
            if (empty($value)) {
                echo"<script type='text/javascript'>alert('Preencher todos os Campos');</script>";
                $this->load->view('cadastroaluno');
                return;
            }
        }

        if ($senha != $repsenha) {
            echo"<script type='text/javascript'>alert('A senha Não confere');</script>";
            $this->load->view('cadastroaluno');
            return;
        }


        $verificacao = $this->CadastroAluno_apelido->inseridadosaluno();

        if ($verificacao) {
            echo"<script type='text/javascript'>alert('cadastro com succeso');</script>";
            $this->load->view('cadastroaluno');
        } else {
            echo"<script type='text/javascript'>alert('Erro verificar o email e o nome do Aluno');</script>";
            $this->load->view('cadastroaluno');
        }
    }

}
