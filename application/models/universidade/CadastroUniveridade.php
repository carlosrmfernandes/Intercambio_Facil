<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroUniveridade extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    function inseriuniversidade() {
        $lastid = "";
        $lastidend = "";
        $lastidcontacto = "";
        $nome_universidade = $this->input->post('nome_universidade');
        $email = $this->input->post('email');

        if (!$this->verificanome($nome_universidade) && !$this->verificaruniversidade($email)) {
            $dados_universidade = array(
                'nome_universidade' => $this->input->post('nome_universidade'),
                'descricao' => $this->input->post('descricao'),
            );

            $this->db->INSERT('Universidade', $dados_universidade);
            $lastid = $this->db->insert_id();


            if ($lastid > 0) {
                $senhacrip = $this->input->post('senha');
                $senc = md5($lastidcontacto);
                $dado_login = array(
                    'email' => $this->input->post('email'),
                    'senha' => $senc,
                    'Universidade_idUniversidade' => $lastid
                );
                $this->db->INSERT('login', $dado_login);
            }

            if ($lastid > 0) {
                $dado_imgperfil = array(
                    'nome_img_perfil' => $this->input->post('nome_img_perfil'),
                    'Universidade_idUniversidade' => $lastid
                );
                $this->db->INSERT('Img_Perfil', $dado_imgperfil);
            }
            if ($lastid > 0) {
                $dado_Endereco = array(
                    'cep' => $this->input->post('cep'),
                    'endereco' => $this->input->post('endereco'),
                    'estado' => $this->input->post('estado'),
                    'cidade' => $this->input->post('cidade')
                );
                $this->db->INSERT('Enderco', $dado_Endereco);
                $lastidend = $this->db->insert_id();
            }
            if ($lastidend > 0) {
                $dado_Has_end = array(
                    'Universidade_idUniversidade' => $lastid,
                    'Enderco_idEnderco' => $lastidend
                );
                $this->db->INSERT('Universidade_has_Enderco', $dado_Has_end);
            }
            if ($lastid > 0) {
                $dado_contacto = array(
                    'celular' => $this->input->post('celular'),
                );
                $this->db->INSERT('contacto', $dado_contacto);
                $lastidcontacto = $this->db->insert_id();
            }
            if ($lastidcontacto > 0) {
                $dado_Has_cont = array(
                    'Universidade_idUniversidade' => $lastid,
                    'contacto_idcontacto' => $lastidcontacto
                );
                $this->db->INSERT('Universidade_has_contacto', $dado_Has_cont);
                return true;
            } else {
                return false;
            }
        }
    }

    function verificaruniversidade($email) {
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

    function verificanome($nome_universidade) {
        $this->db->select('*');
        $this->db->from('Universidade');
        $this->db->where('Universidade.nome_universidade', $nome_universidade);
        $query = $this->db->get();

        $array = array();
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    function listarUniversidade(){
        $this->db->select('*');
        $this->db->from('fornecedor');
        $this->db->join('usuarios', 'usuarios.id_fornecedor = fornecedor.id_fornecedor');
        $this->db->join('endereco', 'endereco.id_fornecedor = fornecedor.id_fornecedor');
        $this->db->join('contatos', 'contatos.id_fornecedor = fornecedor.id_fornecedor');
        $this->db->join('redes_socias', 'redes_socias.id_fornecedor = fornecedor.id_fornecedor');
        $this->db->where('fornecedor.id_fornecedor', $id);

        $resultado = $this->db->get();

        $array = array();
        if ($resultado->num_rows() > 0) {
            
            $array = $resultado->result_array();
        }
        return $array;
    }

}
