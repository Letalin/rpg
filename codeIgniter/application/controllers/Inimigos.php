<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inimigos extends CI_Controller
{
    public function __construct()
    {
        //Chama modelo para carregar dados
        parent::__construct();

        $this->load->model('Inimigos_model');
    }

    public function index()
    {



        $data['inimigos'] = $this->Inimigos_model->selecionar_todos();


        /* Passa os dados para a view
        //$this->load->view('O nome da tua view index ou sla', $data);
        */
        //Chama a view pra carregar html
        $this->load->view('bootstrap');
        $this->load->view('cabecalho/inicio');
        $this->load->view('cabecalho/personagens');
        $this->load->view('Personagens_index', $data);
    }

    public function cadastrar()
    {
        if ($_POST) {
            $this->Inimigos_model->inserir($_POST);
            redirect('/Personagens');
        } else {
            $this->load->view('bootstrap');
            $this->load->view('cabecalho/inicio');
            $this->load->view('cabecalho/personagens');
            $this->load->view('Inimigos_cadastrar');
        }
    }

    public function atualizar($id)
    {
        if ($_POST) {
            $this->Inimigos_model->alterar($id, $_POST);
            $data['inimigos'] = $this->Inimigos_model->selecionar_todos();
            redirect('/Personagens');
        } else {
            $data['inimigo'] = $this->Inimigos_model->selecionar($id);
            $this->load->view('bootstrap');
            $this->load->view('cabecalho/inicio');
            $this->load->view('cabecalho/personagens');
            $this->load->view('Inimigos_atualizar', $data);
        }
    }

    public function deletar($id)
    {
        $this->Inimigos_model->remover($id);
        $data['inimigos'] = $this->Inimigos_model->selecionar_todos();

        $this->index();

        redirect('/Personagens');
    }
}
