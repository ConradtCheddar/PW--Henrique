<?php
require_once "conexao.php";
$usuarios = getUsuario($id);
?>
<div class = "conteiner">
    <h1>lista de usuarios</h1>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>email</th>
            <th>editar</th>
        </tr>
        <?php foreach ($usuarios as $usuarios): ?>
            <tr>
                <td><?php echo htmlspecialchars($usuarios['id']);?></td>
                <td><?php echo htmlspecialchars($usuarios['nome']);?></td>
                <td><?php echo htmlspecialchars($usuarios['email']);?></td>
                <td><a href="editar_usuario.php?id=<?php echo urlencode($usuarios['id']);?>">editar</td>
            </tr>
            <?php endforeach; ?>

    </table>
</div>