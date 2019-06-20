-- insere o usuario administrador no banco
insert into usuario (email,senha,nome,nivel_acesso)
	values ('admin@admin.com', 'administrador','Administrador','0');

-- insere as classes
insert into classe (vida, energia, forca, destreza, agilidade, nome)
	values ('11','12','13','13','5','Guerreiro');

insert into classe (vida, energia, forca, destreza, agilidade, nome)
	values ('9','9','9','15','15','Ladino');
    
insert into classe (vida, energia, forca, destreza, agilidade, nome)
	values ('8','8','9','11','10','Mago');
    
insert into classe (vida, energia, forca, destreza, agilidade, nome)
	values ('14','10','11','11','6','Paladino');
    
insert into classe (vida, energia, forca, destreza, agilidade, nome)
	values ('9','11','9','14','13','Arqueiro');

-- insere as armas
INSERT INTO `memorias_do_caos_antigo`.`arma` ( `nome`, `dano_corte`, `dano_perfuracao`, `dano_esmagador`,`imagem`) VALUES ('Adaga', '35', '100', '0','images/dagger.png');
INSERT INTO `memorias_do_caos_antigo`.`arma` ( `nome`, `dano_corte`, `dano_perfuracao`, `dano_esmagador`,`imagem`) VALUES ('Arco Composto', '10', '100', '0','images/bow.png');
INSERT INTO `memorias_do_caos_antigo`.`arma` ( `nome`, `dano_corte`, `dano_perfuracao`, `dano_esmagador`,`imagem`) VALUES ('Machado da Tropa', '50', '10', '70','images/axe.png');
INSERT INTO `memorias_do_caos_antigo`.`arma` ( `nome`, `dano_corte`, `dano_perfuracao`, `dano_esmagador`,`imagem`) VALUES ('Espada Longa', '60', '45', '30','images/claymore.png');
INSERT INTO `memorias_do_caos_antigo`.`arma` ( `nome`, `dano_corte`, `dano_perfuracao`, `dano_esmagador`,`imagem`) VALUES ('Espada da Cura', '45', '60', '10','images/sword.png');
INSERT INTO `memorias_do_caos_antigo`.`arma` ( `nome`, `dano_corte`, `dano_perfuracao`, `dano_esmagador`,`imagem`) VALUES ('Cimitarra', '90', '30', '5','images/scimitar.png');
INSERT INTO `memorias_do_caos_antigo`.`arma` ( `nome`, `dano_corte`, `dano_perfuracao`, `dano_esmagador`,`imagem`) VALUES ('Espada do Julgamento', '40', '30', '80','images/ultra-greatsword.png');

-- insere os inimigos
INSERT INTO `memorias_do_caos_antigo`.`inimigo` (`nome`, `descricao`, `imagem`,`usuario`) VALUES ('Cavaleiro Tempestuoso', 'Valoroso campeão do rei, perdera todo o prestigio que conquistou durante anos em batalhas espetaculares quando fora convocado para liderar a força espedicionaria vermelha que lutou contra os cavaleiros dos Sinos em uma destas campanhas tudo mudou quando deparou-se com uma jóia descrita pelos seus portadores como uma dádiva vinda do céu.', 'https://i.pinimg.com/564x/f2/49/3c/f2493ca1297ecfdf61d16007fde0c2b1.jpg','1');
INSERT INTO `memorias_do_caos_antigo`.`inimigo` (`nome`, `descricao`, `imagem`,`usuario`) VALUES ('Mestre das Trancas', 'Além de construirem as inumeras estátuas de Teville a chama do céu, também construiram as trancas mais seguras de toda a Dônia. Seus segredos acompanhavam-os até o tpumulo após completarem um último trabalho a Horian, o Fantasma guarda o maior segredo do rei.', 'https://cdna.artstation.com/p/assets/images/images/005/038/284/large/ankou-schnee-14361278-1179445815411645-2485188510628170237-o.jpg?1488048710','1');
INSERT INTO `memorias_do_caos_antigo`.`inimigo` (`nome`, `descricao`, `imagem`,`usuario`) VALUES ('Bruxa das Raízes', 'A antiga reinha Vermelha, a qual lhe foi conferida a culpa da traição com os grandes antigos, sucumbiu a lâmina de seu amado. A mulher recusou-se a descansar e seu lamento trouxe de volta uma antiga lenda a qual a Azaléia e suas raízes absorveram toda a enregia de um determinado local.', 'https://3.bp.blogspot.com/-f0aR0JG-lNE/XAP0z8VFQUI/AAAAAAABpbU/AinoGEzFibEFXd8dc7azquVdXxEtA1e2ACLcBGAs/s1600/andrei-riabovitchev-witch-full-body-v002.jpg','1');
INSERT INTO `memorias_do_caos_antigo`.`inimigo` (`nome`, `descricao`, `imagem`,`usuario`) VALUES ('Gale', 'O antigo guerreiro quebra armaduras, valoroso combatente do exercito vermelho possui um passado nebuloso, antigo companheiro de cavaleiro tempestuoso teve contato com um artefato de muito valor creditado a eles pelos adoradores de Previan, a origem dos artefatos é incerta.', 'https://i.pinimg.com/originals/72/d7/03/72d7039f9d528aadd3fd6c8f68893ead.jpg','1');

