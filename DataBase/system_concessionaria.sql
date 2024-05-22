-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Maio-2024 às 14:12
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
-- Estrutura da tabela `dados_usuario`
--

CREATE TABLE `dados_usuario` (
  `usuario_id` int(11) NOT NULL,
  `nome_pai` varchar(255) DEFAULT NULL,
  `nome_mae` varchar(255) DEFAULT NULL,
  `naturalidade` varchar(255) DEFAULT NULL,
  `uf` varchar(255) DEFAULT NULL,
  `data_nascimento` varchar(255) DEFAULT NULL,
  `deficiente_fisico` varchar(255) DEFAULT NULL,
  `raca_cor` varchar(255) DEFAULT NULL,
  `sexo` varchar(255) DEFAULT NULL,
  `estado_civil` varchar(255) DEFAULT NULL,
  `grau_instrucao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `dados_usuario`
--

INSERT INTO `dados_usuario` (`usuario_id`, `nome_pai`, `nome_mae`, `naturalidade`, `uf`, `data_nascimento`, `deficiente_fisico`, `raca_cor`, `sexo`, `estado_civil`, `grau_instrucao`) VALUES
(50, '1', '1', '1', 'RN', '0001-01-01', 'não', 'branco', 'masculino', 'Solteiro', '1 completo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `empresa_id` int(11) NOT NULL,
  `numero_inscricao` varchar(255) NOT NULL,
  `data_abertura` varchar(255) NOT NULL,
  `razao_social` varchar(255) NOT NULL,
  `nome_fantasia` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `porte` varchar(255) NOT NULL,
  `capital_social` varchar(255) NOT NULL,
  `lagradouro` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `bairro_restrito` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `uf` varchar(255) NOT NULL,
  `empresa_email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`empresa_id`, `numero_inscricao`, `data_abertura`, `razao_social`, `nome_fantasia`, `cnpj`, `porte`, `capital_social`, `lagradouro`, `cep`, `bairro_restrito`, `municipio`, `numero`, `complemento`, `telefone`, `uf`, `empresa_email`, `senha`) VALUES
(3, '1', '0001-01-01', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'AC', 'empresa@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `usuario_id` int(11) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`usuario_id`, `endereco`, `numero`, `complemento`, `cep`, `bairro`, `cidade`, `telefone`, `celular`) VALUES
(50, '1', '1', '1', '1', '1', '1', '1', '1');

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
-- Estrutura da tabela `rh`
--

CREATE TABLE `rh` (
  `usuario_id` int(11) NOT NULL,
  `numero_ctps` varchar(11) DEFAULT NULL,
  `serie` varchar(255) DEFAULT NULL,
  `uf_rh` varchar(2) DEFAULT NULL,
  `data_expedicao_ctps` text DEFAULT NULL,
  `pis` varchar(255) DEFAULT NULL,
  `data_cadastro_pis` varchar(255) DEFAULT NULL,
  `rg_rh` varchar(255) DEFAULT NULL,
  `data_expedicao_rg` varchar(255) DEFAULT NULL,
  `cpf_rh` varchar(255) DEFAULT NULL,
  `titulo_eleitor` varchar(255) DEFAULT NULL,
  `zona` varchar(255) DEFAULT NULL,
  `secao` varchar(255) DEFAULT NULL,
  `dependentes` varchar(255) DEFAULT NULL,
  `vale_transporte` varchar(255) DEFAULT NULL,
  `horario_trabalho` varchar(255) DEFAULT NULL,
  `entrada` varchar(255) DEFAULT NULL,
  `intervalo` varchar(255) DEFAULT NULL,
  `saida` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `data_admissao` varchar(255) DEFAULT NULL,
  `data_exame_medico` varchar(255) DEFAULT NULL,
  `experiencia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `rh`
--

INSERT INTO `rh` (`usuario_id`, `numero_ctps`, `serie`, `uf_rh`, `data_expedicao_ctps`, `pis`, `data_cadastro_pis`, `rg_rh`, `data_expedicao_rg`, `cpf_rh`, `titulo_eleitor`, `zona`, `secao`, `dependentes`, `vale_transporte`, `horario_trabalho`, `entrada`, `intervalo`, `saida`, `cargo`, `data_admissao`, `data_exame_medico`, `experiencia`) VALUES
(50, '1', '1', 'AP', '0001-01-01', '1', '0001-01-01', '1', '0001-01-01', '1', '1', '1', '1', '0001-01-01', 'nao', '1', '01:01', '01:01', '01:01', '1', '0001-01-01', '0001-01-01', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(50, 'adm', 'adm@gmail.com', '1234', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados_usuario`
--
ALTER TABLE `dados_usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`empresa_id`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Índices para tabela `rh`
--
ALTER TABLE `rh`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_usuario`
--
ALTER TABLE `dados_usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `empresa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `rh`
--
ALTER TABLE `rh`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
