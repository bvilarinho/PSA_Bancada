# PSA_Bancada

Bruno Vilarinho- 88732 - b.vilarinho@ua.pt
Carlos Sousa - 92983 - cdds@ua.pt
Victor Soares - 93033 - soaresvictor20@ua.pt
Ivan Paiva - 92960 - ivan.atpaiva@ua.pt

Versões Softwares:
- maquina virtual tia portal V16 e   eplan V2.9 SP1 - versao estudante
- Visual Studio 2019
- python 3.7.9

PROPOSTA DA RENAULT - caderno de encargos no elearning
Automato Siemens s7 1200
quais os sensores a utilizar (pressao, temperatura, vibraçoes)
recolher histórico de dados lidos para detetar eventuais falhas
com os valores obtidos registar num computador 
algoritmos de inteligencia artificial e deep learning - python, bastantes bibliotecas 

11 Março 2022
-> Criação repositório (Bruno)

15 Março 2022
-> Alteração no grupo, saída de João Quintino e entrada de Ivan Paiva (Carlos)

15 Março 2022
[A Borges] 
Coloquei um ficheiro com alguns dos objectivos pretendidos para a bancada.
Podem consultar alguns dos links que estão no ficheiro.
Como objetivo:
  - Adquirir as variáveis mais comuns em ambiente industrial (Pressão, Temperatura, Caudal, Vibrações,etc) 
  - Registo como KM0
  - Avaliação do comportamento dos sinais (degradação) para identificar avarias...
  - Utilizar AI e Deep Learning

18 Março 2022 [Bruno Vilarinho]

Upload do ficheiro da Apresentação 
Upload diagrama gantt atualizado

https://www.overleaf.com/8643591524ndhvffrdqhrb

25 Março 2022 Aula 
[Mockup] ->AXURE; FIGMA

https://www.figma.com/team_invite/redeem/k5O3XqHzFIR7mIuvUKsokv

25 Março 2022 Aula [Ivan] 

   tópicos da apresentação:
   
  -thonny
  
  -MQTT
  
  -instalar drivers do ESP
  
  -Aulas IEA microPython
  
  -Quarta feira 30/3 16h Aula EPLAN
  
  -snap7 biblioteca python 
  
  -raspberry pi - servidor
  
  -Desafio 1/4: Ler temperatura

1 de Abril 2022 início da elaboração da aplicação (Carlos)

8/4 apresentação:

-caudalímetro: ver documentação do email do professor

-possibilidade de usar note-red para criar a aplicação

-ganho temp=400, R1 470 R2 220k

-tarefas próxima semana:
  -Medir temperatura(simular avaria)
  -circuito caudalimetro[ivan]
  -Estrutura Base de Dados
  -Definir algoritmo Machine Learning [bruno]
  -Comunicação com o esp com MQTT(documentação de IEA)

-tarefas para 22/4: [Ivan]

-especificar tabela dos sensores(tipo de termopar, gama, casas decimais, ensaios)

-caudalimetro a ler valores

-machine learning

-tabela de componentes a ensaiar

-consumo eletrico (V,I,Freq)

-transferir dados (esp -> PC) com MQTT

-Dissertação sobre base de dados e machine learning - Pedro Limas


- Codigo caudalímetro leitura dos pulsos [Ivan]
  https://blog.adafruit.com/2018/12/27/frequency-measurement-on-an-esp32-in-micropython-esp32-micropython-python/
