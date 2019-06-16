
use memorias_do_caos_antigo;
DROP TABLE IF EXISTS classe;
CREATE TABLE `memorias_do_caos_antigo`.`classe` (
    `idClasse` INT NOT NULL,
    `tipo` INT NOT NULL,
    `forca` INT NOT NULL,
    `agilidade` INT NOT NULL,
    `destreza` INT NOT NULL,
    `vida` INT NOT NULL,
    `energia` INT NOT NULL,
    PRIMARY KEY (`idClasse`)
);

use memorias_do_caos_antigo;
DROP TABLE IF EXISTS `personagem`;
CREATE TABLE `memorias_do_caos_antigo`.`personagem` (
  `id_personagem` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `descricao` VARCHAR(45) NULL,
  `imagem` VARCHAR(45) NULL,
  `id_classe` INT NULL,
  PRIMARY KEY (`id_personagem`),
    FOREIGN KEY (`id_classe`)
    REFERENCES `memorias_do_caos_antigo`.`classe` (`idClasse`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

use memorias_do_caos_antigo;
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `memorias_do_caos_antigo`.`usuario` (
    `idUsuario` INT NOT NULL,
    `nome` VARCHAR(45) NOT NULL,
    `email` VARCHAR(45) UNIQUE NOT NULL,
    `senha` VARCHAR(50) NOT NULL,
    `nivel_acesso` INT NOT NULL,
    `idPersonagem` INT NOT NULL,
    FOREIGN KEY (`idPersonagem`)
  REFERENCES `memorias_do_caos_antigo`.`personagem` (`id_personagem`),
    PRIMARY KEY (`idUsuario`)
);