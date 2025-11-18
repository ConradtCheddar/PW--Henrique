<?php

function conectaBD(){
    $servername = 'localhost';
    $username = 'root';
    $password = 'admin';
    $dbname = 'webti';

    return new PDO("mysql:host=$servername,dbname=$dbname", $username, $password);
    
}

function cadastraUsuario($nome,$email,$login,$senha){
    $con= conectaBD();
    $smt =$con -> prepare("insert into usuarios (nome, email, login, senha) values()")
}