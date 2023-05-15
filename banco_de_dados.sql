CREATE TABLE cliente(
    id_cliente INT(100) AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	senha VARCHAR(200) NOT NULL,
	PRIMARY KEY (id_cliente));
	
	
INSERT INTO cliente VALUES (NULL, "Noemi","neomi@gmail.com", MD5('123'));
INSERT INTO cliente VALUES (NULL, "Matheus","matheus@gmail.com",  MD5('123'));
INSERT INTO cliente VALUES (NULL, "Nefi","Nefi@gmail.com",  MD5('123'));

CREATE TABLE produtos(
    id_produtos INT(100) AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	descricao VARCHAR(500) NOT NULL,
	link VARCHAR(500) NOT NULL,
	imagem VARCHAR(250),
	PRIMARY KEY (id_produtos));
	fk_cliente INT 

INSERT INTO produtos VALUES (NULL, "Tv","linda e bonita", "https://www.amazon.com.br/SMART-SAMSUNG-UN55AU7700-CRYSTAL-3HDMI/dp/B09DTL4BGW/ref=asc_df_B09DTL4BGW/?tag=googleshopp00-20&linkCode=df0&hvadid=379708086870&hvpos=&hvnetw=g&hvrand=1819333425767466966&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1031754&hvtargid=pla-1513847219493&psc=1");
INSERT INTO produtos VALUES (NULL, "celular","lindo e bonita", "https://ailosaproxima.coop.br/loja/malibu-shop/produto/3799399/iphone-14-pro-256gb-roxo-profundo?gclid=EAIaIQobChMIyYLPjcjP_QIVkDizAB2nOA_xEAQYBCABEgIBmPD_BwE");
INSERT INTO produtos VALUES (NULL, "roteador","linda e bonita", "https://www.timix.com.br/c9115axe-z.html?gclid=EAIaIQobChMI7qqMnMjP_QIVtP7jBx3SZwC3EAQYBCABEgKy3vD_BwE");
INSERT INTO produtos VALUES (NULL, "relogio","linda e bonita", "https://www.montblanc.com.br/relogio-automatico-1858-iced-sea-129369/p?gclid=EAIaIQobChMIoYG4qMjP_QIVhMqUCR3IMQV2EAQYASABEgJ1u_D_BwE&gclsrc=aw.ds");
INSERT INTO produtos VALUES (NULL, "gps","linda e bonita", "https://www.amazon.com.br/Sonar-Garmin-Striker-Transdutor-GT20-TM/dp/B08Q8Q6FDZ/ref=asc_df_B08Q8Q6FDZ/?tag=googleshopp00-20&linkCode=df0&hvadid=379706799010&hvpos=&hvnetw=g&hvrand=9529927348036088364&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1031754&hvtargid=pla-1120646337981&psc=1");