<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inimigo_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function inserir($cadastro)
    {
        $this->descricao        = $cadastro['descricao'];
        $this->imagem           = $cadastro['imagem'];

        if (!$this->db->insert('inimigo', $this)) {
            $this->db->_error_message();
        }
    }

    public function remover($id)
    {
        if (!$this->db->delete('inimigo', "id_inimigo = $id")) {
            $this->db->_error_message();
        }
    }

    public function alterar($id, $atualizacao)
    {
        $this->descricao            = $atualizacao['descricao'];
        $this->imagem               = $atualizacao['imagem'];

        if (!$this->db->update('inimigo', $this, "id_inimigo = $id")) {
            $this->db->_error_message();
        }
    }

    public function selecionar_todos()
    {
        $query = $this->db->get('inimigo');
        return $query->result();
    }

    public function selecionar($id)
    {
        $query = $this->db->get_where('inimigo', array('id_inimigo' => $id));
        return $query->row();
    }
}
