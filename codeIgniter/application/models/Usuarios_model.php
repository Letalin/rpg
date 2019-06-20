<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function inserir($cadastro)
    {
        $this->email            = $cadastro['email'];
        $this->senha               = $cadastro['senha'];
        $this->nome                = $cadastro['nome'];
        $this->nivel_acesso       = $cadastro['nivel_acesso'];

        if (!$this->db->insert('usuario', $this)) {
            $this->db->_error_message();
        }
    }

    public function remover($id)
    {
        if (!$this->db->delete('usuario', "id_usuario = $id")) {
            $this->db->_error_message();
        }
    }

    public function alterar($id, $atualizacao)
    {
        $this->email            = $atualizacao['email'];
        $this->senha               = $atualizacao['senha'];
        $this->nome                = $atualizacao['nome'];
        $this->nivel_acesso       = $atualizacao['nivel_acesso'];

        if (!$this->db->update('usuario', $this, "id_usuario = $id")) {
            $this->db->_error_message();
        }
    }

    public function selecionar_todos()
    {
        $query = $this->db->get('usuario');
        return $query->result();
    }

    public function selecionar($id)
    {
        $query = $this->db->get_where('usuario', array('id_usuario' => $id));
        return $query->row();
    }

    public function logarUsuario($email, $senha)
    {
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);
        $resultado = $this->db->get('usuario')->row_array();
        return $resultado;
    }
}
