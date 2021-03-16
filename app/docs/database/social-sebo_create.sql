-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Ago-2020 às 01:45
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `social-sebo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `slug` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`, `slug`) VALUES
(20, 'H.Q', 'h-q'),
(19, 'Policial', 'policial'),
(18, 'Terror', 'terror'),
(17, 'Suspense', 'suspense'),
(16, 'Didádico', 'didatico'),
(15, 'Ficção Científica ', 'ficcao-cientifica '),
(14, 'Comédia Romântica', 'comedia-romantica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(500) NOT NULL,
  `livro_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `livro_id` (`livro_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id`, `descricao`, `livro_id`, `usuario_id`) VALUES
(1, 'Melhor livro que já li!', 11, 4),
(2, 'Livro top de mais esperando a trilogia', 11, 4),
(3, 'O mocinho morre no final', 11, 4),
(4, 'Muito Showww top', 11, 4),
(5, 'Faz vc ficar vidrado o tempo todo...', 11, 4),
(6, 'Estou lendo, parece muito bom', 11, 9),
(7, 'Muito louco, sangrento e inusitado, recomendo.', 15, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

DROP TABLE IF EXISTS `livro`;
CREATE TABLE IF NOT EXISTS `livro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `thumb` varchar(150) DEFAULT NULL,
  `sinopse` text NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT 2,
  `categoria_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_id` (`categoria_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `titulo`, `slug`, `valor`, `thumb`, `sinopse`, `data_cadastro`, `status`, `categoria_id`, `usuario_id`) VALUES
(6, 'A casa de vidro', 'a-casa-de-vidro', 'Grátis', '5f3f1cc35435atumblr_nf6r5zploa1sck897o1_1280.jpg', '&#60;p&#62;Uma sinopse &#38;eacute; um&#38;nbsp;&#60;strong&#62;GRATIS&#60;/strong&#62;&#38;nbsp;do enredo ou conte&#38;uacute;do de um livro. Editores e agentes liter&#38;aacute;rios costumam pedir que escritores entreguem esse texto para que possam avaliar a qualidade do trabalho. O desafio de tentar condensar toda uma trama em uns poucos par&#38;aacute;grafos ou p&#38;aacute;ginas &#38;eacute; intimidador, mas h&#38;aacute; mais de uma maneira de produzir uma sinopse de qualidade.&#60;/p&#62;&#13;&#10;', '2020-08-14 22:11:55', 2, 18, 4),
(7, 'IT, A Coisa', 'it--a-coisa', '18,00', NULL, '&#60;p&#62;Uma sinopse &#38;eacute; um&#38;nbsp;&#60;strong&#62;resumo breve&#60;/strong&#62;&#38;nbsp;do enredo ou conte&#38;uacute;do de um livro. Editores e agentes liter&#38;aacute;rios costumam pedir que escritores entreguem esse texto para que possam avaliar a qualidade do trabalho. O desafio de tentar condensar toda uma trama em uns poucos par&#38;aacute;grafos ou p&#38;aacute;ginas &#38;eacute; intimidador, mas h&#38;aacute; mais de uma maneira de produzir uma sinopse de qualidade.&#60;/p&#62;&#13;&#10;', '2020-08-14 22:20:29', 1, 18, 4),
(8, 'A grande comédia', 'a-grande-comedia', '9,99', NULL, '&#60;p&#62;Uma sinopse &#38;eacute; um&#38;nbsp;&#60;strong&#62;resumo breve&#60;/strong&#62;&#38;nbsp;do enredo ou conte&#38;uacute;do de um livro. Editores e agentes liter&#38;aacute;rios costumam pedir que escritores entreguem esse texto para que possam avaliar a qualidade do trabalho. O desafio de tentar condensar toda uma trama em uns poucos par&#38;aacute;grafos ou p&#38;aacute;ginas &#38;eacute; intimidador, mas h&#38;aacute; mais de uma maneira de produzir uma sinopse de qualidade.&#60;/p&#62;&#13;&#10;', '2020-08-14 22:29:40', 2, 14, 4),
(10, 'Interstellar II', 'interstellar-ii', '25,00', '5f40604bf2d66livro-interistela.png', '&#60;p&#62;Uma sinopse &#38;eacute; um&#38;nbsp;&#60;strong&#62;resumo breve&#60;/strong&#62;&#38;nbsp;do enredo ou conte&#38;uacute;do de um livro. Editores e agentes liter&#38;aacute;rios costumam pedir que escritores entreguem esse texto para que possam avaliar a qualidade do trabalho. O desafio de tentar condensar toda uma trama em uns poucos par&#38;aacute;grafos ou p&#38;aacute;ginas &#38;eacute; intimidador, mas h&#38;aacute; mais de uma maneira de produzir uma sinopse de qualidade.&#60;/p&#62;&#13;&#10;', '2020-08-14 22:34:05', 1, 15, 4),
(11, 'Filhos do tempo', 'filhos-do-tempo', '39,99', '5f404867cbcd8livro-filhos-do-tempo.png', '&#60;p&#62;Um jovem estudante com grande poder de &#60;em&#62;imunidade&#60;/em&#62; &#38;eacute; capaz de salvar uma menina portadora de um &#60;strong&#62;v&#38;iacute;rus letal&#60;/strong&#62; em um planeta long&#38;iacute;nquo.&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Uma bela garota alien&#38;iacute;gena se apaixona por ele e o ajuda nessa miss&#38;atilde;o, mas um terr&#38;iacute;vel inimigo tentar&#38;aacute; impedi-lo a&#60;/p&#62;&#13;&#10;', '2020-08-21 19:10:02', 1, 15, 4),
(12, 'Guerra Mundial Z', 'guerra-mundial-z', '49,99', '5f4047e8f11cblivro-guerra-mundial-z.png', '&#60;p&#62;Guerra Mundial Z&#60;/p&#62;&#13;&#10;', '2020-08-21 19:10:42', 1, 15, 4),
(13, 'Enceladus', 'Enceladus', '29,99', '5f404746376a2livro-enceladus.png', '&#60;p&#62;Enceladus&#60;/p&#62;&#13;&#10;', '2020-08-21 19:11:07', 1, 15, 4),
(14, 'A . I Inteligência Artificial', 'a-i-inteligencia-artificial', '19,99', NULL, '&#60;p&#62;A . I Intelig&#38;ecirc;ncia Artificial&#60;/p&#62;&#13;&#10;', '2020-08-21 20:23:06', 1, 15, 4),
(15, 'Batman Faces da Morte', 'batman-faces-da-morte', '49,99', '5f42a6f102b55batman-faces-da-morte.png', '&#60;p&#62;O Coringa desapareceu do Asilo Arkham e nem mesmo o Batman &#38;eacute; capaz de desvendar as pistas que o Palha&#38;ccedil;o do Crime deixou para tr&#38;aacute;s&#38;hellip; Algo estranho e terr&#38;iacute;vel est&#38;aacute; acontecendo em Gotham City, e tudo parece girar em torno de um novo vil&#38;atilde;o conhecido como o Criador de Bonecas. Para det&#38;ecirc;-lo (e evitar a morte de seu aliado, o comiss&#38;aacute;rio Gordon!), o Cavaleiro das Trevas vai precisar dar ao novo psicopata da cidade o que ele mais quer: sua pr&#38;oacute;pria cabe&#38;ccedil;a! Conseguir&#38;aacute; o Homem-Morcego descobrir os segredos do Criador de Bonecas, de seus misteriosos mestres e da liga&#38;ccedil;&#38;atilde;o do novo criminoso com o Coringa? Ou essa cruel e ainda desconhecida figura vai conseguir despeda&#38;ccedil;ar o Batman?&#60;/p&#62;&#13;&#10;', '2020-08-23 14:25:53', 1, 20, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 2,
  `token` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `status`, `token`) VALUES
(1, 'Christian', 'chris@teste.com', '$2y$10$r1lGRtUcWx4KhkIK4YmLsOPJTzoE9d9kHa6wsvCUX7VCbOHYejMMa', 1, NULL),
(2, 'João Teste', 'joaoexmplo@teste.com', '$2y$10$dPdkIfcnauLf60AqarHbg.xVWC9pDGLXtQv08Q3wulqOpddKnDE8G', 1, NULL),
(3, 'Usuario de teste', 'emaildeteste@gmail.com', '$2y$10$0ytIKJr5SMciTfYlDKSnHOiwgXhLOi1BYNkV16LOF8qe2/6irOOeS', 1, NULL),
(4, 'IbWebSites', 'contato.ibwebsites@gmail.com', '$2y$10$xs8t6bYDlXO3wKJG93MFGunSlk2wW1VnSGAdZs5Y5re8Gj6sEwUuu', 1, NULL),
(5, 'Camilla', 'email.teste@gmail.com', '$2y$10$SmUNJDO9ZkYN1smRLvuy6eFPrZXEgM4Z7Er3R.PPyj9d/226TFJxS', 1, NULL),
(6, 'Camilla', 'contato.teste@gmail.com', '$2y$10$XzD36i3GjfNXPFxKkGHuR.adNB96OjzzBj6AWgkG/RShE5L2EoKE6', 1, NULL),
(7, 'Christian', 'usuario.teste@gmail.com', '$2y$10$pjIoHz.2BuYsikEZrJ0GDuZOg4gPmkXAkKHhUxE9BO53/G3QrBjEG', 1, NULL),
(8, 'Christian', 'ramos.christian@hotmail.com', '$2y$10$BdSpWPSgWekcDpKDE4dJzeX8/t0ZR8DjrNP1AZMsoqdj.ACTWXT7G', 1, NULL),
(9, 'Christian', 'christian@hotmail.com', '$2y$10$orwDid/t8o/wtw6yNIr8fu7v7aJCO4zRZgCXwYpvJkTdZa6w37PAq', 1, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
