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
                            <a class="edit" href="<?php echo base_url(); ?>"><i class="fas fa-edit"></i>Editar</a>

                            <br>
                            <a class="delete" href="<?php echo base_url(); ?>"><i class="fas fa-minus-circle"></i>Deletar</a>
                            <br>
                        </li>
                    <?php endforeach ?>
                    <li>

                    </li>
                </ul>

                <a href="<?php echo base_url(); ?>"><i class="fas fa-plus-circle"></i>Adicionar</a><br><br>

                <h1>Inimigos</h1>
                <ul class="characters">
                    <li>
                        <div>Cavaleiro Tempestuoso</div>
                        <div class="art">
                            <img src="<?php echo ("https://i.pinimg.com/564x/f2/49/3c/f2493ca1297ecfdf61d16007fde0c2b1.jpg"); ?>" alt="cavaleiro_tempestuoso" class="image">
                            <div class="overlay enemy">
                                <div class="text">
                                    Valoroso campeão do rei, perdera todo o prestigio que conquistou
                                    durante anos em batalhas espetaculares quando fora convocado para liderar a força
                                    espedicionaria vermelha que lutou contra os cavaleiros dos Sinos em uma destas campanhas
                                    tudo mudou quando deparou-se com uma jóia descrita pelos seus portadores como
                                    uma dádiva vinda do céu.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>Mestre das Trancas</div>
                        <div class="art">
                            <img src="<?php echo ("https://cdna.artstation.com/p/assets/images/images/005/038/284/large/ankou-schnee-14361278-1179445815411645-2485188510628170237-o.jpg?1488048710"); ?>" alt="mestre_das_trancas" class="image">
                            <div class="overlay enemy">
                                <div class="text">
                                    Além de construirem as inumeras estátuas de Teville a chama do céu, também construiram
                                    as trancas mais seguras de toda a Dônia. Seus segredos acompanhavam-os até o tpumulo
                                    após completarem um último trabalho a Horian, o Fantasma guarda o maior segredo do
                                    rei.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>Bruxa das Raízes</div>
                        <div class="art">
                            <img src="<?php echo ("https://3.bp.blogspot.com/-f0aR0JG-lNE/XAP0z8VFQUI/AAAAAAABpbU/AinoGEzFibEFXd8dc7azquVdXxEtA1e2ACLcBGAs/s1600/andrei-riabovitchev-witch-full-body-v002.jpg"); ?>" alt="bruxa_das_raizes" class="image">
                            <div class="overlay enemy">
                                <div class="text">
                                    A antiga reinha Vermelha, a qual lhe foi conferida a culpa da traição com os grandes antigos, sucumbiu
                                    a lâmina de seu amado. A mulher recusou-se a descansar e seu lamento trouxe de volta uma antiga lenda
                                    a qual a Azaléia e suas raízes absorveram toda a enregia de um determinado local.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>Gale</div>
                        <div class="art">
                            <img src="<?php echo ("https://i.pinimg.com/originals/72/d7/03/72d7039f9d528aadd3fd6c8f68893ead.jpg"); ?>" alt="gale" class="image">
                            <div class="overlay enemy">
                                <div class="text">
                                    O antigo guerreiro quebra armaduras, valoroso combatente do exercito vermelho possui um passado nebuloso,
                                    antigo companheiro de cavaleiro tempestuoso teve contato com um artefato de muito valor creditado a eles pelos
                                    adoradores de Previan, a origem dos artefatos é incerta.
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <h1>Jogadores</h1>
                <?php if ($this->session->userdata('usuario_logado')) : ?>
                    <a href="Jogadores"><i class="fas fa-plus-circle"></i>Criar Jogador</a>
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