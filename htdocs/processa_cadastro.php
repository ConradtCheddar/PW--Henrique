<?php

if (!isset($_POST["nome"]) || !isset($_POST["email"]) || !isset($_POST["senha"])) {
    header("Location: cadastro_usuario.php?error=faltando_dados");
    exit();
}

require_once "conexao.php";

cadastraUsuario($_POST["nome"], $_POST["email"], $_POST["senha"]);

header('Location: login_usuario.php');
exit();

?>

