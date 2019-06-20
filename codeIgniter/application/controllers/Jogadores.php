<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jogadores extends CI_Controller
{
    public function __construct()
    {
        //Chama modelo para carregar dados
        parent::__construct();


        /*
        $this->load->model('Personagens_model');
        */
    }

    public function index()
    {


        /*
        $data['jogadores'] = $this->"Personagens_model"->selecionar_todos();
        
*/

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



        /*
        if($_POST) {
			$this->"Personagens_model"->inserir($_POST);
        }

        Carregar view inicial ou sla!
        */ }

    public function atualizar($id)
    {

        /*
        if($_POST) {
			$this->"Personagens_model"->alterar($id,$_POST);
        }
        $data['jogadores'] = $this->"Personagens_model"->selecionar($id);
        
        
        Carregar alguma view mostrando que alterou!
        */ }

    public function deletar($id)
    {

        /*
        $this->"Personagens_model"->remover($id);
        $data['jogadores'] = $this->"Personagens_model"->selecionar_todos();

        $this->index();

        ou

        Carregar alguma view
        */ }
}
