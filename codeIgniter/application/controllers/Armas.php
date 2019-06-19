<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Armas extends CI_Controller
{
    public function __construct()
    {
        //Chama modelo para carregar dados
        parent::__construct();
        $this->load->model('Armas_model');
    }
    public function index()
    {


        $data['armas'] = $this->Armas_model->selecionar();

        $this->load->view('bootstrap');
        $this->load->view('cabecalho/inicio');
        $this->load->view('cabecalho/armas');

        /* Passa os dados para a view
        //$this->load->view('O nome da tua view index ou sla', $data);
        */
        $this->load->view('Armas_index');
    }

    public function cadastrar()
    {

        if ($_POST) {
            $this->Armas_model->inserir($_POST);
        }
        /*
        Carregar view inicial ou sla!
        */
    }

    public function atualizar($id)
    {


        if ($_POST) {
            $this->Armas_model->alterar($id, $_POST);
        }
        $data['armas'] = $this->Armas_model->selecionar($id);

        /*
        Carregar alguma view mostrando que alterou!
        */
    }

    public function deletar($id)
    {


        $this->Armas_model->remover($id);
        $data['armas'] = $this->Armas_model->selecionar();

        $this->index();
        /*
        ou
        
        Carregar alguma view
        */
    }
}
