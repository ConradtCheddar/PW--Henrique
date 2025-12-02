<?php
require_once "conexao.php";

if (!isset($_GET['id'])) {
    header("location: lista_usuarios.php?error=id_ausente");
    exit();
}

$id = $_GET['id'];
if (deleteUsuario($id)) {
    header("Location: lista_usuarios.php?success=deletado");
} else {
    header("Location: lista_usuarios.php?error=falha_deletar");
}
exit;
?>