-- insere personagens
INSERT INTO `memorias_do_caos_antigo`.`personagem` (`nome`, `descricao`, `imagem`,`usuario`) VALUES ('R. Letalin', 'Primeiro e único filho do rei Egjor que ergueu o grande muro de Folon separando seu reino do restante de Dônia após o caos instaurado na Revolta vermelha. Desde cedo demonstrou grande afeição para a magia, o que fez com que tivesse uma educação de qualidade com os estudiosos do Alto contratados a peso de Enco, seu grande professor, Advlir, o mestre da matilha, ensinou-o a poderosa habilidade de invocar cães espirituais sempre que necessitasse de proteção, movido pela curiosidade do que havia além da muralha,Letalin lançou-se em uma aventura com mais três estranhos às margens do Jarnh.', 'https://i.pinimg.com/564x/40/c7/af/40c7af0e1946262f98c8882a877b5a6f.jpg','1');
INSERT INTO `memorias_do_caos_antigo`.`personagem` (`nome`, `descricao`, `imagem`,`usuario`) VALUES ('Hayoo', 'Criado nas ruas das terras geladas do Alto pela guilda dos ladrões, ninguém sabe exatamente onde nascera, apenas que sua capacidade de se tornar invisível parecia ser um dom. Ordenado pelos seus mestres, Hayoo viajou ao longo do Jarnh até a grande muralha de Folon, onde deveria encontrar o principe e persuadí-lo a ir até Alto em uma falsa aventura onde a guilda poderia trancafiá-lo e extrair informações importantes.', 'https://i.pinimg.com/564x/ff/93/98/ff9398301f1208a7786e2570932ad832.jpg','1');
INSERT INTO `memorias_do_caos_antigo`.`personagem` (`nome`, `descricao`, `imagem`,`usuario`) VALUES ('Ethel', 'Filho perdido de Horian e herdeiro do trono vermelho ou, como as lendas o citam, o filho de Alva, cavaleiro amaldiçoado, fora salvo da morte prematura pelo melhor amigo do rei e acolhido pelos vigilantes da floresta, onde aprendeu a guerrear como nenhum outro e a controlar sua incomum perseverança, que alguns atribuem à sua origem sobrenatural.', 'https://i.pinimg.com/564x/51/b9/ed/51b9edfb271c0b56e15e4144603e1a9e.jpg','1');
INSERT INTO `memorias_do_caos_antigo`.`personagem` (`nome`, `descricao`, `imagem`,`usuario`) VALUES ('Thorello', 'Melhor amigo do rei louco e experiente estrategista, Thorello se viu em um impasse, deveria proteger o seu afilhado ou atender aos desejos de seu rei decadente? Thorello fugiu levando consigo o pequeno Ethel para as florestas ao leste onde ajudou a reerguer o grupo de vigilantes da floresta longe de toda a insanidade e carnificina que o exército de Horian estava protagonizando após as desavenças com a crença de Teville.', 'https://i.pinimg.com/originals/f6/c7/bc/f6c7bc7574d8818d9e0b278f5a0aa191.jpg','1');