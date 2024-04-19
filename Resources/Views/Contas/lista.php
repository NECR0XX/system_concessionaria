<!DOCTYPE html>
<html>
<head>
    <title>Lista de Competidores</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de Competidores</h1></legend>
            <table border="1">
                <tr>
                    <th>ID da Conta</th>
                    <th>Fornecedores</th>
                    <th>Salarios e Benefícios</th>
                    <th>Aluguel</th>
                    <th>Contas Publicas</th>
                    <th>Impostos</th>
                    <th>Emprestimos</th>
                    <th>Manutenção</th>
                    <th>Seguros</th>
                    <th>Marketing</th>
                    <th>Despesas Admnistrativas</th>
                    <th>Logistica</th>
                    <th>Pesquisa</th>
                    <th>Garantia</th>
                </tr>
                <?php foreach ($competidores as $competidor): ?>
                    <tr>
                        <td><?php echo $competidor['id_conta']; ?></td>
                        <td><?php echo $competidor['fornecedores']; ?></td>
                        <td><?php echo $competidor['salarios_benef']; ?></td>
                        <td><?php echo $competidor['aluguel']; ?></td>
                        <td><?php echo $competidor['contas_publicas']; ?></td>
                        <td><?php echo $competidor['impostos']; ?></td>
                        <td><?php echo $competidor['emprestimos']; ?></td>
                        <td><?php echo $competidor['manutencao']; ?></td>
                        <td><?php echo $competidor['seguros']; ?></td>
                        <td><?php echo $competidor['marketing']; ?></td>
                        <td><?php echo $competidor['despesas_adm']; ?></td>
                        <td><?php echo $competidor['logistica']; ?></td>
                        <td><?php echo $competidor['pesquisa']; ?></td>
                        <td><?php echo $competidor['garantia']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </fieldset>
</body>
</html>