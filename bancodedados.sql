
-- Banco de dados: `funcionario`
--
CREATE DATABASE IF NOT EXISTS `funcionario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `funcionario`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curriculo`
--

CREATE TABLE `curriculo` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `idade` varchar(3) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nomemae` varchar(40) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cep` varchar(9) CHARACTER SET utf8 NOT NULL,
  `bairro` varchar(25) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `numero` varchar(6) CHARACTER SET utf8 NOT NULL,
  `ja_trabalhou` varchar(4) DEFAULT NULL,
  `parentes` varchar(3) DEFAULT NULL,
  `nomeparente` varchar(35) NOT NULL,
  `grauparente` varchar(15) NOT NULL,
  `indica` varchar(3) DEFAULT NULL,
  `disponibilidade` varchar(10) DEFAULT NULL,
  `trabalhanoite` varchar(3) DEFAULT NULL,
  `mudahora` varchar(11) DEFAULT NULL,
  `formacaoescolar` varchar(20) DEFAULT NULL,
  `ano` date DEFAULT NULL,
  `estuda` varchar(3) DEFAULT NULL,
  `horario` varchar(5) NOT NULL,
  `curso` varchar(25) NOT NULL,
  `cargo` varchar(25) DEFAULT NULL,
  `sexo` varchar(12) DEFAULT NULL,
  `estadocivil` varchar(25) DEFAULT NULL,
  `objetivo` varchar(255) DEFAULT NULL,
  `formacao` varchar(255) DEFAULT NULL,
  `experiencia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curriculo`
--

INSERT INTO `curriculo` (`id`, `nome`, `telefone`, `nascimento`, `idade`, `email`, `nomemae`, `estado`, `cep`, `bairro`, `rua`, `numero`, `ja_trabalhou`, `parentes`, `nomeparente`, `grauparente`, `indica`, `disponibilidade`, `trabalhanoite`, `mudahora`, `formacaoescolar`, `ano`, `estuda`, `horario`, `curso`, `cargo`, `sexo`, `estadocivil`, `objetivo`, `formacao`, `experiencia`) VALUES
(1, ' Thales E Penha De Carvalho', '11985933820', '1997-05-01', '24', 'thalese23@gmail.com', 'Susete Aparecida Penha De Carv', 'SP', '08504320', 'Jd Yone', 'Manuel Correia da Silva', '146', 'SIM', 'NÃO', '', '', 'NÃO', 'Manhã', 'NÃO', 'ACEITA', 'Ensino Superior', '2023-07-11', 'SIM', 'NOITE', 'Analise e Desenvolvimento', 'Estagiário De Análise E D', 'masculino', 'Solteiro', 'Conseguir Fazer um bom sistema de currículo.', 'Técnico em Desenvolvimento de Sistemas Concluído\r\nAuxiliar Administrativo concluído.\r\n\r\n\r\n', 'Estagiário da Sticle.\r\nSecretário da APSEF.\r\nRecepcionista De Fleat.\r\nRecepcionista de clínica. \r\n');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `curriculo`
--
ALTER TABLE `curriculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `curriculo`
--
ALTER TABLE `curriculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
