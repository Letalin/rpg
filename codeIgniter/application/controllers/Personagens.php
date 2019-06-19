<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Personagens extends CI_Controller
{
    public function __construct()
    {
        //Chama modelo para carregar dados
        parent::__construct();
        $this->load->model('Personagens_model');
    }
    public function index()
    {
        //Chama a view pra carregar html
        $this->load->view('bootstrap');
        $this->load->view('cabecalho/inicio');
        $this->load->view('cabecalho/personagens');
        $this->load->view('Personagens_index');
    }

    public function cadastrar()
    {

        
        if($_POST) {
			$this->Personagens_model->inserir($_POST);
        }

        /*
        Carregar view inicial ou sla!
        */

       
    }

    public function atualizar($id)
    {
        

        if($_POST) {
			$this->Personagens_model->alterar($id,$_POST);
        }
        $data['personagens'] = $this->Personagens_model->selecionar($id);
        
        /*
        Carregar alguma view mostrando que alterou!
        */
    }

    public function deletar($id)
    { 
        
        
        $this->Personagens_model->remover($id);
        $data['personagens'] = $this->Personagens_model->selecionar();

        $this->index();
/*
        ou
        
        Carregar alguma view
        */
    }
}
