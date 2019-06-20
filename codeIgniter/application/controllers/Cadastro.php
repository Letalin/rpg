<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cadastro extends CI_Controller
{
    public function __construct()
    {
        //Chama modelo para carregar dados
        parent::__construct();
        $this->load->model('Usuarios_model');

        /*
        $this->load->model('Nome do teu modelo');
        */
    }

    public function index()
    {

        $data['usuarios'] = $this->Usuarios_model->selecionar();

        /*
        $data['nome da tua variavel em plural'] = $this->"Nome do teu modelo"->selecionar();
        */

        /* Passa os dados para a view
        //$this->load->view('O nome da tua view index ou sla', $data);
        */
        //Chama a view pra carregar html
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

        /*
        if($_POST) {
			$this->"Nome do teu modelo"->inserir($_POST);
        }

        Carregar view inicial ou sla!
        */

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

        /*
        if($_POST) {
			$this->"Nome do teu modelo"->alterar($id,$_POST);
        }
        $data['nome da tua variavel em plural'] = $this->"Nome do teu modelo"->selecionar($id);
        
        
        Carregar alguma view mostrando que alterou!
        */
    }

    public function deletar($id)
    { 
        $this->Usuarios_model->remover($id);
        $data['usuarios'] = $this->Usuarios_model->selecionar();

        $this->index();

        /*
        $this->"Nome do teu modelo"->remover($id);
        $data['nome da tua variavel em plural'] = $this->"Nome do teu modelo"->selecionar();

        $this->index();

        ou

        Carregar alguma view
        */
    }
}
