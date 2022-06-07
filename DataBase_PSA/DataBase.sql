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
  `temperatura` int,
  `lim_temp` int,
  `caudal` int,
  `lim_caudal` int,
  `pressao` int,
  `lim_pressao` int,
  `data` timestamp,
  `id_maq` int
);

CREATE TABLE `dados` (
  `id_componente` int,
  `id_sensor` int,
  `temperatura` int,
  `caudal` int,
  `pressao` int,
  `data` timestamp
);

CREATE TABLE `sensores` (
  `id_sensor` int,
  `nome` int,
  `descricao` int,
  `unidades` int,
  `grandeza` varchar(255),
  `data` timestamp
);

CREATE TABLE `manutencoes` (
  `id_manutencao` int,
  `id_componente` int,
  `detalhes` varchar(255),
  `data_manutencao_feita` timestamp,
  `data_manutencao_marcada` timestamp
);

CREATE TABLE `avarias` (
  `id_avaria` int,
  `id_componente` int,
  `problema` varchar(255),
  `data_problema` timestamp,
  `resolucao` varchar(255),
  `data_resolucao` timestamp,
  `por_resolver` boolean
);

CREATE TABLE `observacoes` (
  `id_observacao` int,
  `id_componente` int,
  `descricao` int,
  `data_observacao` timestamp
);

CREATE TABLE `quilometro_0` (
  `id_maq` int,
  `id_componente` int,
  `valores` int,
  `data_observacao` timestamp
);

ALTER TABLE `maquinas` ADD FOREIGN KEY (`id_maq`) REFERENCES `componentes` (`id_maq`);

ALTER TABLE `componentes` ADD FOREIGN KEY (`id_componente`) REFERENCES `dados` (`id_componente`);

ALTER TABLE `dados` ADD FOREIGN KEY (`id_sensor`) REFERENCES `sensores` (`id_sensor`);

ALTER TABLE `componentes` ADD FOREIGN KEY (`id_componente`) REFERENCES `manutencoes` (`id_componente`);

ALTER TABLE `componentes` ADD FOREIGN KEY (`id_componente`) REFERENCES `avarias` (`id_componente`);

ALTER TABLE `componentes` ADD FOREIGN KEY (`id_componente`) REFERENCES `observacoes` (`id_componente`);

ALTER TABLE `componentes` ADD FOREIGN KEY (`id_componente`) REFERENCES `quilometro_0` (`id_componente`);
