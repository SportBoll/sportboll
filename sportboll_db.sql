-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Maio-2018 às 04:16
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportboll_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ginasio`
--

CREATE TABLE `ginasio` (
  `ID_GINASIO` int(11) NOT NULL,
  `NOME` char(255) NOT NULL,
  `EMAIL` char(255) NOT NULL,
  `CIDADE` char(255) NOT NULL,
  `TELEFONE` char(20) NOT NULL,
  `LOGIN` char(100) NOT NULL,
  `SENHA` char(100) NOT NULL,
  `DOCUMENTO` char(255) NOT NULL,
  `ID_PROPRIETARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ginasio`
--

INSERT INTO `ginasio` (`ID_GINASIO`, `NOME`, `EMAIL`, `CIDADE`, `TELEFONE`, `LOGIN`, `SENHA`, `DOCUMENTO`, `ID_PROPRIETARIO`) VALUES
(2, 'ConceiÃ§Ã£o 02', 'dsdja@sdf.com', 'sdfsdlh', '2121212', 'kjh', 'jjklhjk', '1212121212121', 12),
(3, 'dbxgxdfgv', 'mateus_diaz95@hotmail.com', 'sdfgdfgdf', '345345345', 'dfgdf', 'gdfgdf', '45345345345345', 12),
(4, 'Bla', 'blaq@ff.com', 'ere', '122', '5555', '5555', '147', 12),
(5, 'ConceiÃ§Ã£o 02 dfgdf', 'dsdja@sdf.com', 'Erechim', '2121212', 'kjh', 'jjklhjk', '1212121212121', 9),
(6, 'Teste de Id insert', 'mateus_diaz95@hotmail.com', 'sdffljsdfsdfjlsdjfksdjl', '5454545', 'dfgdfg', 'dfgdfgdf', '554545454545', 9),
(7, '123', 'admin@user.com', 'fsd', 'sdf', 'sdf', 'sfsdf', 'd', 9),
(11, 'as', 'diazmateus@hotmail.com', 'Paim FIlho Cu de Mundo', '5454545', 'mateus', '123456', '255428646546', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario_quadra`
--

CREATE TABLE `horario_quadra` (
  `ID_HORARIO_QUADRA` int(11) NOT NULL,
  `ID_QUADRA` int(11) DEFAULT NULL,
  `INICIO` time NOT NULL,
  `FIM` time NOT NULL,
  `SEGUNDA` smallint(6) DEFAULT NULL,
  `TERCA` smallint(6) DEFAULT NULL,
  `QUARTA` smallint(6) DEFAULT NULL,
  `QUINTA` smallint(6) DEFAULT NULL,
  `SEXTA` smallint(6) DEFAULT NULL,
  `SABADO` smallint(6) DEFAULT NULL,
  `DOMINGO` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `ID_PESSOA` int(11) NOT NULL,
  `NOME` char(255) NOT NULL,
  `EMAIL` char(200) NOT NULL,
  `CIDADE` char(200) DEFAULT NULL,
  `TELEFONE` char(20) DEFAULT NULL,
  `LOGIN` char(100) NOT NULL,
  `SENHA` char(100) NOT NULL,
  `NIVEL` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`ID_PESSOA`, `NOME`, `EMAIL`, `CIDADE`, `TELEFONE`, `LOGIN`, `SENHA`, `NIVEL`) VALUES
