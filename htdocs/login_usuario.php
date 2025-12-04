<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login">
        <h1>login de usuario</h1>
        <form action="processa_login.php" method="POST">
            <label for="nome">nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="email">email:</label>
            <input type="text" id="email" name="email" required><br><br>
            <label for="senha">senha:</label>
            <input type="text" id="senha" name="senha" required><br><br>
            <button>login</button>
        </form>
        <a href="cadastro_usuario.php">sem cadastro?</a>
    </div>
</body>

</html>