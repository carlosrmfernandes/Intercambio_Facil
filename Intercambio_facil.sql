-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 13/07/2018 às 19:52
-- Versão do servidor: 5.6.35
-- Versão do PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Intercambio_facil`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Aluno`
--

CREATE TABLE `Aluno` (
  `idAluno` int(11) NOT NULL,
  `nome_aluno` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contacto`
--

CREATE TABLE `contacto` (
  `idcontacto` int(11) NOT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `Aluno_idAluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `contacto`
--

INSERT INTO `contacto` (`idcontacto`, `celular`, `Aluno_idAluno`) VALUES
(18, '+48996684418', NULL),
(19, '923330672', NULL),
(20, '9083483848', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Curso`
--

CREATE TABLE `Curso` (
  `idCurso` int(11) NOT NULL,
  `curso` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Doc`
--

CREATE TABLE `Doc` (
  `idDoc` int(11) NOT NULL,
  `documento_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Enderco`
--

CREATE TABLE `Enderco` (
  `idEnderco` int(11) NOT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `Aluno_idAluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Enderco`
--

INSERT INTO `Enderco` (`idEnderco`, `cep`, `endereco`, `estado`, `cidade`, `Aluno_idAluno`) VALUES
(18, '88804060', 'Bairo Universitario 1540', 'SANTA CATARINA', 'Criciuma', NULL),
(19, '88804060', 'Osvaldo Roberto Mayer, 1540', 'SANTA CATARINA', 'Criciuma', NULL),
(20, '88804060', 'Luanda', 'LD', 'luanda', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Img_Perfil`
--

CREATE TABLE `Img_Perfil` (
  `idImg_Perfil` int(11) NOT NULL,
  `nome_img_perfil` varchar(45) DEFAULT NULL,
  `Aluno_idAluno` int(11) DEFAULT NULL,
  `Universidade_idUniversidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Img_Perfil`
--

INSERT INTO `Img_Perfil` (`idImg_Perfil`, `nome_img_perfil`, `Aluno_idAluno`, `Universidade_idUniversidade`) VALUES
(18, NULL, NULL, 12),
(19, NULL, NULL, 13),
(20, NULL, NULL, 14);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Incricao_universidade`
--

CREATE TABLE `Incricao_universidade` (
  `Aluno_idAluno` int(11) NOT NULL DEFAULT '0',
  `Universidade_idUniversidade` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `Universidade_idUniversidade` int(11) DEFAULT NULL,
  `Aluno_idAluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `login`
--

INSERT INTO `login` (`idlogin`, `email`, `senha`, `Universidade_idUniversidade`, `Aluno_idAluno`) VALUES
(18, 'unesc@unesct.net', 'd41d8cd98f00b204e9800998ecf8427e', 12, NULL),
(19, 'esucri@escucri.com.br', 'd41d8cd98f00b204e9800998ecf8427e', 13, NULL),
(20, 'agostinhoneto@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 14, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Publicacao`
--

CREATE TABLE `Publicacao` (
  `idPublicacao` int(11) NOT NULL,
  `descriccao_publicacao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Universidade`
--

CREATE TABLE `Universidade` (
  `idUniversidade` int(11) NOT NULL,
  `nome_universidade` varchar(45) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Universidade`
--

INSERT INTO `Universidade` (`idUniversidade`, `nome_universidade`, `descricao`) VALUES
(12, 'Unesc', 'Umas das Melhores Universidade do Brasil'),
(13, 'Esucri', 'Umas das Melhores Universidade do Brasil'),
(14, 'Agostinho Neto', 'Universidade de Angola');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Universidade_has_contacto`
--

CREATE TABLE `Universidade_has_contacto` (
  `Universidade_idUniversidade` int(11) NOT NULL DEFAULT '0',
  `contacto_idcontacto` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Universidade_has_contacto`
--

INSERT INTO `Universidade_has_contacto` (`Universidade_idUniversidade`, `contacto_idcontacto`) VALUES
(12, 18),
(13, 19),
(14, 20);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Universidade_has_Curso`
--

CREATE TABLE `Universidade_has_Curso` (
  `Universidade_idUniversidade` int(11) NOT NULL DEFAULT '0',
  `Curso_idCurso` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Universidade_has_Doc`
--

CREATE TABLE `Universidade_has_Doc` (
  `Universidade_idUniversidade` int(11) NOT NULL DEFAULT '0',
  `Doc_idDoc` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Universidade_has_Enderco`
--

CREATE TABLE `Universidade_has_Enderco` (
  `Universidade_idUniversidade` int(11) NOT NULL DEFAULT '0',
  `Enderco_idEnderco` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Universidade_has_Enderco`
--

INSERT INTO `Universidade_has_Enderco` (`Universidade_idUniversidade`, `Enderco_idEnderco`) VALUES
(12, 18),
(13, 19),
(14, 20);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Universidade_has_Publicacao`
--

CREATE TABLE `Universidade_has_Publicacao` (
  `Universidade_idUniversidade` int(11) NOT NULL DEFAULT '0',
  `Publicacao_idPublicacao` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Aluno`
--
ALTER TABLE `Aluno`
  ADD PRIMARY KEY (`idAluno`);

--
-- Índices de tabela `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idcontacto`),
  ADD KEY `fk_contacto_Aluno1_idx` (`Aluno_idAluno`);

--
-- Índices de tabela `Curso`
--
ALTER TABLE `Curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Índices de tabela `Doc`
--
ALTER TABLE `Doc`
  ADD PRIMARY KEY (`idDoc`);

--
-- Índices de tabela `Enderco`
--
ALTER TABLE `Enderco`
  ADD PRIMARY KEY (`idEnderco`),
  ADD KEY `fk_Enderco_Aluno1_idx` (`Aluno_idAluno`);

--
-- Índices de tabela `Img_Perfil`
--
ALTER TABLE `Img_Perfil`
  ADD PRIMARY KEY (`idImg_Perfil`),
  ADD KEY `fk_Img_Perfil_Aluno1_idx` (`Aluno_idAluno`),
  ADD KEY `fk_Img_Perfil_Universidade1_idx` (`Universidade_idUniversidade`);

--
-- Índices de tabela `Incricao_universidade`
--
ALTER TABLE `Incricao_universidade`
  ADD PRIMARY KEY (`Aluno_idAluno`,`Universidade_idUniversidade`),
  ADD KEY `fk_Aluno_has_Universidade_Universidade1_idx` (`Universidade_idUniversidade`),
  ADD KEY `fk_Aluno_has_Universidade_Aluno1_idx` (`Aluno_idAluno`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`),
  ADD KEY `fk_login_Universidade1_idx` (`Universidade_idUniversidade`),
  ADD KEY `fk_login_Aluno1_idx` (`Aluno_idAluno`);

--
-- Índices de tabela `Publicacao`
--
ALTER TABLE `Publicacao`
  ADD PRIMARY KEY (`idPublicacao`);

--
-- Índices de tabela `Universidade`
--
ALTER TABLE `Universidade`
  ADD PRIMARY KEY (`idUniversidade`);

--
-- Índices de tabela `Universidade_has_contacto`
--
ALTER TABLE `Universidade_has_contacto`
  ADD PRIMARY KEY (`Universidade_idUniversidade`,`contacto_idcontacto`),
  ADD KEY `fk_Universidade_has_contacto_contacto1_idx` (`contacto_idcontacto`),
  ADD KEY `fk_Universidade_has_contacto_Universidade1_idx` (`Universidade_idUniversidade`);

--
-- Índices de tabela `Universidade_has_Curso`
--
ALTER TABLE `Universidade_has_Curso`
  ADD PRIMARY KEY (`Universidade_idUniversidade`,`Curso_idCurso`),
  ADD KEY `fk_Universidade_has_Curso_Curso1_idx` (`Curso_idCurso`),
  ADD KEY `fk_Universidade_has_Curso_Universidade1_idx` (`Universidade_idUniversidade`);

--
-- Índices de tabela `Universidade_has_Doc`
--
ALTER TABLE `Universidade_has_Doc`
  ADD PRIMARY KEY (`Universidade_idUniversidade`,`Doc_idDoc`),
  ADD KEY `fk_Universidade_has_Doc_Doc1_idx` (`Doc_idDoc`),
  ADD KEY `fk_Universidade_has_Doc_Universidade1_idx` (`Universidade_idUniversidade`);

--
-- Índices de tabela `Universidade_has_Enderco`
--
ALTER TABLE `Universidade_has_Enderco`
  ADD PRIMARY KEY (`Universidade_idUniversidade`,`Enderco_idEnderco`),
  ADD KEY `fk_Universidade_has_Enderco_Enderco1_idx` (`Enderco_idEnderco`),
  ADD KEY `fk_Universidade_has_Enderco_Universidade_idx` (`Universidade_idUniversidade`);

--
-- Índices de tabela `Universidade_has_Publicacao`
--
ALTER TABLE `Universidade_has_Publicacao`
  ADD PRIMARY KEY (`Universidade_idUniversidade`,`Publicacao_idPublicacao`),
  ADD KEY `fk_Universidade_has_Publicacao_Publicacao1_idx` (`Publicacao_idPublicacao`),
  ADD KEY `fk_Universidade_has_Publicacao_Universidade1_idx` (`Universidade_idUniversidade`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Aluno`
--
ALTER TABLE `Aluno`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idcontacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de tabela `Curso`
--
ALTER TABLE `Curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `Doc`
--
ALTER TABLE `Doc`
  MODIFY `idDoc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `Enderco`
--
ALTER TABLE `Enderco`
  MODIFY `idEnderco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de tabela `Img_Perfil`
--
ALTER TABLE `Img_Perfil`
  MODIFY `idImg_Perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de tabela `Publicacao`
--
ALTER TABLE `Publicacao`
  MODIFY `idPublicacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `Universidade`
--
ALTER TABLE `Universidade`
  MODIFY `idUniversidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `fk_contacto_Aluno1` FOREIGN KEY (`Aluno_idAluno`) REFERENCES `Aluno` (`idAluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Enderco`
--
ALTER TABLE `Enderco`
  ADD CONSTRAINT `fk_Enderco_Aluno1` FOREIGN KEY (`Aluno_idAluno`) REFERENCES `Aluno` (`idAluno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Img_Perfil`
--
ALTER TABLE `Img_Perfil`
  ADD CONSTRAINT `fk_Img_Perfil_Aluno1` FOREIGN KEY (`Aluno_idAluno`) REFERENCES `Aluno` (`idAluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Img_Perfil_Universidade1` FOREIGN KEY (`Universidade_idUniversidade`) REFERENCES `Universidade` (`idUniversidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Incricao_universidade`
--
ALTER TABLE `Incricao_universidade`
  ADD CONSTRAINT `fk_Aluno_has_Universidade_Aluno1` FOREIGN KEY (`Aluno_idAluno`) REFERENCES `Aluno` (`idAluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Aluno_has_Universidade_Universidade1` FOREIGN KEY (`Universidade_idUniversidade`) REFERENCES `Universidade` (`idUniversidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_login_Aluno1` FOREIGN KEY (`Aluno_idAluno`) REFERENCES `Aluno` (`idAluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_login_Universidade1` FOREIGN KEY (`Universidade_idUniversidade`) REFERENCES `Universidade` (`idUniversidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Universidade_has_contacto`
--
ALTER TABLE `Universidade_has_contacto`
  ADD CONSTRAINT `fk_Universidade_has_contacto_Universidade1` FOREIGN KEY (`Universidade_idUniversidade`) REFERENCES `Universidade` (`idUniversidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Universidade_has_contacto_contacto1` FOREIGN KEY (`contacto_idcontacto`) REFERENCES `contacto` (`idcontacto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Universidade_has_Curso`
--
ALTER TABLE `Universidade_has_Curso`
  ADD CONSTRAINT `fk_Universidade_has_Curso_Curso1` FOREIGN KEY (`Curso_idCurso`) REFERENCES `Curso` (`idCurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Universidade_has_Curso_Universidade1` FOREIGN KEY (`Universidade_idUniversidade`) REFERENCES `Universidade` (`idUniversidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Universidade_has_Doc`
--
ALTER TABLE `Universidade_has_Doc`
  ADD CONSTRAINT `fk_Universidade_has_Doc_Doc1` FOREIGN KEY (`Doc_idDoc`) REFERENCES `Doc` (`idDoc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Universidade_has_Doc_Universidade1` FOREIGN KEY (`Universidade_idUniversidade`) REFERENCES `Universidade` (`idUniversidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Universidade_has_Enderco`
--
ALTER TABLE `Universidade_has_Enderco`
  ADD CONSTRAINT `fk_Universidade_has_Enderco_Enderco1` FOREIGN KEY (`Enderco_idEnderco`) REFERENCES `Enderco` (`idEnderco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Universidade_has_Enderco_Universidade` FOREIGN KEY (`Universidade_idUniversidade`) REFERENCES `Universidade` (`idUniversidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Universidade_has_Publicacao`
--
ALTER TABLE `Universidade_has_Publicacao`
  ADD CONSTRAINT `fk_Universidade_has_Publicacao_Publicacao1` FOREIGN KEY (`Publicacao_idPublicacao`) REFERENCES `Publicacao` (`idPublicacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Universidade_has_Publicacao_Universidade1` FOREIGN KEY (`Universidade_idUniversidade`) REFERENCES `Universidade` (`idUniversidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
