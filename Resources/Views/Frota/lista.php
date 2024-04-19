<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento da Frota de Veículos</title>
</head>
<body>
    <h1>Frota de Veículos</h1>
    <?php foreach ($frotas as $frota): ?>
        <ul>
            <li>
                <?php
                if (!empty($frota['imagem'])) {
                    echo '<img src="' . $frota['imagem'] . '" alt="Imagem do Livro" width="100">';
                } else {
                    echo 'Sem Imagem';
                }
                ?>
            </li>
            <li><strong>ID: </strong>
            <?php echo $frota['id_frota']; ?>
            </li>
            <li><strong>Marca: </strong> e Modelo
            <?php echo $frota['marca_modelo']; ?>
            </li>
            <li><strong>Ano: </strong> de Fabricação
            <?php echo $frota['ano_fabricacao']; ?>
            </li>
            <li><strong>Placa: </strong>
            <?php echo $frota['placa']; ?>
            </li>
            <li><strong>Número: </strong> do Chassi
            <?php echo $frota['numero_chassi']; ?>
            </li>
            <li><strong>Tipo: </strong> de Veículo
            <?php echo $frota['tipo_veiculo']; ?>
            </li>
            <li><strong>Tipo: </strong> de Combustível
            <?php echo $frota['tipo_combustivel']; ?>
            </li>
            <li><strong>Quilometragem: </strong>
            <?php echo $frota['quilometragem']; ?>
            </li>
            <li><strong>Próxima: </strong> Revisão
            <?php echo $frota['data_prox_rev']; ?>
            </li>
            <li><strong>Histórico: </strong> de Manutenção
            <?php echo $frota['historico_manutencao']; ?>
            </li>
            <li><strong>Seguro: </strong>
            <?php echo $frota['seguro']; ?>
            </li>
            <li><strong>Documentação: </strong>
            <?php echo $frota['documentacao']; ?>
            </li>
            <li><strong>Localização: </strong> Atual
            <?php echo $frota['localizacao_atual']; ?>
            </li>
            <li><strong>Responsável: </strong>
            <?php echo $frota['responsavel']; ?>
            </li>
            <li><strong>Status: </strong>
            <?php echo $frota['status']; ?>
            </li>
            <li><strong>Observações: </strong>
            <?php echo $frota['observacoes']; ?>
            </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>