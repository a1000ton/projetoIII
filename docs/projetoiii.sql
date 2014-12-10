-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Dez-2014 às 15:30
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
('Muda tudo', 'Mudando', 'TITULO3', 'Muda muda', 'Tudodesccricao2', 'descricao3', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `slug_categoria` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`, `slug_categoria`) VALUES
(1, 'Sobremesas', 'sobremesas'),
(2, 'Tortas e bolos', 'tortas-e-bolos'),
(3, 'Massas', 'massas'),
(4, 'Carnes', 'carnes'),
(5, 'Peixes', 'peixes'),
(6, 'Receitas Rápidas', 'receitas-rapidas'),
(7, 'Receitas Light', 'receitas-light'),
(8, 'Sopas', 'sopas'),
(9, 'Vegetarianas', 'vegetarianas');

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
('3c422dbaf122f9c40122df474127be58', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1418208929, ''),
('a1f571507d7ac2c31727428bf5ccf5af', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', 1418215116, 'a:3:{s:9:"user_data";s:0:"";s:7:"usuario";s:3:"bmx";s:6:"logado";b:1;}'),
('bb6a6a8ecb4251a9b4a462156d533e66', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416442937, ''),
('c75d6ae83921534a07e4ce710cec64cf', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1417037757, 'a:3:{s:9:"user_data";s:0:"";s:7:"usuario";s:10:"mestrecuca";s:6:"logado";b:1;}'),
('c773380ce9c21dfb3a3dabc17df93224', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36', 1416440739, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `logo` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE IF NOT EXISTS `receitas` (
  `id_receita` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `slug_receita` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `categoria` int(10) unsigned NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `adicionada_quando` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_receita`),
  KEY `FK_receitas_categoria` (`categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id_receita`, `nome`, `slug_receita`, `texto`, `categoria`, `foto`, `adicionada_quando`) VALUES
