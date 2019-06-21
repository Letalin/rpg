<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuarios_model');
    }

    public function autenticar()
    {
        $email = $this->input->post('email', TRUE);
        $senha = $this->input->post('senha', TRUE);

        $validacao = $this->Usuarios_model->logarUsuario($email, $senha);

        if ($validacao) {
            echo 'if';
            $id = $validacao['id_usuario'];
            $nome = $validacao['nome'];
            $email = $validacao['email'];
            $nivel = $validacao['nivel_acesso'];

            $user_data = array(
                'nome_usuario' => $nome,
                'id_usuario' => $id,
                'email' => $email,
                'nivel' => $nivel,
                'usuario_logado' => TRUE
            );

            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('success', 'Logado com sucesso!');
        } else {
            echo 'else';
            $this->session->set_flashdata('danger', 'Email ou senha errada!');
        }

        redirect('inicio');
    }

    public function deslogar(){
        $this->session->sess_destroy();
        redirect('inicio');
    }
}
