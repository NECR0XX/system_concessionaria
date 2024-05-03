<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de Usuários</h1></legend>
            <table border="1">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Tipo</th>
                </tr>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario['nome']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td><?php echo $usuario['senha']; ?></td>
                        <td><?php echo $usuario['tipo']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </fieldset>
</body>
</html>
