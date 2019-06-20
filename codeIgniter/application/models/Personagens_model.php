<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Personagens_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function inserir($cadastro)
    {
        $this->nome             = $cadastro['nome'];
        $this->descricao             = $cadastro['descricao'];
        $this->imagem           = $cadastro['imagem'];
        $this->usuario          = $cadastro['usuario'];

        if (!$this->db->insert('personagem', $this)) {
            $this->db->_error_message();
        }
    }

    public function remover($id)
    {
        if (!$this->db->delete('personagem', "id_personagem = $id")) {
            $this->db->_error_message();
        }
    }

    public function alterar($id, $atualizacao)
    {
        $this->nome             = $atualizacao['nome'];
        $this->descricao             = $atualizacao['descricao'];
        $this->imagem           = $atualizacao['imagem'];
        $this->usuario          = $atualizacao['usuario'];

        if (!$this->db->update('personagem', $this, "id_personagem = $id")) {
            $this->db->_error_message();
        }
    }

    public function selecionar_todos()
    {
        $query = $this->db->get('personagem');
        return $query->result();
    }

    public function selecionar($id)
    {
        $query = $this->db->get_where('personagem', array('id_personagem' => $id));
        return $query->row();
    }
}
