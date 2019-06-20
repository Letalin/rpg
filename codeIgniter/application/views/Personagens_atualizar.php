<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="<?php echo base_url("inicio"); ?>" id="title">Memórias do Caos Antigo</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("Personagens"); ?>">Personagens</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("Armas"); ?>">Armas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("Mapa"); ?>">Mapa</a>
            </li>
            <?php if ($this->session->userdata('usuario_logado')) : ?>

                <li class="nav-item">
                    <a class="nav-link"> <?php echo $this->session->userdata('nome_usuario'); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('Login/deslogar'); ?>">Deslogar</a></<a>
                </li>

            <?php else : ?>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </button>
                    <form class="dropdown-menu p-3 " action="<?php echo base_url("Login/autenticar"); ?>" method="post">
                        <div class="form-group">
                            <label>Endereço de email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" placeholder="Senha" name="senha">
                        </div>
                        <button type="submit" class="btn btn-secondary">Entrar</button>
                        <div class="dropdown-divider"></div>
                        <small>Não tem conta? <a href="Cadastro">Cadastre-se</a></small>
                    </form>
                </div>

            <?php endif ?>
        </ul>
    </nav>

    <div class="row">
        <div class="conteudo col">
            <h1>Editar Personagem</h1>
            <div class="row">
                <div class="col-sm-4 offset-sm-4">
                    <form method="POST" action="<?php echo base_url("Personagens/atualizar/".$personagem->id_personagem); ?>">
                        <div class="form-group">
                            <label>Nome do Personagem</label>
                            <input type="text" class="form-control" placeholder="Nomeie sua Personagem" name="nome" value="<?php echo $personagem->nome ?>">
                        </div>
                        <div class="form-group">
                            <label>Origem</label>
                            <textarea class="form-control" rows="8" maxlength="150" name="descricao"><?php echo $personagem->descricao ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Imagem</label>
                            <input type="text" class="form-control" placeholder="URL da Imagem" name="imagem" value="<?php echo $personagem->imagem ?>">
                        </div>
                        <input type="hidden" name="usuario" value="<?php echo $this->session->userdata('id_usuario'); ?>">
                        <button type="submit" class="btn btn-secondary btn-lg">Salvar Alteração</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12" id="footer">
            <ul>
                <li> Site Design:</li>
            </ul>
            <div class="row">
                <div class="col">
                    <ul>
                        <li>Felipe Almeida</li>
                        <li>Contato:</li>
                        <li><a href="mailto:almeida.felipe98@gmail.com" class="mail">almeida.felipe98@gmail.com</a>
                        </li>
                    </ul>
                    <ul class="social-networks">
                        <li><a class="github" href="https://github.com/felipelalmeida" target="_blank">Github</a>
                        </li>
                        <li><a class="linkedin" href="https://www.linkedin.com/in/felipe-almeida-5115b4183/" target="_blank">LinkedIn</a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li>Vinicios Schulze</li>
                        <li>Contato:</li>
                        <li><a href="mailto:vine.vinedutra@hotmail.com" class="mail">vine.vinedutra@hotmail.com</a>
                        </li>
                    </ul>
                    <ul class="social-networks">
                        <li><a class="github" href="https://github.com/Hay00" target="_blank">Github</a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com/in/vinicios-dutra-schulze-2701a8145/" target="_blank">LinkedIn</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li>História:</li>
                        <li>Pedro H. Almeida</li>
                        <li>Contato:</li>
                        <li><a href="mailto:contato@engenheiropedrodealmeida.com.br" class="mail">contato@engenheiropedrodealmeida.com.br</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>