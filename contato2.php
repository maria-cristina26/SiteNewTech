<?php

$nome = $email = $telefone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = validar_input($_POST["nome"]);
    $email = validar_input($_POST["email"]);
    $telefone = validar_input($_POST["telefone"]);

    echo $nome ." - " . $email . " - " . $telefone;
}

else {
    echo "Método não é POST";
}

function validar_input($dado){
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}







?>