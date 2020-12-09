-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2020 às 23:42
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `armazenagem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `producao` varchar(1) NOT NULL,
  `idPessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `idPessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grao`
--

CREATE TABLE `grao` (
  `idGrao` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `classe` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `idPessoa` int(11) NOT NULL,
  `nomePessoa` varchar(45) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `enderecoPessoa` varchar(200) DEFAULT NULL,
  `telefonePessoa` varchar(14) NOT NULL,
  `nascimentoPessoa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`idPessoa`, `nomePessoa`, `cpf`, `enderecoPessoa`, `telefonePessoa`, `nascimentoPessoa`) VALUES
(2, 'Lucas Prado', '114.549.056-54', 'Rua Nápolis, 05, Jardim Itália, Muzambinho', '(35)99249-2857', '1994-10-14'),
(4, 'Zézin da Páscoa', '114.549.056-54', 'Rua 1', '(35)99249-2857', '2020-12-10'),
(10, 'Lucas Prado Vô', '114.549.056-54', 'Muzambinho', '(35)99249-2857', '1994-10-14'),
(11, 'Lucas Prado Vô', '114.549.056-54', 'Muzambinho', '(35)99249-2857', '1994-10-14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

CREATE TABLE `registro` (
  `idRegistro` int(11) NOT NULL,
  `dataArm` date NOT NULL,
  `mesColheita` varchar(20) NOT NULL,
  `anoColheita` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valorUnitario` double NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  `idTipoArmazenagem` int(11) NOT NULL,
  `idGrao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoarmazenagem`
--

CREATE TABLE `tipoarmazenagem` (
  `idTipoArmazenagem` int(11) NOT NULL,
  `nomeTipo` varchar(45) NOT NULL,
  `peso` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`,`idPessoa`),
  ADD KEY `fk_Cliente_Pessoa1_idx` (`idPessoa`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`,`idPessoa`),
  ADD KEY `fk_Funcionario_Pessoa_idx` (`idPessoa`);

--
-- Índices para tabela `grao`
--
ALTER TABLE `grao`
  ADD PRIMARY KEY (`idGrao`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`idPessoa`);

--
-- Índices para tabela `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idRegistro`,`idCliente`,`idFuncionario`,`idTipoArmazenagem`,`idGrao`),
  ADD KEY `fk_Registro_Cliente1_idx` (`idCliente`),
  ADD KEY `fk_Registro_Funcionario1_idx` (`idFuncionario`),
  ADD KEY `fk_Registro_TipoArmazenagem1_idx` (`idTipoArmazenagem`),
  ADD KEY `fk_Registro_Grao1_idx` (`idGrao`);

--
-- Índices para tabela `tipoarmazenagem`
--
ALTER TABLE `tipoarmazenagem`
  ADD PRIMARY KEY (`idTipoArmazenagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `grao`
--
ALTER TABLE `grao`
  MODIFY `idGrao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `idPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `registro`
--
ALTER TABLE `registro`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipoarmazenagem`
--
ALTER TABLE `tipoarmazenagem`
  MODIFY `idTipoArmazenagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_Cliente_Pessoa1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoa` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `fk_Funcionario_Pessoa` FOREIGN KEY (`idPessoa`) REFERENCES `pessoa` (`idPessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `fk_Registro_Cliente1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Registro_Funcionario1` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`idFuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Registro_Grao1` FOREIGN KEY (`idGrao`) REFERENCES `grao` (`idGrao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Registro_TipoArmazenagem1` FOREIGN KEY (`idTipoArmazenagem`) REFERENCES `tipoarmazenagem` (`idTipoArmazenagem`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
