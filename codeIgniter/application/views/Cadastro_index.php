<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="<?php echo base_url("inicio"); ?>" id="title">Doença das Almas</a>
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
                <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
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
            <div class="conteudo col-sm-12">
                <h1>Cadastre-se</h1>
                <div class="col-sm-4 offset-sm-4">
                    <form>
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" placeholder="Nome Completo"
                                style="text-align: center;">
                        </div>
                        <div class="form-group">
                            <label>Endereço de Email</label>
                            <input type="email" class="form-control" placeholder="Email" style="text-align: center;">
                        </div>

                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" placeholder="Senha" style="text-align: center;">
                        </div>
                        <input type="submit" class="btn btn-secondary  btn-lg">
                    </form>
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
                            <li><a class="linkedin" href="https://www.linkedin.com/in/felipe-almeida-5115b4183/"
                                    target="_blank">LinkedIn</a></li>
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
                            <li><a class="linkedin" href="https://www.linkedin.com/in/vinicios-dutra-schulze-2701a8145/"
                                    target="_blank">LinkedIn</a>
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
                            <li><a href="mailto:contato@engenheiropedrodealmeida.com.br"
                                    class="mail">contato@engenheiropedrodealmeida.com.br</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</body>