<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Armas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function inserir($cadastro)
    {
        $this->nome                     = $cadastro['nome'];
        $this->imagem                   = $cadastro['imagem'];
        $this->dano_corte               = $cadastro['dano_corte'];
        $this->dano_perfuracao          = $cadastro['dano_perfuracao'];
        $this->dano_esmagador           = $cadastro['dano_esmagador'];

        if (!$this->db->insert('arma', $this)) {
            $this->db->_error_message();
        }
    }

    public function remover($id)
    {
        if (!$this->db->delete('arma', "id_arma = $id")) {
            $this->db->_error_message();
        }
    }

    public function alterar($id, $atualizacao)
    {
        $this->nome                     = $atualizacao['nome'];
        $this->imagem                   = $atualizacao['imagem'];
        $this->dano_corte               = $atualizacao['dano_corte'];
        $this->dano_perfuracao          = $atualizacao['dano_perfuracao'];
        $this->dano_esmagador           = $atualizacao['dano_esmagador'];

        if (!$this->db->update('arma', $this, "id_arma = $id")) {
            $this->db->_error_message();
        }
    }

    public function selecionar_todos()
    {
        $query = $this->db->get('arma');
        return $query->result();
    }

    public function selecionar($id)
    {
        $query = $this->db->get_where('arma', array('id_arma' => $id));
        return $query->row();
    }
}
