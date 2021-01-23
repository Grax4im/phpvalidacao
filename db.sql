SELECT nome_estado FROM estado WHERE nome_estado = 'Paraná';

SELECT estado.nome_estado, pais.nome_pais 
FROM pais INNER JOIN estado
ON pais.id = estado.id_pais;

ALTER TABLE pais ADD sigla VARCHAR(2);

CREATE TABLE cidade (
    id int AUTO_INCREMENT,
    nome_cidade VARCHAR(50),
    id_estado int,
    PRIMARY KEY (id),
    FOREIGN KEY (id_estado) REFERENCES estado(id)
) 