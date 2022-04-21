CREATE TABLE `maquinas` (
  `id_maq` int PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255),
  `descricao` varchar(255),
  `data` timestamp
);

CREATE TABLE `componentes` (
  `id_componente` int PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255),
  `descricao` varchar(255),
  `data` timestamp,
  `grandezas` varchar(255),
  `id_maq` int
);

CREATE TABLE `dados` (
  `id_componente` int PRIMARY KEY AUTO_INCREMENT,
  `id_sensor` int,
  `dados` int,
  `grandeza` varchar(255),
  `data` timestamp
);

CREATE TABLE `avarias` (
  `id_componente` int,
  `problema` varchar(255),
  `data_problema` timestamp,
  `resolucao` varchar(255),
  `data_resolucao` timestamp,
  `por_resolver` boolean
);

CREATE TABLE `manutencoes` (
  `id_componente` int,
  `detalhes` varchar(255),
  `data_manutencao_feita` timestamp,
  `data_manutencao_marcada` timestamp
);

CREATE TABLE `sensores` (
  `id_sensor` int PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255),
  `descricao` varchar(255),
  `grandeza` varchar(255),
  `unidades` varchar(255),
  `data` timestamp
);

ALTER TABLE `maquinas` ADD FOREIGN KEY (`id_maq`) REFERENCES `componentes` (`id_maq`);

ALTER TABLE `componentes` ADD FOREIGN KEY (`id_componente`) REFERENCES `dados` (`id_componente`);

ALTER TABLE `componentes` ADD FOREIGN KEY (`id_componente`) REFERENCES `avarias` (`id_componente`);

ALTER TABLE `componentes` ADD FOREIGN KEY (`id_componente`) REFERENCES `manutencoes` (`id_componente`);

ALTER TABLE `sensores` ADD FOREIGN KEY (`id_sensor`) REFERENCES `dados` (`id_sensor`);
