<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/FrotaController.php';

$frotaController = new FrotaController($pdo);
$frotas = $frotaController->listarFrotas();

$html = '<h2>Relatório de Frota de Veículos</h2>
<ul>';
foreach ($frotas as $frota) {
    $html .= '<li>' 
    . ' <i><strong>ID:</strong></i> ' . $frota['id_frota'] 
    . ' <br><i><strong>Marca/Modelo do Carro:</strong></i> ' . $frota['marca_modelo'] 
    . ' <br><i><strong>Ano de Fabricação:</strong></i> ' . $frota['ano_fabricacao'] 
    . ' <br><i><strong>Placa:</strong></i> ' . $frota['placa'] 
    . ' <br><i><strong>Número da Chassi:</strong></i> ' . $frota['numero_chassi'] 
    . ' <br><i><strong>Tipo de Veículo:</strong></i> ' . $frota['tipo_veiculo'] 
    . ' <br><i><strong>Tipo de combustível:</strong></i> ' . $frota['tipo_combustivel'] 
    . ' <br><i><strong>Quilometragem:</strong></i> ' . $frota['quilometragem'] 
    . ' <br><i><strong>Data da Próxima Revisão:</strong></i> ' . $frota['data_prox_rev'] 
    . ' <br><i><strong>Histórico de Manutenção:</strong></i> ' . $frota['historico_manutencao'] 
    . ' <br><i><strong>Seguro:</strong></i> ' . $frota['seguro'] 
    . ' <br><i><strong>Documentação:</strong></i> ' . $frota['documentacao'] 
    . ' <br><i><strong>Localização Atual:</strong></i> ' . $frota['localizacao_atual'] 
    . ' <br><i><strong>Responsável:</strong></i> ' . $frota['responsavel'] 
    . ' <br><i><strong>Status:</strong></i> ' . $frota['status'] 
    . ' <br><i><strong>Observações:</strong></i> ' . $frota['observacoes'] 
    . ' <br><i><strong>Imagem do Veículo:</strong></i> ' . $frota['imagem'] . '</li>';
}
$html .= '</ul>';

require_once '../../vendor/autoload.php';

// referenciando o namespace do dompdf
use Dompdf\Dompdf;

// instanciando o dompdf
$dompdf = new Dompdf();

// inserindo o HTML que queremos converter
$dompdf->loadHtml($html);

// Definindo o papel e a orientação
$dompdf->setPaper('A4', 'landscape');

// Renderizando o HTML como PDF
$dompdf->render();

// Enviando o PDF para o browser
$dompdf->stream();
?>