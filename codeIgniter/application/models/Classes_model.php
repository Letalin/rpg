<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Classes_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function inserir($cadastro)
    {
        $this->vida                 = $cadastro['vida'];
        $this->energia              = $cadastro['energia'];
        $this->forca                = $cadastro['forca'];
        $this->destreza             = $cadastro['destreza'];
        $this->agilidade            = $cadastro['agilidade'];

        if (!$this->db->insert('classe', $this)) {
            $this->db->_error_message();
        }
    }

    public function remover($id)
    {
        if (!$this->db->delete('classe', "id_classe = $id")) {
            $this->db->_error_message();
        }
    }

    public function alterar($id, $atualizacao)
    {
        $this->vida                 = $atualizacao['vida'];
        $this->energia              = $atualizacao['energia'];
        $this->forca                = $atualizacao['forca'];
        $this->destreza             = $atualizacao['destreza'];
        $this->agilidade            = $atualizacao['agilidade'];

        if (!$this->db->update('classe', $this, "id_classe = $id")) {
            $this->db->_error_message();
        }
    }

    public function selecionar_todos()
    {
        $query = $this->db->get('classe');
        return $query->result();
    }

    public function selecionar($id)
    {
        $query = $this->db->get_where('classe', array('id_classe' => $id));
        return $query->row();
    }
}
