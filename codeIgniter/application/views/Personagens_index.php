<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
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
                    <a id="nome-user" class="nav-link"> <?php echo $this->session->userdata('nome_usuario'); ?></a>
                </li>
                <li class="nav-item">
                    <a id="deslogar" class="nav-link" href="<?php echo site_url('Login/deslogar'); ?>">Deslogar</a></<a>
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


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 conteudo">

                <h1>Personagens</h1>
                <ul class="characters">
                    <?php foreach ($personagens as $personagem) : ?>
                        <li>
                            <div><?php echo $personagem->nome ?></div>
                            <div class="art">
                                <img src="<?php echo $personagem->imagem; ?> " class="image">
                                <div class="overlay">
                                    <div class="text"><?php echo $personagem->descricao ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <?php if ($this->session->userdata('usuario_logado') && ($this->session->userdata('nivel') == '0')) : ?>
                                    <a class="edit" href="<?php echo base_url("Personagens/atualizar/" . $personagem->id_personagem); ?>"><i class="fas fa-edit"></i>Editar</a>

                                    <br>
                                    <a class="delete" href="<?php echo base_url("Personagens/deletar/" . $personagem->id_personagem); ?>"><i class="fas fa-minus-circle"></i>Deletar</a>
                                    <br>
                                <?php endif ?>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>


                <?php if ($this->session->userdata('usuario_logado') && ($this->session->userdata('nivel') == '0')) : ?>
                    <a href="<?php echo base_url('Personagens/cadastrar'); ?>"><i class="fas fa-plus-circle"></i>Adicionar</a><br><br>
                <?php endif ?>


                <h1>Inimigos</h1>
                <ul class="characters">
                    <?php foreach ($inimigos as $inimigo) : ?>
                        <li>
                            <div><?php echo $inimigo->nome ?></div>
                            <div class="art">
                                <img src="<?php echo $inimigo->imagem; ?> " class="image">
                                <div class="overlay enemy">
                                    <div class="text"><?php echo $inimigo->descricao ?>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <?php if ($this->session->userdata('usuario_logado') && ($this->session->userdata('nivel') == '0')) : ?>
                                <a class="edit" href="<?php echo base_url('Inimigos/atualizar/' . $inimigo->id_inimigo); ?>"><i class="fas fa-edit"></i>Editar</a>

                                <br>
                                <a class="delete" href="<?php echo base_url('Inimigos/deletar/' . $inimigo->id_inimigo); ?>"><i class="fas fa-minus-circle"></i>Deletar</a>
                                <br>
                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                    <li>
                    </li>
                </ul>

                <?php if ($this->session->userdata('usuario_logado') && ($this->session->userdata('nivel') == '0')) : ?>
                    <a href="<?php echo base_url('Inimigos/cadastrar'); ?>"><i class="fas fa-plus-circle"></i>Adicionar</a><br><br>
                <?php endif ?>



                <h1>Jogadores</h1>
                <ul class="characters">
                    <?php foreach ($jogadores as $jogador) : ?>
                        <li>
                            <div><?php echo $jogador->nome ?></div>
                            <div class="art">
                                <img src="<?php echo $jogador->imagem; ?> " class="image">
                                <div class="overlay">
                                    <div class="text"><?php echo $jogador->origem ?>
                                    </div>
                                </div>
                                <br>
                                <b> Classe:
                                    <?php foreach ($classes as $classe) {
                                        if ($jogador->classe === $classe->id_classe) {
                                            echo $classe->nome;
                                        }
                                    }
                                    ?>
                                </b>
                            </div>
                            <br>
                            <?php if (($this->session->userdata('usuario_logado') && ($this->session->userdata('id_usuario') == $jogador->usuario)) || ($this->session->userdata('nivel') == '0')) : ?>
                                <a class="edit" href="<?php echo base_url('Jogadores/atualizar/' . $jogador->id_jogador); ?>"><i class="fas fa-edit"></i>Editar</a>

                                <br>
                                <a class="delete" href="<?php echo base_url('Jogadores/deletar/' . $jogador->id_jogador); ?>"><i class="fas fa-minus-circle"></i>Deletar</a>
                                <br>
                            <?php else : ?>
                                <br>
                                <br>
                            <?php endif ?>
                        </li>

                    <?php endforeach ?>
                </ul>
                <?php if ($this->session->userdata('usuario_logado')) : ?>
                    <a href="<?php echo base_url('Jogadores/cadastrar'); ?>"><i class="fas fa-plus-circle"></i>Criar Jogador</a> <br> <br>
                <?php endif ?>
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
    </div>
</body>