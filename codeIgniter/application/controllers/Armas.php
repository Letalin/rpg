<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Armas extends CI_Controller
{
    public function __construct()
    {
        //Chama modelo para carregar dados
        parent::__construct();
        //$this->load->model('');
    }
    public function index()
    {

        /*
        //Carrega o model
        $data['armas'] = $this->Armas_model->selecionar();
        */
        //Chama a view pra carregar html
        $this->load->view('bootstrap');
        $this->load->view('cabecalho/inicio');
        $this->load->view('cabecalho/armas');

        /* Passa os dados para a view
        //$this->load->view('Armas_index', $data);
        */
        $this->load->view('Armas_index');
    }

    public function adicionar()
    {
        if($_POST){
            $this->Armas_model->inserir($_POST);
        }

        $this->load->view('bootstrap');
        $this->load->view('Armas_adicionar');
    }

    public function atualizar($id)
    {

        $this->load->view('bootstrap');
        $this->load->view('Armas_adicionar');
    }

    public function remover($id)
    { 

    }
}
