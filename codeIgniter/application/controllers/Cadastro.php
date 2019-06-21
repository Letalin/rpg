<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuarios_model');
    }

    public function index()
    {
        $data['usuarios'] = $this->Usuarios_model->selecionar_todos();

        $this->load->view('bootstrap');
        $this->load->view('cabecalho/inicio');
        $this->load->view('cabecalho/cadastro');

        $this->load->view('Usuario_cadastrar');
    }

    public function cadastrar()
    {
        if ($_POST) {
            $this->Usuarios_model->inserir($_POST);
        }
        $this->load->view('bootstrap');
        $this->load->view('cabecalho/inicio');
        $this->load->view('cabecalho/cadastro');
        
        $this->load->view('Usuario_cadastrar');
    }

    public function atualizar($id)
    {
        if ($_POST) {
            $this->Usuarios_model->alterar($id, $_POST);
        }
        $data['usuarios'] = $this->Usuarios_model->selecionar($id);
    }

    public function deletar($id)
    {
        $this->Usuarios_model->remover($id);
        $data['usuarios'] = $this->Usuarios_model->selecionar_todos();

        $this->index();
    }
}
