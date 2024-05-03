<?php
include '../../config/config.php';
include '../controller/rh.php';
$rhController = new RhController($pdo);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista do RH</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista do RH</h1></legend>
            <table border="1">
                <tr>
                    <th>Número CTPS</th>
                    <th>Série</th>
                    <th>UF RH</th>
                    <th>Data de Expedição CTPS</th>
                    <th>PIS</th>
                    <th>Data de Cadastro PIS</th>
                    <th>RG RH</th>
                    <th>Data de Expedição RG</th>
                    <th>CPF RH</th>
                    <th>Título de Eleitor</th>
                    <th>Zona Eleitoral</th>
                    <th>Seção Eleitoral</th>
                    <th>Dependentes</th>
                    <th>Vale Transporte</th>
                    <th>Horário de Trabalho</th>
                    <th>Entrada</th>
                    <th>Intervalo</th>
                    <th>Saída</th>
                    <th>Cargo</th>
                    <th>Data de Admissão</th>
                    <th>Data de Exame Médico</th>
                    <th>Experiência</th>
                </tr>
                <?php foreach ($rhs as $rh): ?>
                    <tr>
                        <td><?php echo $rh['numero_ctps']; ?></td>
                        <td><?php echo $rh['serie']; ?></td>
                        <td><?php echo $rh['uf_rh']; ?></td>
                        <td><?php echo $rh['data_expedicao_ctps']; ?></td>
                        <td><?php echo $rh['pis']; ?></td>
                        <td><?php echo $rh['data_cadastro_pis']; ?></td>
                        <td><?php echo $rh['rg_rh']; ?></td>
                        <td><?php echo $rh['data_expedicao_rg']; ?></td>
                        <td><?php echo $rh['cpf_rh']; ?></td>
                        <td><?php echo $rh['titulo_eleitor']; ?></td>
                        <td><?php echo $rh['zona']; ?></td>
                        <td><?php echo $rh['secao']; ?></td>
                        <td><?php echo $rh['dependentes']; ?></td>
                        <td><?php echo $rh['vale_transporte']; ?></td>
                        <td><?php echo $rh['horario_trabalho']; ?></td>
                        <td><?php echo $rh['entrada']; ?></td>
                        <td><?php echo $rh['intervalo']; ?></td>
                        <td><?php echo $rh['saida']; ?></td>
                        <td><?php echo $rh['cargo']; ?></td>
                        <td><?php echo $rh['data_admissao']; ?></td>
                        <td><?php echo $rh['data_exame_medico']; ?></td>
                        <td><?php echo $rh['experiencia']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </fieldset>
</body>
</html>