(1, 'Ovo Pochê', 'ovo-poche', 'Ingredientes\r\n4 unidade(s) de ovo\r\n1/2 litro(s) de água\r\n2 colher(es) (chá) de sal\r\n1 colher(es) (sobremesa) de vinagre branco\r\n\r\nModo de preparo\r\n1- Coloque a água numa panela e leve ao fogo para ferver, temperando-a com sal e vinagre, assim que isto aconteça. Quebre um ovo numa vasilha à parte e despeje sobre a água fervente. Observe que a água cobre quase todo o ovo, deixando apenas a parte superior da gema descoberta. Isso porque eu queria preparar as gemas moles. Caso as queira duras, coloque mais água.\r\n\r\n2- Deixe-os cozinhar por cerca de um minuto, até que a clara esteja bem branca, sem partes cruas e retire com o auxílio de uma escumadeira. Se gostar, moa pimenta do reino, na hora, sobre os ovos. ', 6, 'ovo-poche.jpg', '2012-01-15 18:50:57'),
(2, 'Gelatina de laranja com chantilly', 'gelatina-de-laranja-com-chantilly', 'Ingredientes\r\n\r\n    500ml de suco de laranja coado\r\n    200g de açúcar\r\n    4 folhas de gelatina\r\n    4 colheres (sopa) de licor de laranja\r\n    100ml de creme de leite fresco\r\n    Ramos de hortelã\r\n    Óleo de amendoim\r\n\r\nModo de preparo\r\n\r\nColoque a gelatina em água fria por alguns minutos, escorra e esprema bem.\r\nLeve ao fogo 100ml de suco de laranja.\r\nQuando aquecer, acrescente a gelatina e deixe dissolver, mexendo sempre.\r\nAdicione o açúcar e mais 100ml de suco e cozinhe em fogo baixo, misturando de vez em quando.Retire do fogo antes de ferver e junto o suco restante e o licor de laranja.\r\nCoe o líquido em um coador forrado com um pano limpo e deixe amornar.\r\nDivida a gelatina em 4 forminhas ligeiramente untadas com o óleo, deixe esfriar e leve à geladeira por 2 horas.\r\nPouco antes de servir, bata o creme de leite em ponto de chantili e lave as folhas de hortelã.\r\nDesenforme as gelatinas nos pratos e decore com o creme e a hortelã.', 1, 'gelatina-laranja-chantilly.jpg', '2012-01-15 19:00:40'),
(3, 'Almôndegas de microondas', 'almondegas-de-microondas', 'Ingredientes\r\n\r\nCarne:\r\n1/2 kg de carne moída\r\n1 ovo\r\n1 cebola pequena bem picada\r\n3 colheres (sopa) de salsa picada\r\n1 colher (sopa) de queijo parmesão ralado\r\n2 dentes de alho\r\nSal e pimenta do reino a gosto\r\n\r\nMolho:\r\n1 cebola média picada\r\n1 lata de molho de tomate\r\n1/2 xícara (chá) de água\r\n1 pitada de açúcar\r\nSal e pimenta do reino a gosto\r\n\r\nModo de Preparo\r\n\r\nMisture com as mãos a carne moída com o restante dos ingredientes\r\nTempere com sal e pimenta-do-reino a gosto\r\nFaça bolinhos e achate levemente\r\nColoque-os em um refratário e regue com óleo\r\nLeve ao microondas em potência alta por 8 minutos, pare na metade do tempo para mexer\r\nPrepare o molho e cubra as almôndegas\r\nVolte ao forno por 2 minutos\r\nSirva a seguir', 6, 'almondegas-de-microondas.jpg', '2012-01-15 19:09:10'),
(4, 'Onion Rings (Anéis Temperados de Cebola)', 'onion-rings', 'Ingredientes\r\n\r\n2 cebolas grandes\r\n2 xícaras de farinha de trigo\r\n2 colheres chá de sal\r\n1 colher chá de pimenta do reino\r\n1/2 xícara maisena\r\n1 xícara de água fria\r\n2 gemas\r\nÓleo suficiente para fritar\r\n1 limão cortado em quatro\r\n\r\nModo de Preparo\r\n\r\nFatie as cebolas em anéis\r\nEm uma tigela média, junte 1/2 xícara de farinha com o sal e a pimenta\r\nPolvilhe os anéis de cebola com a farinha temperada\r\nEm outra tigela, junte o resto da farinha, a maizena, a água e as gemas dos ovos, fazendo uma massa homogênia\r\nEsquente o óleo em uma temperatura de mais ou menos 180º graus\r\nMergulhe na massa os anéis polvilhados\r\nRetire o excesso de massa\r\nMergulhe os anéis no óleo para fritar por 2 a 3 minutos, até ficarem dourados\r\nFica igual aos servidos em churrascarias', 6, 'onion-rings.jpg', '2012-01-15 19:15:56'),
(5, 'Sopa de Legumes', 'sopa-de-legumes', 'Ingredientes\r\n1 tomate\r\n1 cebola\r\n2 batatas\r\n1 cenoura\r\n1 caldo de legumes\r\n1 colher de chá de margarina\r\nSal a gosto\r\n\r\nModo de Preparo\r\n\r\nCozinhe todas os legumes em 1,5 litros de água.\r\nBata tudo no liquidificador e leve ao fogo novamente para ferver com o caldo e a margarina.', 8, 'sopa-de-legumes.jpg', '2012-01-15 19:20:52');

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
('Puta', 'Coisa0', 'Chata', 'Cara', 0);

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
('Teste título sobre', 'Desculpa texto eu errei', 'http://wallpaper.ultradownloads.com.br/63017_Papel-de-Parede-Predio-e-o-ceu_1600x1200.jpg', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `senha`, `ativo`, `cadastrado_em`) VALUES
(1, 'bmx', '123', 1, '2014-11-20 01:55:26'),
(2, 'teste', '123', 1, '2014-12-10 12:50:17');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `receitas`
--
ALTER TABLE `receitas`
  ADD CONSTRAINT `FK_receitas_categoria` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id_categoria`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
