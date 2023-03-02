CREATE TABLE cliente(
    id_cliente INT(100) AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	senha VARCHAR(200) NOT NULL,
	PRIMARY KEY (id_cliente));
	
	
INSERT INTO cliente VALUES (NULL, "Noemi","neomi@gmail.com", MD5('123'));
INSERT INTO cliente VALUES (NULL, "Matheus","matheus@gmail.com",  MD5('123'));
INSERT INTO cliente VALUES (NULL, "Julian","Julian@gmail.com",  MD5('123'));

