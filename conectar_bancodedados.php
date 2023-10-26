<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";

// Criar conexão
$conexao = new mysqli($servidor, $usuario, $senha);

if($conexao->connect_error) {
    die ("Conexao falhou: " . $conexao->connect_error);
}

echo "Conectado com sucesso";

// Criar banco de dados
$sql = "CREATE DATABASE IF NOT EXISTS cliente";
if ($conexao->query($sql) === TRUE) {
    echo "<br> Banco de dados 'Cliente' criado com sucesso";
}
else {
    echo "Erro ao criar o banco de dados: " . $conexao->error;
}

// Criar tabela no banco
$sql = "
     CREATE TABLE IF NOT EXISTS cliente.cadastrar (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(45) NOT NULL,
        email VARCHAR(45) NOT NULL,
        senha VARCHAR(45) NOT NULL,
        sexo CHAR(1)

     )
";

if ($conexao->query($sql) === TRUE) {
    echo "<br> Tabela criada com sucesso";
}
else {
    echo "Erro ao criar a tabela: " . $conexao->error;
}

// Inserir valor na tabela clientes
$sql = "
     INSERT INTO cliente.cadastrar (nome, email, senha, sexo)
     VALUES ('Cristina', 'crys_souza26@hotmail.com', '1234', 'Feminino')
";
if ($conexao->query($sql) === TRUE) {
    echo "<br> Dado inserido com sucesso";
}
else {
    echo "Erro ao inserir dados na tabela: " . $conexao->error;
}

?>