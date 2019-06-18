use memorias_do_caos_antigo;

insert into classe (vida, energia, forca, destreza, agilidade, nome)
	values ('1','2','3','4','5','ladino');
    
insert into arma (nome, dano_corte, dano_perfuracao, dano_esmagador)
	values ('adaga', '100', '35', '0');

insert into inimigo (descricao, imagem, nome)
	values ('Valoroso campeão do rei, perdera todo o prestigio que conquistou durante anos em batalhas espetaculares quando fora convocado para liderar a força espedicionaria vermelha que lutou contra os cavaleiros dos Sinos em uma destas campanhas tudo mudou quando deparou-se com uma jóia descrita pelos seus portadores como uma dádiva vinda do céu.',
    'https://i.pinimg.com/564x/f2/49/3c/f2493ca1297ecfdf61d16007fde0c2b1.jpg', 'Cavaleiro Tempestuoso');

insert into usuario (email, senha, nome, nivel_acesso)
	values ('admin@admin.com', 'admin', 'admin', '1');
    
insert into personagem (nome, origem, imagem, arma, classe)
	values ('Hayoo', 'Criado nas ruas das terras geladas do Alto pela guilda dos ladrões, ninguém sabe exatamente onde nascera, apenas que sua capacidade de se tornar invisível parecia ser um dom. Ordenado pelos seus mestres, Hayoo viajou ao longo do Jarnh até a grande muralha de Folon, onde deveria encontrar o principe e persuadí-lo a ir até Alto em uma falsa aventura onde a guilda poderia trancafiá-lo e extrair informações importantes.',
    'https://i.pinimg.com/564x/ff/93/98/ff9398301f1208a7786e2570932ad832.jpg','1', '1');