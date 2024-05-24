<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/ContasController.php';

$contasController = new ContasController($pdo);
$contas = $contasController->listarContas();

$html = '<h2>Relatório das Despesas</h2>
<ul>';
foreach ($contas as $conta) {
    $html .= '<li>' 
    . ' <i><strong>ID:</strong></i> ' . $conta['id_conta'] 
    . ' <br><i><strong>Fornecedores:</strong></i> ' . $conta['fornecedores'] 
    . ' <br><i><strong>Salário/Benefícios:</strong></i> ' . $conta['salarios_benef'] 
    . ' <br><i><strong>Aluguel:</strong></i> ' . $conta['aluguel'] 
    . ' <br><i><strong>Contas Públicas:</strong></i> ' . $conta['contas_publicas'] 
    . ' <br><i><strong>Impostos:</strong></i> ' . $conta['impostos'] 
    . ' <br><i><strong>Empréstimos:</strong></i> ' . $conta['emprestimos'] 
    . ' <br><i><strong>Manutenção:</strong></i> ' . $conta['manutencao'] 
    . ' <br><i><strong>Seguros:</strong></i> ' . $conta['seguros'] 
    . ' <br><i><strong>Marketing:</strong></i> ' . $conta['marketing'] 
    . ' <br><i><strong>Despesas de Escritório:</strong></i> ' . $conta['despesas_adm'] 
    . ' <br><i><strong>Logística:</strong></i> ' . $conta['logistica'] 
    . ' <br><i><strong>Pesquisa:</strong></i> ' . $conta['pesquisa'] 
    . ' <br><i><strong>Garantia:</strong></i> ' . $conta['garantia'] . '</li>';
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