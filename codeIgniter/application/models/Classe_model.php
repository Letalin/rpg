<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classe_model extends CI_Model{
    public function __construct()
    {
    parent::__construct();    
    }

    public function inserir($cadastro)
    {
        /*
        $this->'atributo1'    	= $cadastro['atributo1'];
		$this->'atributo2'   		= $cadastro['atributo2'];

		if(!$this->db->insert('nome da tabela', $this)) {
			$this->db->_error_message();
        }
        */
    }

    public function remover($id)
    {
        /*
        if(!$this->db->delete('nome da tabela', "id = $id")) {
			$this->db->_error_message();
        }
        */
    }

    public function alterar($id,$atualizacao)
    {
        /*
        $this->'atributo1'   		= $atualizacao['atributo1'];
		$this->'atributo2'   		= $atualizacao['atributo2'];

		if(!$this->db->update('nome da tabela', $this, "id = $id")) {
			$this->db->_error_message();
        }
        */
    }

    public function selecionar()
    {
        /*
        $query = $this->db->get('nome da tabela');
        return $query->result();
        */
    }

    public function selecioncar($id)
    {
        /*
        $query = $this->db->get_where('nome da tabela', array('id' => $id));
        return $query->row();
        */
    }
}

?>