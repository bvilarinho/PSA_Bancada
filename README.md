# Bancada Diagnóstico
> Projeto desenvolvido para a unidade curricular de Projetos em Sistemas de Automação do Mestrado de Engenharia Mecânica (MEM), realizado sob orientação do professor Abílio Borges. 


## Tabela de conteúdos
* [Descrição](#Descrição)
* [Tecnologias usadas](#tecnologias-usadas)
* [Caracteristicas](#Caracteristicas)
* [Setup](#setup)
* [Demonstração](#demonstração)
* [Trabalho futuro](#Trabalho-futuro)
* [Autores](#autores)




## Descrição
Trabalho desenvolvido ao longo
de um semestre que visa o desenvolvimento de uma bancada de diagnóstico,
com o principal objetivo de distinguir e prever eventuais anomalias existentes em um conjunto de dados obtidos através de sensores. Esta unidade
de prevenção divide-se em quatro sistemas, sensores, base de dados, inteligência artificial e interface gráfica, podendo ser expandido posteriormente
para mais. Com isto, foi desenvolvido um programa que permite a leitura
dos dados dos sensores e armazená-los numa base de dados previamente
criada, de forma que o algoritmo de inteligência artificial consiga aceder a
esses valores e assim detetar se existe alguma anomalia. Por fim, foi criada
uma interface gráfica, com o intuito de permitir ao utilizador visualizar o
padrão dos dados recolhidos, receber alertas sobre o estado do equipamento
a diagnosticar e facilitar a interação entre todos os sistemas.



## Tecnologias usadas
- Python 3.7.9
- VS CODE 1.68.1 (2022)
- Mosquitto V2.0.9
- EPLAN V2.9 SP1
- XAMPP V3.3.0
- ESP32
- Sensor DHT11 (Temperatura e Humidade)
- Sensor SW-520D (Vibração)
- Sensor KY-037 (Ruído)



## Características
- Receção de dados dos sensores de temperatura, humidade, ruído e vibração.
- Envio dos dados por MQTT para PC.
- Upload dos dados para a base de dados.
- Página web capaz de visualizar os dados, registar observações de manutenções realizadas, inserir componentes de máquinas a analisar.


## Setup
Para o funcionamento completo, é necessário:
- Utilizar os sensores corretos, ligados ao ESP32 de acordo com o [projeto elétrico](https://github.com/bvilarinho/PSA_Bancada/tree/main/Esquema%20Elétrico).
- Ter os ficheiros [boot.py](https://github.com/bvilarinho/PSA_Bancada/blob/main/ESP/boot.py), [umqttsimple.py](https://github.com/bvilarinho/PSA_Bancada/blob/main/ESP/umqttsimple.py) e [main.py](https://github.com/bvilarinho/PSA_Bancada/blob/main/ESP/main.py) no ESP32 a que estão ligados os sensores.
- [Página WEB](https://github.com/bvilarinho/PSA_Bancada/tree/main/WEB), de modo a manipular a base de dados e visualizar os dados obtidos.
- Ter a [Base de dados](https://github.com/bvilarinho/PSA_Bancada/tree/main/DataBase_PSA), configurada de acordo.
- Ficheiro [main.py](https://github.com/bvilarinho/PSA_Bancada/tree/main/PYTHON) com o código de receção do MQTT e machine learning.

## Demonstração
- [Video](https://github.com/bvilarinho/PSA_Bancada/tree/main/Demonstração) com a demonstração do trabalho desenvolvido em funcionamento.
- [Relatório e Apresentação](https://github.com/bvilarinho/PSA_Bancada/tree/main/Apresentação%20e%20Relatório) com o trabalho desenvolvido.

## Trabalho futuro
No futuro em seguimento do trabalho desenvolvido é possível a expansão à utilização de mais sensores, e principalmente a implementação de um verdadeiro algoritmo de machine learning.

## Autores
Trabalho realizado por:
- Bruno Vilarinho
- Carlos Sousa
- Ivan Paiva
- Victor Soares
