<!DOCTYPE html>
<html>
<head>
    <title>Lista de Dados dos Usuários</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de Dados dos Usuários</h1></legend>
            <table border="1">
                <tr>
                    <th>Nome do Pai</th>
                    <th>Nome da Mãe</th>
                    <th>Naturalidade</th>
                    <th>UF</th>
                    <th>Data de Nascimento</th>
                    <th>Deficiente Físico</th>
                    <th>Raça/Cor</th>
                    <th>Sexo</th>
                    <th>Estado Civil</th>
                    <th>Grau de Instrução</th>
                </tr>
                <?php foreach ($dados as $dado): ?>
                    <tr>
                        <td><?php echo $dado['nome_pai']; ?></td>
                        <td><?php echo $dado['nome_mae']; ?></td>
                        <td><?php echo $dado['naturalidade']; ?></td>
                        <td><?php echo $dado['uf']; ?></td>
                        <td><?php echo $dado['data_nascimento']; ?></td>
                        <td><?php echo $dado['deficiente_fisico']; ?></td>
                        <td><?php echo $dado['raca_cor']; ?></td>
                        <td><?php echo $dado['sexo']; ?></td>
                        <td><?php echo $dado['estado_civil']; ?></td>
                        <td><?php echo $dado['grau_instrucao']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </fieldset>
</body>
</html>
