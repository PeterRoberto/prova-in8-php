<?php
include('connect.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_DEFAULT);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_DEFAULT);


try{
    $connection = $cms_connection->prepare("INSERT INTO USUARIOS(nome, email, nascimento, telefone) VALUES (:nome, :email, :nascimento, :telefone)");
    $connection->bindParam(":nome", $nome, PDO::PARAM_STR);
    $connection->bindParam(":email", $email, PDO::PARAM_STR);
    $connection->bindParam(":nascimento", $nascimento, PDO::PARAM_STR);
    $connection->bindParam(":telefone", $telefone, PDO::PARAM_STR);
    $connection->execute();
}
catch(PDOException $ex){ 
    echo 0;
    exit;
}

header('Location: /prova-pratica-php/public/');
