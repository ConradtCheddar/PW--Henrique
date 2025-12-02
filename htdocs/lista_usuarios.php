<div class="conteiner">
    <h1>lista de usuarios</h1>
<form method="GET" action="lista_usuarios.php" class="search-box">
    <input 
        type="text" 
        name="busca" 
        placeholder="Pesquisar por nome ou email..." 
        value="<?php echo isset($_GET['busca']) ? htmlspecialchars($_GET['busca']) : ''; ?>"
    >
    <button type="submit">Buscar</button>
    <?php if (isset($_GET['busca']) && $_GET['busca'] != ''): ?>
        <a href="lista_usuarios.php">limpar</a>
    <?php endif; ?>
</form>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>email</th>
        </tr>
        <?php 
require_once "conexao.php";

if (isset($_GET['busca']) && !empty(trim($_GET['busca']))) {
    $termo = trim($_GET['busca']);
    $usuarios = buscarUsuarios($termo);
    echo "<p>Resultados para: <strong>" . htmlspecialchars($termo) . "</strong></p>";
} else {
    $usuarios = listarUsuario();
}
        foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo htmlspecialchars($usuario['id']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                    <td><a href="editar_usuario.php?id=<?=$usuario['id']; ?>">editar</td>
                   <td><a href="processa_deleta.php?id=<?=$usuario['id']; ?>">deletar</a></td>
                </tr>
        <?php endforeach; ?>

    </table>
     <a href="login_usuario.php">loggout</a>
</div>