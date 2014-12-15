-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Dez-2014 às 15:35
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projetoiii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `blocos`
--

CREATE TABLE IF NOT EXISTS `blocos` (
  `titulo` text NOT NULL,
  `titulo2` text NOT NULL,
  `titulo3` text NOT NULL,
  `descricao` text NOT NULL,
  `descricao2` text NOT NULL,
  `descricao3` text NOT NULL,
  `id_bloco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `blocos`
--

INSERT INTO `blocos` (`titulo`, `titulo2`, `titulo3`, `descricao`, `descricao2`, `descricao3`, `id_bloco`) VALUES
('TITULO1', 'TITULO2', 'TITULO3', 'DESCRICAO1', 'desccricao2', 'descricao3', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('bb6a6a8ecb4251a9b4a462156d533e66', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416442937, ''),
('c75d6ae83921534a07e4ce710cec64cf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1417037757, 'a:3:{s:9:"user_data";s:0:"";s:7:"usuario";s:10:"mestrecuca";s:6:"logado";b:1;}'),
('c773380ce9c21dfb3a3dabc17df93224', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416440739, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `curso` varchar(45) NOT NULL,
  `slug_curso` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `curso`, `slug_curso`, `descricao`, `imagem`) VALUES
(10, 'Sistemas para Internet', 'tsi', 'Um curso focado em sistemas', 'http://localhost/projetoIII/assets/comum/img/cursos/web.jpg'),
(11, 'Medicina', 'medicina', 'Curso de Medicina', 'http://localhost/projetoIII/assets/comum/img/cursos/medicos.jpg'),
(12, 'Biologia', 'biologia', 'Um curso de Biologia', 'http://localhost/projetoiii/assets/comum/img/cursos/sapos.jpg'),
(13, 'Engenharia Química', 'engquimica', 'Curso de Engenharia Química', 'http://localhost/projetoiii/assets/comum/img/cursos/engquim.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `logo` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`logo`, `rua`, `cidade`, `telefone`, `email`, `id_empresa`) VALUES
('http://localhost/projetoIII/assets/comum/img/logo-site.png', 'Rua Santa Terezinha, Bairro São Francisco de Assis, nº 90', 'Camboriú, Santa Catarina', '(47) 3367-3523', 'amiltonbjr@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `titulo2` text NOT NULL,
  `descricao2` text NOT NULL,
  `id_slide` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `slides`
--

INSERT INTO `slides` (`titulo`, `descricao`, `titulo2`, `descricao2`, `id_slide`) VALUES
('Título slide 01', 'Descricao detalhada slide 01 oba', 'Título slide 02', 'Descricao NEM TÃO DETALHADA ASSIM slide02', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE IF NOT EXISTS `sobre` (
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `id_sobre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`titulo`, `descricao`, `imagem`, `id_sobre`) VALUES
('O que somos?', 'Uma escola limdra', 'http://localhost/projetoiii/assets/comum/img/logofloripa.jpg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `cadastrado_em` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `senha`, `ativo`, `cadastrado_em`) VALUES
(1, 'bmx', '123', 1, '2014-11-20 01:55:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
