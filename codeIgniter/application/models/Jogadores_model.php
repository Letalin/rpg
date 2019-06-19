<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jogadores_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function inserir($cadastro)
    {
        $this->nome             = $cadastro['nome'];
        $this->origem           = $cadastro['origem'];
        $this->imagem           = $cadastro['imagem'];
        $this->arma             = $cadastro['arma'];
        $this->classe           = $cadastro['classe'];
        $this->usuario          = $cadastro['usuario'];

        if (!$this->db->insert('', $this)) {
            $this->db->_error_message();
        }
    }

    public function remover($id)
    {
        if (!$this->db->delete('', "id = $id")) {
            $this->db->_error_message();
        }
    }

    public function alterar($id, $atualizacao)
    {
        $this->nome             = $atualizacao['nome'];
        $this->origem           = $atualizacao['origem'];
        $this->imagem           = $atualizacao['imagem'];
        $this->arma             = $atualizacao['arma'];
        $this->classe           = $atualizacao['classe'];
        $this->usuario          = $atualizacao['usuario'];

        if (!$this->db->update('', $this, "id = $id")) {
            $this->db->_error_message();
        }
    }

    public function selecionar()
    {
        $query = $this->db->get('');
        return $query->result();
    }

    public function selecioncar($id)
    {
        $query = $this->db->get_where('', array('id' => $id));
        return $query->row();
    }
}
