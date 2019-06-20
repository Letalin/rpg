<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jogadores extends CI_Controller
{
    public function __construct()
    {
        //Chama modelo para carregar dados
        parent::__construct();


        $this->load->model('Jogadores_model');
        $this->load->model('Armas_model');
        $this->load->model('Classes_model');
        
    }

    public function index()
    {


        
       // $data['jogadores'] = $this->Jogadores_model->selecionar_todos();
        
        $data['armas'] = $this->Armas_model->selecionar_todos();
        $data['classes'] = $this->Classes_model->selecionar_todos();

        $this->load->view('bootstrap');
        $this->load->view('cabecalho/inicio');
        $this->load->view('cabecalho/cadastro');
        $this->load->view('Jogador_cadastrar');
        /* Passa os dados para a view
        //$this->load->view('O nome da tua view index ou sla', $data);
        */
        //Chama a view pra carregar html

    }

    public function cadastrar()
    {



        
        if($_POST) {
			$this->Jogadores_model->inserir($_POST);
        }else{
            redirect('Personagens');
        }

        
        
    }

    public function atualizar($id)
    {

        /*
        if($_POST) {
			$this->"Jogadores_model"->alterar($id,$_POST);
        }
        $data['jogadores'] = $this->"Jogadores_model"->selecionar($id);
        
        
        Carregar alguma view mostrando que alterou!
        */ }

    public function deletar($id)
    {

        /*
        $this->"Jogadores_model"->remover($id);
        $data['jogadores'] = $this->"Jogadores_model"->selecionar_todos();

        $this->index();

        ou

        Carregar alguma view
        */ 
        redirect('Personagens');
    }
}
