<?php 

// a) Escreva um SELECT que retorne o nome_estado com valor ‘Paraná’.
$sql = "SELECT nome_estado from estado WHERE nome_estado = 'Paraná'";

// b) Escreva um SELECT que retorne todas as tuplas com o “nome_estado” e o “nome_pais”.
$sql = "SELECT estado.nome_estado, pais.nome_pais FROM estado, pais";

/* c) Altere a tabela “pais” para adicionar um novo campo de nome “sigla” com limite para 2 caracteres. 
 Escreva abaixo o comando utilizado para realizar esta tarefa. */
$sql = "ALTER TABLE pais ADD sigla char(2)";

/* d) Crie uma nova tabela chamada “cidade” com as colunas “id”, “nome_cidade” 
e “id_estado” sendo a coluna “id” uma Primary Key com Auto Increment 
e “id_estado” uma Foreign Key da coluna “id” da tabela “estado”. */
$sql = "CREATE TABLE cidade (id int(11) NOT NULL AUTO_INCREMENT, nome_cidade text, id_estado int(11), PRIMARY KEY (id),
    FOREIGN KEY (id_estado) REFERENCES estado(id))"; 