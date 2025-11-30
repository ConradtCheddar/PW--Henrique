<?php

function conectaBD()
{
    $servername = 'localhost:3307';
    $username = 'root';
    $password = '';
    $dbname = 'webti';

    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
conectaBD();

function cadastraUsuario($nome, $email, $senha)
{
    $con = conectaBD();
    $stmt = $con->prepare("insert into usuarios (nome, email, senha) values(:nome, :email, :senha)");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    return $stmt->execute();
}

function deleteUsuario($id)
{
    $con = conectaBD();
    $stmt = $con->prepare("delete from usuarios where id = :id");
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}

function updateUsuario($nome, $email, $senha, $id)
{
    $con = conectaBD();
    $stmt = $con->prepare("update usuarios set nome = :nome, email = :email, senha = :senha where id = :id");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}

function getUsuario($id)
{
    $con = conectaBD();
    $stmt = $con->prepare("select * from usuarios where id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function deletaTudo()
{
    for ($i = 1; $i < 100; $i++) {
        deleteUsuario($i);
    }
}


?>


