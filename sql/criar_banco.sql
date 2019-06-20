create database memorias_do_caos_antigo;
use memorias_do_caos_antigo;

CREATE TABLE inimigo (
    id_inimigo INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    descricao VARCHAR(1000) NOT NULL,
    imagem VARCHAR(500),
    PRIMARY KEY (id_inimigo)
);

CREATE TABLE personagem (
    id_personagem INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(20) NOT NULL,
    descricao VARCHAR(1000) NOT NULL,
    imagem VARCHAR(500),
    PRIMARY KEY (id_personagem)
);

CREATE TABLE classe (
    id_classe INT NOT NULL AUTO_INCREMENT,
    vida INT NOT NULL,
    energia INT NOT NULL,
    forca INT NOT NULL,
    destreza INT NOT NULL,
    agilidade INT NOT NULL,
    nome varchar(15) not null,
    PRIMARY KEY (id_classe)
);

CREATE TABLE arma (
    id_arma INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(25) NOT NULL,
    dano_corte INT NOT NULL,
    dano_perfuracao INT NOT NULL,
    dano_esmagador INT NOT NULL,
    imagem VARCHAR(500),
    PRIMARY KEY (id_arma)
);

CREATE TABLE usuario (
    id_usuario INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL,
    senha VARCHAR(60) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    nivel_acesso INT NOT NULL,
    PRIMARY KEY (id_usuario)
);

CREATE TABLE jogador (
    id_jogador INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(20) NOT NULL,
    origem VARCHAR(1000) NOT NULL,
    imagem VARCHAR(500) NOT NULL,
    arma INT,
    classe INT NOT NULL,
    usuario INT NOT NULL,
    PRIMARY KEY (id_jogador),
    FOREIGN KEY (arma)
        REFERENCES arma (id_arma),
    FOREIGN KEY (classe)
        REFERENCES classe (id_classe),
    FOREIGN KEY (usuario)
        REFERENCES usuario (id_usuario)
);

