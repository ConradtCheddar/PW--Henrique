<?php
if (!isset($_POST["nome"]) || !isset($_POST["email"]) || !isset($_POST["senha"]) || !isset($_POST["id"])) {
    header("location: editar_usuario.php?error=faltando_dados");
    exit();
}

require_once "conexao.php";

$id = $_POST['id'];
$nome = trim($_POST["nome"]);
$email = trim($_POST["email"]);
$senha = trim($_POST["senha"]);

updateUsuario($nome, $email, $senha, $id);

header('Location: lista_usuarios.php?success=atualizado');
exit;
?>