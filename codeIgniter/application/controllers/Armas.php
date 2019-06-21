<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Armas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Armas_model');
    }

    public function index()
    {
        $data['armas'] = $this->Armas_model->selecionar_todos();

        $this->load->view('bootstrap');
        $this->load->view('cabecalho/inicio');
        $this->load->view('cabecalho/armas');

        $this->load->view('Armas_index', $data);
    }

    public function cadastrar()
    {
        if ($_POST) {
            $this->Armas_model->inserir($_POST);
            redirect('/Armas');
        } else {
            $this->load->view('bootstrap');
            $this->load->view('cabecalho/inicio');
            $this->load->view('cabecalho/armas');

            $this->load->view('Armas_cadastrar');
        }
    }

    public function atualizar($id)
    {
        if ($_POST) {
            $this->Armas_model->alterar($id, $_POST);

            $data['armas'] = $this->Armas_model->selecionar_todos();
            redirect('/Armas');
        } else {
            $data['arma'] = $this->Armas_model->selecionar($id);
            $this->load->view('bootstrap');
            $this->load->view('cabecalho/inicio');
            $this->load->view('cabecalho/armas');
            
            $this->load->view('Armas_atualizar', $data);
        }
    }

    public function deletar($id)
    {
        $this->Armas_model->remover($id);
        $data['armas'] = $this->Armas_model->selecionar_todos();

        redirect('/Armas');
    }
}
