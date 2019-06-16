<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
            <div class="col-sm-8 offset-sm-2 conteudo">
                <h1>Armas</h1>
                <div class="table-responsive">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Dano Perfurante</th>
                                <th scope="col">Dano Esmagador</th>
                                <th scope="col">Dano Cortante</th>
                            </tr>
                        <tbody id="alinhamento">
                            <tr>
                                <th><img src="<?php echo base_url("images/dagger.png"); ?>" alt="adaga"><br> Adaga </th>
                                <td>100</td>
                                <td>-</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <th><img src="<?php echo base_url("images/bow.png"); ?>" alt="arco"><br> Arco Composto</th>
                                <td>100</td>
                                <td>-</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th><img src="<?php echo base_url("images/axe.png"); ?>" alt="machado"><br> Machado da Tropa</th>
                                <td>10</td>
                                <td>70</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th><img src="<?php echo base_url("images/claymore.png"); ?>" alt="espada-longa"><br> Espada Longa</th>
                                <td>45</td>
                                <td>30</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <th><img src="<?php echo base_url("images/sword.png"); ?>" alt="espada-da-cura"><br> Espada da Cura</th>
                                <td>60</td>
                                <td>10</td>
                                <td>45</td>
                            </tr>
                            <tr>
                                <th><img src="<?php echo base_url("images/scimitar.png"); ?>" alt="cimitarra"><br> Cimitarra</th>
                                <td>30</td>
                                <td>5</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <th><img src="<?php echo base_url("images/ultra-greatsword.png"); ?>" alt="espada-do-julgamento"><br> Espada do
                                    Julgamento
                                </th>
                                <td>30</td>
                                <td>80</td>
                                <td>40</td>
                            </tr>
                    </table>
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
</body>