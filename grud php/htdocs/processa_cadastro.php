<?php
if (!isset($_POST["nome"]) || !isset($_POST["email"]) || !isset($_POST["senha"])) {
    header("location: cadastro_usuario.php?error=faltando_dados");
    exit();
}
require_once "conexao.php";

cadastraUsuario(($_POST["nome"]),($_POST["email"]),($_POST["senha"]));
$currentUserID = $id


header('Location: lista_usuarios.php');
exit; 
?>