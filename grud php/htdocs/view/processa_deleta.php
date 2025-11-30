<?php
if (!isset($_POST["nome"]) || !isset($_POST["email"]) || !isset($_POST["senha"])) {
    header("location: cadastro_usuario.php?error=faltando_dados");
    exit();
}
require_once "conexao.php";

$id = $_GET['id'];
if (deleteUsuario($id)) {
    header("Location: ../View/telaListaUsuarios.php");
} else {
    echo "Erro ao deletar o usuário";
}


header('Location: lista_usuarios.php');
exit;
?>