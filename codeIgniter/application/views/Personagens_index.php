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
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                </button>
                <form class="dropdown-menu p-3 ">
                    <div class="form-group">
                        <label>Endereço de email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-secondary">Entrar</button>
                    <div class="dropdown-divider"></div>
                    <small>Não tem conta? <a href="Cadastro">Cadastre-se</a></small>
                </form>
            </div>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 conteudo">

                <h1>Personagens</h1>
                <ul class="characters">
                    <li>
                        <div>R. Letalin</div>
                        <div class="art">
                            <img src="<?php echo ("https://i.pinimg.com/564x/40/c7/af/40c7af0e1946262f98c8882a877b5a6f.jpg"); ?> " alt="letalin" class="image">
                            <div class="overlay">
                                <div class="text">Primeiro e único filho do rei Egjor que ergueu o grande muro de
                                    Folon
                                    separando seu reino do restante de Dônia após o caos instaurado na Revolta
                                    vermelha.
                                    Desde cedo demonstrou grande afeição para a magia, o que fez com que tivesse uma
                                    educação de
                                    qualidade
                                    com os estudiosos do Alto contratados a peso de Enco, seu grande professor,
                                    Advlir,
                                    o
                                    mestre da matilha, ensinou-o a poderosa habilidade de invocar cães espirituais
                                    sempre
                                    que necessitasse de proteção, movido pela curiosidade do que havia além da
                                    muralha,
                                    Letalin lançou-se em uma aventura com mais três estranhos às margens do Jarnh.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>Hayoo</div>
                        <div class="art">
                            <img src="<?php echo("https://i.pinimg.com/564x/ff/93/98/ff9398301f1208a7786e2570932ad832.jpg"); ?>" alt="hayoo" class="image">
                            <div class="overlay">
                                <div class="text">Criado nas ruas das terras geladas do Alto pela guilda dos ladrões,
                                    ninguém sabe exatamente onde nascera, apenas que sua capacidade de se tornar
                                    invisível parecia ser um dom.
                                    Ordenado pelos seus mestres, Hayoo viajou ao longo do Jarnh até a grande muralha de
                                    Folon, onde deveria encontrar o principe e persuadí-lo a ir até
                                    Alto em uma falsa aventura onde a guilda poderia trancafiá-lo e extrair informações
                                    importantes.</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>Ethel</div>
                        <div class="art">
                            <img src="<?php echo ("https://i.pinimg.com/564x/51/b9/ed/51b9edfb271c0b56e15e4144603e1a9e.jpg"); ?>" alt="ethel" class="image">
                            <div class="overlay">
                                <div class="text">Filho perdido de Horian e herdeiro do trono vermelho ou, como as
                                    lendas o citam, o filho de Alva, cavaleiro amaldiçoado, fora salvo da morte
                                    prematura pelo melhor amigo do rei e acolhido pelos vigilantes da floresta, onde
                                    aprendeu a guerrear como nenhum outro e a controlar sua incomum perseverança, que
                                    alguns atribuem à sua origem sobrenatural.</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>Thorello</div>
                        <div class="art">
                            <img src="<?php echo ("https://i.pinimg.com/originals/f6/c7/bc/f6c7bc7574d8818d9e0b278f5a0aa191.jpg"); ?>" alt="thorello" class="image">
                            <div class="overlay">
                                <div class="text">Melhor amigo do rei louco e experiente estrategista, Thorello se viu
                                    em um
                                    impasse, deveria proteger o seu afilhado ou atender aos desejos de seu rei
                                    decadente? Thorello fugiu levando consigo o pequeno Ethel para as florestas ao leste
                                    onde ajudou a reerguer o grupo de vigilantes da floresta longe de toda
                                    a insanidade e carnificina que o exército de Horian estava protagonizando após as
                                    desavenças com a crença de Teville.</div>
                            </div>
                        </div>
                    </li>
                </ul>


                <h1>Inimigos</h1>
                <ul class="characters">
                    <li>
                        <div>Cavaleiro Tempestuoso</div>
                        <div class="art">
                            <img src="<?php echo ("https://i.pinimg.com/564x/f2/49/3c/f2493ca1297ecfdf61d16007fde0c2b1.jpg");?>" alt="cavaleiro_tempestuoso" class="image">
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
                            <img src="<?php echo ("https://cdna.artstation.com/p/assets/images/images/005/038/284/large/ankou-schnee-14361278-1179445815411645-2485188510628170237-o.jpg?1488048710");?>" alt="mestre_das_trancas" class="image">
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
                            <img src="<?php echo ("https://3.bp.blogspot.com/-f0aR0JG-lNE/XAP0z8VFQUI/AAAAAAABpbU/AinoGEzFibEFXd8dc7azquVdXxEtA1e2ACLcBGAs/s1600/andrei-riabovitchev-witch-full-body-v002.jpg");?>" alt="bruxa_das_raizes" class="image">
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
                            <img src="<?php echo ("https://i.pinimg.com/originals/72/d7/03/72d7039f9d528aadd3fd6c8f68893ead.jpg");?>" alt="gale" class="image">
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