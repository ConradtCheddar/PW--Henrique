<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>

<body>
    <h1>cadastro de usuario</h1>
    <div class="cadastro"></div>
    <form action="processa_cadastro.php" method="POST">
        <label for="nome">nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="email">email:</label>
        <input type="text" id="email" name="email" required><br><br>
        <label for="senha">senha:</label>
        <input type="text" id="senha" name="senha" required><br><br>
        <button>cadastrar</button>
    </form>
    <a href="login_usuario.php">ja tem conta?</a>

</body>

</html>