(9, 'Mateus Filurico', 'filu@rico.com.br', 'Erechimnsgf', '54984265154', 'admin', 'admin', 2),
(12, 'Mary', 'mary@mary.com', 'ertertrete', '5454545', 'prop', 'prop', 3),
(13, 'Mateus Filurico', 'filu@rico.com.br', 'Erechimnsgf', '54984265154', 'cliente', 'cliente', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quadra`
--

CREATE TABLE `quadra` (
  `ID_QUADRA` int(11) NOT NULL,
  `ID_GINASIO` int(11) DEFAULT NULL,
  `DESCRICAO` char(255) NOT NULL,
  `TIPO` char(255) NOT NULL,
  `HORARIO` datetime NOT NULL,
  `VALOR` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quadra`
--

INSERT INTO `quadra` (`ID_QUADRA`, `ID_GINASIO`, `DESCRICAO`, `TIPO`, `HORARIO`, `VALOR`) VALUES
(12, 5, 'fghfg fh ddgdfg dg df', 'fg h fg h', '2018-04-03 00:00:00', '14.90'),
(20, 4, 'Esta quadra Ã© muito boa pra nÃ£o fazer nada.', 'Quadreca', '0000-00-00 00:00:00', '18.90'),
(22, 2, 'Lorem Ipsum Ã© simplesmente uma simulaÃ§Ã£o de texto.fdsdfsdfsd', 'Quadra de TÃªnis', '0000-00-00 00:00:00', '59.90'),
(23, 3, 'tgdfgdfgdfgd', 'fdgd', '2018-04-09 00:00:00', '100.00'),
(24, 11, 'xvxvxcvxcvxcv', 'xvxcvxcvxcvxc', '0000-00-00 00:00:00', '100.52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `ID_RESERVA` int(11) NOT NULL,
  `ID_PESSOA` int(11) DEFAULT NULL,
  `ID_QUADRA` int(11) DEFAULT NULL,
  `DATA` date NOT NULL,
  `STATUS_PAG` varchar(100) NOT NULL DEFAULT 'Aguardando',
  `STATUS_RESERVA` varchar(100) NOT NULL DEFAULT 'Reserva Efetuada',
  `INICIO` time DEFAULT NULL,
  `FIM` time DEFAULT NULL,
  `DATA_RESERVADA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`ID_RESERVA`, `ID_PESSOA`, `ID_QUADRA`, `DATA`, `STATUS_PAG`, `STATUS_RESERVA`, `INICIO`, `FIM`, `DATA_RESERVADA`) VALUES
(21, 9, 22, '2012-12-02', 'Aguardando', '', '02:00:00', '03:00:00', '2018-04-26'),
(22, 9, 22, '2012-12-02', 'Aguardando', '', '03:00:00', '05:00:00', '2018-04-26'),
(23, 9, 22, '2012-12-02', 'Aguardando', '', '03:00:00', '05:00:00', '2018-04-26'),
(24, 10, 20, '2018-05-05', 'Aguardando', '', '00:00:00', '02:00:00', '2018-05-03'),
(25, 9, 20, '2012-12-02', 'Aguardando', '', '00:00:00', '00:00:00', '2018-05-06'),
(26, 9, 22, '2018-10-02', 'Aguardando', '', '00:00:00', '06:00:00', '2018-05-07'),
(27, 9, 20, '2012-01-03', 'Aguardando', '', '07:00:00', '09:00:00', '2018-05-07'),
(28, 9, 12, '2012-12-02', 'Aguardando', '', '12:00:00', '17:00:00', '2018-05-08'),
(29, 9, 20, '2018-01-01', 'Aguardando', '', '00:00:00', '01:00:00', '2018-05-09'),
(30, 9, 23, '2018-05-08', 'Aguardando', '', '13:00:00', '15:00:00', '2018-05-13'),
(31, 9, 12, '2018-01-06', 'Aguardando', '', '14:00:00', '18:00:00', '2018-05-13'),
(32, 9, 22, '2018-01-01', '', '', '09:00:00', '11:00:00', '2018-05-13'),
(33, 9, 12, '2018-01-11', '', '', '10:00:00', '12:00:00', '2018-05-16'),
(34, 12, 20, '2018-12-08', '', '', '12:00:00', '14:00:00', '2018-05-16'),
(35, 13, 20, '2018-01-01', '', '', '19:00:00', '22:00:00', '2018-05-17'),
(36, 13, 20, '2018-01-01', '', '', '15:00:00', '16:00:00', '2018-05-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ginasio`
--
ALTER TABLE `ginasio`
  ADD PRIMARY KEY (`ID_GINASIO`);

--
-- Indexes for table `horario_quadra`
--
ALTER TABLE `horario_quadra`
  ADD PRIMARY KEY (`ID_HORARIO_QUADRA`),
  ADD KEY `FK_HORARIO__REFERENCE_QUADRA` (`ID_QUADRA`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`ID_PESSOA`);

--
-- Indexes for table `quadra`
--
ALTER TABLE `quadra`
  ADD PRIMARY KEY (`ID_QUADRA`),
  ADD KEY `FK_QUADRA_REFERENCE_GINASIO` (`ID_GINASIO`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`ID_RESERVA`),
  ADD KEY `FK_RESERVA_REFERENCE_PESSOA` (`ID_PESSOA`),
  ADD KEY `FK_RESERVA_REFERENCE_QUADRA` (`ID_QUADRA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ginasio`
--
ALTER TABLE `ginasio`
  MODIFY `ID_GINASIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `horario_quadra`
--
ALTER TABLE `horario_quadra`
  MODIFY `ID_HORARIO_QUADRA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `ID_PESSOA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quadra`
--
ALTER TABLE `quadra`
  MODIFY `ID_QUADRA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `ID_RESERVA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `horario_quadra`
--
ALTER TABLE `horario_quadra`
  ADD CONSTRAINT `FK_HORARIO__REFERENCE_QUADRA` FOREIGN KEY (`ID_QUADRA`) REFERENCES `quadra` (`ID_QUADRA`);

--
-- Limitadores para a tabela `quadra`
--
ALTER TABLE `quadra`
  ADD CONSTRAINT `FK_QUADRA_REFERENCE_GINASIO` FOREIGN KEY (`ID_GINASIO`) REFERENCES `ginasio` (`ID_GINASIO`);

--
-- Limitadores para a tabela `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `FK_RESERVA_REFERENCE_PESSOA` FOREIGN KEY (`ID_PESSOA`) REFERENCES `pessoa` (`ID_PESSOA`),
  ADD CONSTRAINT `FK_RESERVA_REFERENCE_QUADRA` FOREIGN KEY (`ID_QUADRA`) REFERENCES `quadra` (`ID_QUADRA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
