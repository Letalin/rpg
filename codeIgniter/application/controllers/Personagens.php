<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Personagens extends CI_Controller
{
    public function __construct()
    {
        //Chama modelo para carregar dados
        parent::__construct();
        $this->load->model('Personagens_model');
        $this->load->model('Inimigos_model');
    }
    public function index()
    {
        $data['personagens'] = $this->Personagens_model->selecionar_todos();
        $data['inimigos'] = $this->Inimigos_model->selecionar_todos();
        //Chama a view pra carregar html
        $this->load->view('bootstrap');
        $this->load->view('cabecalho/inicio');
        $this->load->view('cabecalho/personagens');
        $this->load->view('Personagens_index', $data);
    }

    public function cadastrar()
    {


        if ($_POST) {
            $this->Personagens_model->inserir($_POST);
        }

        /*
        Carregar view inicial ou sla!
        */
    }

    public function atualizar($id)
    {


        if ($_POST) {
            $this->Personagens_model->alterar($id, $_POST);
        }
        $data['personagens'] = $this->Personagens_model->selecionar($id);

        /*
        Carregar alguma view mostrando que alterou!
        */
    }

    public function deletar($id)
    {


        $this->Personagens_model->remover($id);
        $data['personagens'] = $this->Personagens_model->selecionar_todos();

        $this->index();
        /*
        ou
        
        Carregar alguma view
        */
    }

    /*
    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    */

    public function cadastrarJogadores()
    {


        if ($_POST) {
            $this->Personagens_model->inserir($_POST);
        }

        /*
        Carregar view inicial ou sla!
        */
    }

    public function atualizarJogadores($id)
    {


        if ($_POST) {
            $this->Personagens_model->alterar($id, $_POST);
        }
        $data['personagens'] = $this->Personagens_model->selecionar($id);

        /*
        Carregar alguma view mostrando que alterou!
        */
    }

    public function deletarJogadores($id)
    {


        $this->Personagens_model->remover($id);
        $data['personagens'] = $this->Personagens_model->selecionar_todos();

        $this->index();
        /*
        ou
        
        Carregar alguma view
        */
    }
}
