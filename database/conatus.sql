-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Nov-2020 às 19:42
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `conatus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `deficiencia`
--

DROP TABLE IF EXISTS `deficiencia`;
CREATE TABLE IF NOT EXISTS `deficiencia` (
  `idDeficiencia` int(11) NOT NULL AUTO_INCREMENT,
  `deficiencia` int(11) DEFAULT NULL,
  `tipoDeficiencia` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idDeficiencia`),
  UNIQUE KEY `idDeficiencia` (`idDeficiencia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `feed`
--

DROP TABLE IF EXISTS `feed`;
CREATE TABLE IF NOT EXISTS `feed` (
  `idFeed` int(11) NOT NULL AUTO_INCREMENT,
  `idDeficiencia` int(11) DEFAULT NULL,
  `idGenero` int(11) DEFAULT NULL,
  `idRaca` int(11) DEFAULT NULL,
  `conteudo` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idFeed`),
  UNIQUE KEY `idFeed` (`idFeed`),
  KEY `idDeficiencia` (`idDeficiencia`),
  KEY `idGenero` (`idGenero`),
  KEY `idRaca` (`idRaca`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idGenero`),
  UNIQUE KEY `idGenero` (`idGenero`),
  KEY `genero` (`genero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `raca`
--

DROP TABLE IF EXISTS `raca`;
CREATE TABLE IF NOT EXISTS `raca` (
  `idRaca` int(11) NOT NULL AUTO_INCREMENT,
  `raca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idRaca`),
  UNIQUE KEY `idRaca` (`idRaca`),
  KEY `raca` (`raca`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `dataNascimento` varchar(10) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numeroEndereco` varchar(10) DEFAULT NULL,
  `complementoEndereco` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(11) DEFAULT NULL,
  `escolaridade` varchar(50) DEFAULT NULL,
  `tipoEscola` varchar(50) DEFAULT NULL,
  `raca` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `deficiencia` varchar(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`idUsuario`,`deficiencia`,`genero`,`raca`),
  UNIQUE KEY `id_Usuario` (`idUsuario`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
