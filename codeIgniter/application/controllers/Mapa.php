<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //Chama a view pra carregar html
        $this->load->view('bootstrap');
        $this->load->view('cabecalho/inicio');
        $this->load->view('cabecalho/mapa');

        $this->load->view('Mapa_index');
    }
}
