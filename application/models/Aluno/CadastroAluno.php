<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroAluno extends CI_Model {

    //put your code here


    function inseridadosaluno() {
        $lastid = "";
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');
        $senhacp = md5($senha);

        if (!$this->verificarAluno($email)) {
            $dados_aluno = array(
                'nome_aluno' => $this->input->post('nome_aluno'),
                'pais' => $this->input->post('pais'),
            );

            $this->db->INSERT('Aluno', $dados_aluno);
            $lastid = $this->db->insert_id();


            if ($lastid > 0) {
                $dado_contacto = array(
                    'celular' => $this->input->post('celular'),
                    'Aluno_idAluno' => $lastid
                );
                $this->db->INSERT('contacto', $dado_contacto);
            }

            if ($lastid > 0) {
                $dado_imgperfil = array(
                    'nome_img_perfil' => $this->input->post('nome_img_perfil'),
                    'Aluno_idAluno' => $lastid
                );
                $this->db->INSERT('Img_Perfil', $dado_imgperfil);
            }
            if ($lastid > 0) {
                $dado_Endereco = array(
                    'cep' => $this->input->post('cep'),
                    'endereco' => $this->input->post('endereco'),
                    'estado' => $this->input->post('estado'),
                    'cidade' => $this->input->post('cidade'),
                    'Aluno_idAluno' => $lastid
                );
                $this->db->INSERT('Enderco', $dado_Endereco);
            }
            if ($lastid > 0) {
                $dado_login = array(
                    'email' => $this->input->post('email'),
                    'senha' => $senhacp,
                    'Aluno_idAluno' => $lastid
                );
                $this->db->INSERT('login', $dado_login);
                return true;
            } else {
                return FALSE;
            }
        }
    }

    function verificarAluno($email) {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('login.email', $email);
        $query = $this->db->get();

        $array = array();
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
