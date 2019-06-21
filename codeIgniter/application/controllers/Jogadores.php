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
        $this->load->view('Jogador_cadastrar', $data);
        /* Passa os dados para a view
        //$this->load->view('O nome da tua view index ou sla', $data);
        */
        //Chama a view pra carregar html

    }

    public function cadastrar()
    {
        if ($_POST) {
            $this->Jogadores_model->inserir($_POST);
            redirect('/Personagens');
        } else {
            $data['armas'] = $this->Armas_model->selecionar_todos();
            $data['classes'] = $this->Classes_model->selecionar_todos();
            $this->load->view('bootstrap');
            $this->load->view('cabecalho/inicio');
            $this->load->view('cabecalho/cadastro');
            $this->load->view('Jogador_cadastrar', $data);
        }
    }

    public function atualizar($id)
    {


        if ($_POST) {
            $this->Jogadores_model->alterar($id, $_POST);
            $data['jogadores'] = $this->Jogadores_model->selecionar;
            redirect('/Personagens');
        } else {
            $data['armas'] = $this->Armas_model->selecionar_todos();
            $data['classes'] = $this->Classes_model->selecionar_todos();
            $data['jogador'] = $this->Jogadores_model->selecionar($id);
            $this->load->view('bootstrap');
            $this->load->view('cabecalho/inicio');
            $this->load->view('cabecalho/cadastro');
            $this->load->view('Jogador_atualizar', $data);
        }
    }

    public function deletar($id)
    {
        $this->Jogadores_model->remover($id);
        $data['jogadores'] = $this->Jogadores_model->selecionar_todos();

        $this->index();

        redirect('/Personagens');
    }
}
