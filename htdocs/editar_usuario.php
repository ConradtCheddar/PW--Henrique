<?php
require_once "conexao.php";

$url = $_SERVER['REQUEST_URI']; 
$partes = explode("=", $url);
$id = end($partes);

$usuario = getUsuario($id);

if (!$usuario) {
    header('Location: lista_usuarios.php?error=usuario_nao_encontrado');
    exit;
}

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
</head>
<body >
    <h1>editar usuario</h1>
    <div class = "editar"></div>
    <form action="processa_editar.php" method="POST">
    <input type="hidden" name="id" value="<?=$usuario['id']; ?>">
    
    <label for="nome">nome:</label>
    <input type="text" id="nome" name="nome" value="<?=htmlspecialchars($usuario['nome']); ?>" required><br><br>
    
    <label for="email">email:</label>
    <input type="email" id="email" name="email" value="<?=htmlspecialchars($usuario['email']); ?>" required><br><br>
    
    <label for="senha">senha:</label>
    <input type="password" id="senha" name="senha" value="<?=htmlspecialchars($usuario['senha']); ?>" required><br><br>
    
    <button>editar</button>
</form>
    
</body>
</html>