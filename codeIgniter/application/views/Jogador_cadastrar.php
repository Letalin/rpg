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
            <div class="conteudo col">
                <h1>Cadastro de Personagem</h1>
                <div class="row">
                    <div class="col-sm-4 offset-sm-4">
                        <form method="POST" action="<?php echo base_url("Jogadores/cadastrar"); ?>">
                            <div class="form-group">
                                <label>Nome do personagem</label>
                                <input type="text" class="form-control" placeholder="Nick Name" name="nome">
                            </div>
                            <div class="form-group">
                                <label>Classe</label>
                                <select class="form-control" id="classes_tipo">
                                    <?php foreach ($classes as $classe) : ?>
                                        <option value="<?php echo $classe->id_classe; ?>"><?php echo $classe->nome; ?></option>
                                    <?php endforeach ?>
                                    <!--                                     
                                    <option id="qq">Guerreiro</option>
                                    <option id="ww">Ladino</option>
                                    <option id="eeW">Mago</option>
                                    <option id="">Paladino</option>
                                    <option id="">Arqueiro</option> -->
                                </select>
                            </div>

                            <input type="hidden" name="classe" id="classe"  value="1">
                            <!-- Script para passar o id da classe -->
                            <script>
                                (function() {

                                    // Referencia os itens por id
                                    var sel = document.getElementById('classes_tipo');
                                    var el = document.getElementById('classe');


                                    function getSelectedOption(sel) {
                                        var opt;
                                        for (var i = 0, len = sel.options.length; i < len; i++) {
                                            opt = sel.options[i];
                                            if (opt.selected === true) {

                                                break;
                                            }
                                        }
                                        return opt;
                                    }

                                    sel.onclick = function() {
                                        el.value = sel.value;
                                    }
                                }());
                            </script>

                            <!-- Script pra passar para as outras tabelas -->
                            <script>
                                // init
                                $('.atributos').val($('#classes_tipo option:selected').val());
                                //on selecting
                                $('#classes_tipo').on('change', function() {
                                    $('.atributos').val($(this).find('option:selected').val());
                                })
                            </script>

                            <div class="form-group">
                                <label for="">Arma Inicial</label>
                                <select class="form-control" id="select_armas">
                                    <?php foreach ($armas as $arma) : ?>
                                        <option value="<?php echo $arma->id_arma; ?>"><?php echo $arma->nome; ?></option>
                                    <?php endforeach ?>
                                </select>
                                <input type="hidden" name="arma" id="arma" value="1">

                                <!-- Script para passar o id da arma -->
                                <script>
                                    (function() {

                                        // Referencia os itens por id
                                        var sel = document.getElementById('select_armas');
                                        var el = document.getElementById('arma');


                                        function getSelectedOption(sel) {
                                            var opt;
                                            for (var i = 0, len = sel.options.length; i < len; i++) {
                                                opt = sel.options[i];
                                                if (opt.selected === true) {

                                                    break;
                                                }
                                            }
                                            return opt;
                                        }

                                        sel.onclick = function() {
                                            el.value = sel.value;
                                        }
                                    }());
                                </script>
                            </div>
                            <div class="form-group">
                                <label>Origem</label>
                                <textarea class="form-control" rows="8" maxlength="150" name="origem"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Imagem</label>
                                <input type="text" class="form-control" placeholder="URL da Imagem" name="imagem">
                            </div>
                            <input type="hidden" name="usuario" value="<?php echo $this->session->userdata('id_usuario'); ?>">
                            <button type="submit" class="btn btn-secondary btn-lg">Salvar Personagem</button>
                            <br><br>
                        </form>
                    </div>
                    <br>
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
    </div>
</body>