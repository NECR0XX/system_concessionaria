<?php
require_once '../../Config/config.php';
require_once '../Rh/app/controller/controleRh.php';

$controleRhModel = new controleRhModel($pdo);
$controles = $controleRhModel->listarControleRhs();

$html = '<h2>Relatório do RH</h2>
<ul>';
foreach ($controles as $controlerh) {
    $html .= '<li>' 
    . ' <i><strong>ID:</strong></i> ' . $controlerh['id'] 
    . ' <br><i><strong>Nome:</strong></i> ' . $controlerh['nome'] 
    . ' <br><i><strong>Email:</strong></i> ' . $controlerh['email'] 
    . ' <br><i><strong>Senha:</strong></i> ' . $controlerh['senha'] 
    . ' <br><i><strong>Tipo:</strong></i> ' . $controlerh['tipo'] 
    . ' <br><i><strong>Nome do Pai:</strong></i> ' . $controlerh['nome_pai'] 
    . ' <br><i><strong>Nome da Mãe:</strong></i> ' . $controlerh['nome_mae'] 
    . ' <br><i><strong>Naturalidade:</strong></i> ' . $controlerh['naturalidade'] 
    . ' <br><i><strong>UF:</strong></i> ' . $controlerh['uf'] 
    . ' <br><i><strong>Data de Nascimento:</strong></i> ' . $controlerh['data_nascimento'] 
    . ' <br><i><strong>Deficiente Físico:</strong></i> ' . $controlerh['deficiente_fisico'] 
    . ' <br><i><strong>Raça/Cor:</strong></i> ' . $controlerh['raca_cor'] 
    . ' <br><i><strong>Sexo:</strong></i> ' . $controlerh['sexo'] 
    . ' <br><i><strong>Estado Civil:</strong></i> ' . $controlerh['estado_civil'] 
    . ' <br><i><strong>Grau de Instrução:</strong></i> ' . $controlerh['grau_instrucao'] 
    . ' <br><i><strong>Endereço:</strong></i> ' . $controlerh['endereco'] 
    . ' <br><i><strong>Número:</strong></i> ' . $controlerh['numero'] 
    . ' <br><i><strong>Complemento:</strong></i> ' . $controlerh['complemento'] 
    . ' <br><i><strong>CEP:</strong></i> ' . $controlerh['cep'] 
    . ' <br><i><strong>Bairro:</strong></i> ' . $controlerh['bairro'] 
    . ' <br><i><strong>Cidade:</strong></i> ' . $controlerh['cidade'] 
    . ' <br><i><strong>Telefone:</strong></i> ' . $controlerh['telefone'] 
    . ' <br><i><strong>Celular:</strong></i> ' . $controlerh['celular'] 
    . ' <br><i><strong>Número da CTPS:</strong></i> ' . $controlerh['numero_ctps'] 
    . ' <br><i><strong>Série:</strong></i> ' . $controlerh['serie'] 
    . ' <br><i><strong>UF da CTPS:</strong></i> ' . $controlerh['uf_rh'] 
    . ' <br><i><strong>Data de Expedição da CTPS:</strong></i> ' . $controlerh['data_expedicao_ctps'] 
    . ' <br><i><strong>PIS:</strong></i> ' . $controlerh['pis'] 
    . ' <br><i><strong>Data de Cadastro do PIS:</strong></i> ' . $controlerh['data_cadastro_pis'] 
    . ' <br><i><strong>RG:</strong></i> ' . $controlerh['rg_rh'] 
    . ' <br><i><strong>Data de Expedição do RG:</strong></i> ' . $controlerh['data_expedicao_rg'] 
    . ' <br><i><strong>CPF:</strong></i> ' . $controlerh['cpf_rh'] 
    . ' <br><i><strong>Título de Eleitor:</strong></i> ' . $controlerh['titulo_eleitor'] 
    . ' <br><i><strong>Zona:</strong></i> ' . $controlerh['zona'] 
    . ' <br><i><strong>Seção:</strong></i> ' . $controlerh['secao'] 
    . ' <br><i><strong>Dependentes:</strong></i> ' . $controlerh['dependentes'] 
    . ' <br><i><strong>Vale Transporte:</strong></i> ' . $controlerh['vale_transporte'] 
    . ' <br><i><strong>Horário de Trabalho:</strong></i> ' . $controlerh['horario_trabalho'] 
    . ' <br><i><strong>Entrada:</strong></i> ' . $controlerh['entrada'] 
    . ' <br><i><strong>Intervalo:</strong></i> ' . $controlerh['intervalo'] 
    . ' <br><i><strong>Saída:</strong></i> ' . $controlerh['saida'] 
    . ' <br><i><strong>Cargo:</strong></i> ' . $controlerh['cargo'] 
    . ' <br><i><strong>Data de Admissão:</strong></i> ' . $controlerh['data_admissao'] 
    . ' <br><i><strong>Data do Exame Médico:</strong></i> ' . $controlerh['data_exame_medico'] 
    . ' <br><i><strong>Experiência:</strong></i> ' . $controlerh['experiencia'] . '</li>';
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