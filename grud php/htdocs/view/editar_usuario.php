<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body >
    <?php
    require_once "conexao.php";
    $usuarios = getUsuario($id);
    ?>
    <h1>editar usuario</h1>
    <div class = "editar"></div>
    <form action="processa_editar.php" method="POST">
        <label for="nome">nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
         <label for="email">email:</label>
        <input type="text" id="email" name="email" required><br><br>
         <label for="senha">senha:</label>
        <input type="text" id="senha" name="senha" required><br><br>
        <button>editar</button>
    </form>
    
</body>
</html>