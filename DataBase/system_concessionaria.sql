-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Abr-2024 às 20:26
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `system_concessionaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comercial`
--

CREATE TABLE `comercial` (
  `id_comercial` int(11) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `telefone_cliente` varchar(255) NOT NULL,
  `email_cliente` varchar(255) NOT NULL,
  `identificacao_cliente` varchar(255) NOT NULL,
  `marca_car` varchar(255) NOT NULL,
  `modelo_car` varchar(255) NOT NULL,
  `caracteristicas_car` text NOT NULL,
  `preco_car` int(11) NOT NULL,
  `numero_chassi` int(11) NOT NULL,
  `data_venda` date NOT NULL,
  `tipo_transacao` int(11) NOT NULL,
  `foma_paga` varchar(255) NOT NULL,
  `nota_fiscal` int(11) NOT NULL,
  `valor_total` int(11) NOT NULL,
  `canal_venda` varchar(255) NOT NULL,
  `vendedor` varchar(255) NOT NULL,
  `estado_transacao` enum('aprovado','cancelado','em andamento') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE `contas` (
  `id_conta` int(11) NOT NULL,
  `fornecedores` int(11) NOT NULL,
  `salarios_benef` int(11) NOT NULL,
  `aluguel` int(11) NOT NULL,
  `contas_publicas` int(11) NOT NULL COMMENT 'Pagamento de eletricidade, água, gás, internet, telefone, entre outros serviços essenciais para o funcionamento do negócio. (Despesas de Fabricação: Custos associados à operação de fábricas, incluindo energia, manutenção de equipamentos, aluguel de espaço industrial, entre outros.)',
  `impostos` int(11) NOT NULL COMMENT 'Pagamento de impostos sobre vendas, imposto de renda, impostos sobre a propriedade, entre outros, dependendo das leis fiscais locais e da natureza do negócio.',
  `emprestimos` int(11) NOT NULL COMMENT 'Pagamento de parcelas de empréstimos bancários ou financiamentos de equipamentos.',
  `manutencao` int(11) NOT NULL COMMENT 'Pagamento por serviços de manutenção regular, reparos de equipamentos ou instalações.',
  `seguros` int(11) NOT NULL COMMENT 'Pagamento de prêmios de seguro para cobertura de responsabilidade civil, seguro de propriedade, seguro de saúde para funcionários etc. (Prêmios de seguro para cobertura de riscos específicos da indústria automobilística, como responsabilidade civil do fabricante, seguro de recall de produtos etc.)',
  `marketing` int(11) NOT NULL,
  `despesas_adm` int(11) NOT NULL COMMENT 'Pagamento por suprimentos de escritório, materiais de limpeza, taxas de licenciamento, entre outros custos administrativos.',
  `logistica` int(11) NOT NULL COMMENT 'Pagamento por transporte de matérias-primas, componentes e veículos acabados, bem como despesas relacionadas à logística de armazenamento e distribuição. ',
  `pesquisa` int(11) NOT NULL COMMENT 'Investimento em pesquisa e desenvolvimento de novas tecnologias, design de veículos, segurança, eficiência energética, entre outros.',
  `garantia` int(11) NOT NULL COMMENT 'Reservas para cobrir custos de garantia de veículos, bem como serviços de manutenção e reparo oferecidos aos clientes após a compra.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `numero_referencia` int(11) NOT NULL COMMENT 'Um número de identificação único para o produto, o que ajuda na rastreabilidade e na organização do estoque.',
  `categoria` varchar(255) NOT NULL COMMENT 'Uma categoria ou tipo de produto, como peças de reposição, componentes eletrônicos, materiais de escritório, produtos de limpeza, etc.',
  `quantidade` int(11) NOT NULL,
  `preco_unitario` int(11) NOT NULL COMMENT 'O custo unitário de cada item no estoque.',
  `fornecedor` varchar(255) NOT NULL COMMENT 'O nome ou código do fornecedor que fornece o produto, o que é útil para gerenciar relacionamentos com fornecedores e reabastecimento.',
  `localizacao` varchar(255) NOT NULL COMMENT 'Uma descrição do local físico onde o produto está armazenado no depósito ou no armazém.',
  `reabastecimento_minimo` int(11) NOT NULL COMMENT 'A quantidade mínima do produto que deve ser mantida em estoque antes de ser reabastecida, ajudando a evitar a falta de estoque.',
  `validade` date NOT NULL COMMENT 'Para produtos com data de validade, como lubrificantes, produtos químicos, alimentos, etc.',
  `observacoes` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fiscal`
--

CREATE TABLE `fiscal` (
  `id_fiscal` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `descricao` text NOT NULL,
  `valor` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL COMMENT 'Indicando se a transação é uma venda, compra, despesa, receita, etc. ',
  `cliente_fornecedor` text NOT NULL COMMENT 'O nome e informações de contato do cliente ou fornecedor envolvido na transação. ',
  `nota_fiscal` int(11) NOT NULL COMMENT 'O número de fatura ou nota fiscal associado à transação.',
  `imposto` int(11) NOT NULL,
  `metodo_pagamento` varchar(255) NOT NULL,
  `codigo_fiscal` int(11) NOT NULL COMMENT ' Códigos fiscais relevantes associados à transação, conforme exigido pelas autoridades fiscais. ',
  `contas_contabeis` int(11) NOT NULL COMMENT ' A conta contábil específica associada à transação, para fins de contabilidade e relatórios financeiros. ',
  `localizacao` varchar(255) NOT NULL,
  `responsavel` varchar(255) NOT NULL COMMENT 'O funcionário ou departamento responsável pela transação. ',
  `status` tinyint(1) NOT NULL,
  `observacoes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `frota_veiculo`
--

CREATE TABLE `frota_veiculo` (
  `id_frota` int(11) NOT NULL,
  `marca_modelo` varchar(255) NOT NULL,
  `ano_fabricacao` int(11) NOT NULL,
  `placa` varchar(255) NOT NULL,
  `numero_chassi` int(11) NOT NULL COMMENT 'O número de chassi do veículo, que é único para cada veículo e serve como identificação principal.',
  `tipo_veiculo` varchar(255) NOT NULL COMMENT 'Por exemplo, carro de passeio, van, caminhão, ônibus, etc.',
  `tipo_combustivel` varchar(255) NOT NULL,
  `quilometragem` int(11) NOT NULL,
  `data_prox_rev` date NOT NULL,
  `historico_manutencao` int(11) NOT NULL,
  `seguro` int(11) NOT NULL,
  `documentacao` text NOT NULL,
  `localizacao_atual` varchar(500) NOT NULL,
  `responsavel` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT 'Indicando se o veículo está disponível para uso, em manutenção, aguardando reparo, etc.',
  `observacoes` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nome_c` varchar(255) NOT NULL,
  `rg` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `data_n` date NOT NULL,
  `nacionalidade` varchar(255) NOT NULL,
  `estado_c` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL,
  `data_ad` date NOT NULL,
  `tipo_contrato` int(11) NOT NULL,
  `salario` decimal(10,0) NOT NULL,
  `tipo_u` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comercial`
--
ALTER TABLE `comercial`
  ADD PRIMARY KEY (`id_comercial`);

--
-- Índices para tabela `contas`
--
ALTER TABLE `contas`
  ADD PRIMARY KEY (`id_conta`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

--
-- Índices para tabela `fiscal`
--
ALTER TABLE `fiscal`
  ADD PRIMARY KEY (`id_fiscal`);

--
-- Índices para tabela `frota_veiculo`
--
ALTER TABLE `frota_veiculo`
  ADD PRIMARY KEY (`id_frota`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comercial`
--
ALTER TABLE `comercial`
  MODIFY `id_comercial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contas`
--
ALTER TABLE `contas`
  MODIFY `id_conta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fiscal`
--
ALTER TABLE `fiscal`
  MODIFY `id_fiscal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `frota_veiculo`
--
ALTER TABLE `frota_veiculo`
  MODIFY `id_frota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
