<?php
include '../../config/config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Endereço</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de Endereços</h1></legend>
            <table border="1">
                <tr>
                    <th>Endereço</th>
                    <th>Número</th>
                    <th>Complemento</th>
                    <th>CEP</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                </tr>
                <?php foreach ($enderecos as $endereco): ?>
                    <tr>
                        <td><?php echo $endereco['endereco']; ?></td>
                        <td><?php echo $endereco['numero']; ?></td>
                        <td><?php echo $endereco['complemento']; ?></td>
                        <td><?php echo $endereco['cep']; ?></td>
                        <td><?php echo $endereco['bairro']; ?></td>
                        <td><?php echo $endereco['cidade']; ?></td>
                        <td><?php echo $endereco['telefone']; ?></td>
                        <td><?php echo $endereco['celular']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </fieldset>
</body>
</html>
