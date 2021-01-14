CREATE TABLE `usuario` (
  `idUsuario` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
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
  `deficiencia` varchar(5) NOT NULL,
  `tipoDeficiencia` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
);

CREATE TABLE `deficiencia` (
  `idDeficiencia` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `deficiencia` int(11) DEFAULT NULL,
  `tipoDeficiencia` varchar(50) DEFAULT NULL
);


CREATE TABLE `genero` (
  `idGenero` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `genero` varchar(50) DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `raca` (
  `idRaca` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `raca` varchar(50) DEFAULT NULL
);

CREATE TABLE `feed` (
  `idFeed` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `idDeficiencia` int(11) DEFAULT NULL,
  `idGenero` int(11) DEFAULT NULL,
  `idRaca` int(11) DEFAULT NULL,
  `conteudo` varchar(500) DEFAULT NULL,
  FOREIGN KEY (idDeficiencia) REFERENCES deficiencia(idDeficiencia),
  FOREIGN KEY (idGenero) REFERENCES genero(idGenero),
  FOREIGN KEY (idRaca) REFERENCES raca(idRaca)
);

