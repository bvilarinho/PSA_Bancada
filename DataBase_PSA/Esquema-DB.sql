CREATE TABLE `Maquinas` (
  `id_maq` int PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255),
  `descricao` varchar(255),
  `data` timestamp
);

CREATE TABLE `Dispositivos` (
  `id_dispositivo` int PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(255),
  `descricao` varchar(255),
  `grandezas` varchar(255),
  `data` timestamp,
  `id_maq` int
);

CREATE TABLE `Dados` (
  `id_dispositivo` int,
  `tipoSensor` varchar(255),
  `valores` varchar(255),
  `dados_data` datetime
);

CREATE TABLE `Avarias` (
  `id_dispositivo` int,
  `problema` varchar(255),
  `data_problema` datetime,
  `solucao` varchar(255),
  `data_solucao` datetime,
  `porResolver` boolean
);

CREATE TABLE `Manutencoes` (
  `id_dispositivo` int,
  `manutencao` varchar(255),
  `data_manutencao` datetime
);

ALTER TABLE `Manutencoes` ADD FOREIGN KEY (`id_dispositivo`) REFERENCES `Dispositivos` (`id_dispositivo`);

ALTER TABLE `Avarias` ADD FOREIGN KEY (`id_dispositivo`) REFERENCES `Dispositivos` (`id_dispositivo`);

ALTER TABLE `Dados` ADD FOREIGN KEY (`id_dispositivo`) REFERENCES `Dispositivos` (`id_dispositivo`);

ALTER TABLE `Dispositivos` ADD FOREIGN KEY (`id_maq`) REFERENCES `Maquinas` (`id_maq`);
