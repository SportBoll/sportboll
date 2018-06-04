-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2018 às 02:05
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
  `ID_PROPRIETARIO` int(11) DEFAULT NULL,
  `NOME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `CIDADE` varchar(255) NOT NULL,
  `TELEFONE` varchar(20) NOT NULL,
  `DOCUMENTO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ginasio`
--

INSERT INTO `ginasio` (`ID_GINASIO`, `ID_PROPRIETARIO`, `NOME`, `EMAIL`, `CIDADE`, `TELEFONE`, `DOCUMENTO`) VALUES
(1, 3, 'fsdfsd', 'as@as.com', '323423', '24342342342', '34234234234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `ID_PESSOA` int(11) NOT NULL,
  `CIDADE` varchar(255) DEFAULT NULL,
  `NOME` varchar(255) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `TELEFONE` varchar(255) DEFAULT NULL,
  `LOGIN` varchar(100) NOT NULL,
  `SENHA` varchar(255) NOT NULL,
  `NIVEL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`ID_PESSOA`, `CIDADE`, `NOME`, `EMAIL`, `TELEFONE`, `LOGIN`, `SENHA`, `NIVEL`) VALUES
(1, 'Erechim', 'Cliente', 'cliente@email.com', '54984454455', 'cliente', '4983a0ab83ed86e0e7213c8783940193', 1),
(2, 'Erechim', 'Administrador', 'admin@admin.com', '54984265154', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2),
(3, 'Erechim', 'Proprietario', 'prop@prop.com', '54848484848', 'prop', '23a5b8ab834cb5140fa6665622eb6417', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quadra`
--

CREATE TABLE `quadra` (
  `ID_QUADRA` int(11) NOT NULL,
  `ID_GINASIO` int(11) DEFAULT NULL,
  `DESCRICAO` varchar(255) NOT NULL,
  `TIPO` varchar(255) NOT NULL,
  `VALOR` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quadra`
--

INSERT INTO `quadra` (`ID_QUADRA`, `ID_GINASIO`, `DESCRICAO`, `TIPO`, `VALOR`) VALUES
(1, 1, 'rtetav s ast asts', 'Quadra uÃ©', '12.50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `ID_RESERVA` int(11) NOT NULL,
  `ID_PESSOA` int(11) DEFAULT NULL,
  `ID_QUADRA` int(11) DEFAULT NULL,
  `DATA` date NOT NULL,
  `STATUS_PAG` varchar(100) NOT NULL,
  `STATUS_RESERVA` varchar(100) NOT NULL,
  `INICIO` time DEFAULT NULL,
  `FIM` time DEFAULT NULL,
  `DATA_RESERVADA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`ID_RESERVA`, `ID_PESSOA`, `ID_QUADRA`, `DATA`, `STATUS_PAG`, `STATUS_RESERVA`, `INICIO`, `FIM`, `DATA_RESERVADA`) VALUES
(2, 1, 1, '2018-02-06', '', '', '12:00:00', '13:00:00', '2018-06-04'),
(3, 1, 1, '2018-04-06', '', '', '13:00:00', '15:00:00', '2018-06-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ginasio`
--
ALTER TABLE `ginasio`
  ADD PRIMARY KEY (`ID_GINASIO`),
  ADD KEY `FK_GINASIO_REFERENCE_PESSOA` (`ID_PROPRIETARIO`);

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
  MODIFY `ID_GINASIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `ID_PESSOA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quadra`
--
ALTER TABLE `quadra`
  MODIFY `ID_QUADRA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `ID_RESERVA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ginasio`
--
ALTER TABLE `ginasio`
  ADD CONSTRAINT `FK_GINASIO_REFERENCE_PESSOA` FOREIGN KEY (`ID_PROPRIETARIO`) REFERENCES `pessoa` (`ID_PESSOA`);

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
