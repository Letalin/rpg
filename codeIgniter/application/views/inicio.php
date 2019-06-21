<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Página inicial... -->

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

        <?php if ($this->session->flashdata('success')) : ?>
            <p class='alert alert-success'><?= $this->session->flashdata('success') ?></p>
        <?php endif ?>


        <?php if ($this->session->flashdata('danger')) : ?>
            <p class='alert alert-danger'><?= $this->session->flashdata('danger') ?></p>
        <?php endif ?>

        <div class="row">
            <div class="conteudo mx-auto" style="width: 45em;">
                <h1>Prólogo</h1>
                <p>Essa é a história de quatro homens nascidos em época tempestuosa em que foram levados
                    ao limite para lutar contra outros homens que tentavam defender suas terras e sua honra.</p>

                <p>Os quatro homens nasceram em regiões diferentes de um mesmo território governado por duas
                    famílias reais unidas três gerações atrás, a família das Azaléias e a família dos Vermelhos, no momento do conflito o governante
                    era prestigioso L.E.S. Horian, considerado por muitos o governante perfeito, carismático e imponente, sempre foi entusiasta
                    nas ciências naturais e da alma, o que explica em parte seu interesse no recém descoberto Enco extraído no país mais ao norte,
                    entretanto o governante carregava uma grande vergonha, diferentemente de seus antepassados, Horian não conseguia ter filhos,
                    fazendo-o optar por práticas menos ortodoxas de conceber um herdeiro para seu reino, dessa maneira, aceitando um culto até então considerado
                    obscuro pela sua natureza ligada ao minério, fomentou então a dispersão da religião por todo o território até o dia em que sua
                    mulher, Lusenhuf deu a luz ao pequeno Ethel, em um primeiro momento Lusenhuf tentou argumentar que Ethel precisava descansar
                    pois havia chorado demais e havia sido um parto difícil, mesmo assim Horian adentrou os aposentos de sua amada esposa e
                    quando viu o rosto de seu recém nascido e tão esperado filho sua fisionomia mudou e nunca mais fora a mesma, segundo
                    ele , seu filho não havia sido concebido por ele e Lusenhuf, mas sim por ele e Alva. </p>

                <p>Alva ou Máscara Alva, era o nome pelo qual a Deusa do minério era conhecida, após dizer tais palavras
                    Horian atacou seu orientador espiritual e ordenou que fosse criado um decreto banindo da região
                    todos os sacerdotes de todo o território que governava, dando ordem para seu exército massacrar
                    tanto sacerdotes como praticantes do culto, pois segundo ele a religião ameaçava a soberania
                    das Azaléias vermelhas.</p>

                <p>Após assinar tal decreto, que revoltou parte de seu exército, Horian ordenou que Lusenhuf aceitasse
                    que Ethel não era filho deles e que a criança devia ser morta o quanto antes, pois ela representava uma
                    enorme ameaça, Lusenhuf obviamente não aceitou a decisão de seu marido e viu seu filho ser tomado de seu colo
                    pelas mãos de um soldado, nem Ethel nem o soldado foram vistos novamente, tanto pelos olhos de Horian quanto
                    de os Lusenhuf que logo se fecharam para nunca mais voltarem a abrir após ela tirar a própria vida. </p>
            </div>
        </div>
        <br>
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
                    </div>
                </div>
            </div>
</body>