const express = require('express')
const app = express()
//var snap7 = require('node-snap7');
const port = 3000
const mqtt = require('mqtt');
var mysql = require('mysql');

var cors = require('cors')
app.use(cors())

//----------------------CONEXÃO COM O SERVIDOR SQL (Base de Dados)-------------------------------------
var con = mysql.createConnection({
    //DEIXAR ESTAR LOCALHOST
    host: "localhost",
    //Username || Normalmente é "root"
    user: "yourusername",
    //Password || Vcs é que definem no HeidiSQL
    password: "yourpassword",
});

//-----------------------------------------------------------------------------------------------------


//---------------------------------MQTT----------------------------------------------------------------

const connectUrl = "mqtt://test.mosquitto.org:1883"
const client = mqtt.connect(connectUrl);


const topic = '/ua_proj/mqtt'
client.on('connect', () => {
    console.log('MQTT - Connected\n')
    client.subscribe([topic], () => {
        console.log(`Subscribed to topic '${topic}'\n`)
    })
})
client.on('message', (topic, payload) => {
    console.log('Received Message:', payload.toString())
})

//-----------------------------------------------------------------------------------------------------



//---------------------------------WebServer-----------------------------------------------------------
app.get('/getInfoDB/:tipoMaquina/:id_dispositivo/:tipoSensor', function (req, res) {

    var tipoMaquina = req.params.tipoMaquina;
    var id_dispositivo = req.params.id_dispositivo;
    var tipoSensor = req.params.tipoSensor;

    var response;
    var sql = "SELECT Dados.valores, Dados.dados_data FROM Dispositivos INNER JOIN Dados ON Dispositivos.id_dispositivo = Dados.id_dispositivo INNER JOIN Maquinas ON Dispositivos.id_maq = Maquinas.id_maq WHERE Maquinas.nome = ? AND Dispositivos.id_dispositivo = ? AND Dados.tipoSensor = ?";

    con.connect(function (err) {
        if (err) {
            res.status(500).send(err);
        } else {
            con.query(sql, [tipoMaquina, id_dispositivo, tipoSensor], function (err, result) {
                if (err) {
                    res.status(500).send(err);
                } else {
                    res.send(result);
                }
            });
        }
    });
})



app.get('/', function (req, res) {
    res.send("Hello World!")
})


//O WebServer vai estar a "ouvir" a porta definida lá em cima no port (3000) -- http://localhost:3000 
app.listen(port, () => {
    console.log(`PLC-Web app a correr na porta ${port}\n`)
})

//-----------------------------------------------------------------------------------------------------




//PARA A PARTE DE MACHINE LEARNING TÊM --> https://github.com/mljs/ml || TÊM DE PROCURAR QUAL TIPO DE ML É QUE QUEREM AQUI DENTRO.

//SNAP7 PARA LIGAR AO PLC || SE DER ERRO DÁ PARA CONTINUAR A USAR O SERVIDOR WEB MAS A INFO DO PLC NUNCA VAI CHEGAR
// https://github.com/mathiask88/node-snap7/blob/master/doc/client.md --> AQUI TENS A DOCUMENTAÇÃO DO QUE FAZ CADA FUNÇÃO EXISTENTE NO SNAP7

/*var s7client = new snap7.S7Client();
//IP 127.0.0.1 É O LOCALHOST (TEM DE SE MUDAR) || AO LIGAR POR CABO ETHERNET AO PLC VAIS TER DE IR VER O IP DO PLC E TROCAR AQUI POR ESSE.
s7client.ConnectTo('127.0.0.1', 0, 1, function(err) {
    if(err){
        return console.log(' >> Connection failed. Code #' + err + ' - ' + s7client.ErrorText(err));
    }
});*/



/*app.get('/getPLCInfo', function (req, res) {
    // EBRead(startOffset, QtdBytesParaLer) - Função para LER APENAS ProcessInputs || DOC --> https://github.com/mathiask88/node-snap7/blob/master/doc/client.md#s7clientebreadstart-size-callback
    var data = [];
    //Ta a ler 1 byte na posição 0.
    s7client.EBRead(0,1, (err,result) => {
        if(err){
            console.log("Erro no Read de Info do PLC: " + err);
        }else{
            //Insere o resultado no array data que dps vai ser mandado para o HTML || Podes chamar várias funções de Read e ir adicionando ao array.
            data.push(result.toString('utf-8'));
        }
    });
    //SE DESCOMENTARES VAIS TER 2 RESULTADOS NO ARRAY --> Isto é apenas um exemplo.
        //Ta a ler 1 byte na posição 1.
        s7client.EBRead(1,1, (err,result) => {
        if(err){
            console.log("Erro no Read de Info do PLC: " + err);
        }else{
            //Insere o resultado no array data que dps vai ser mandado para o HTML || Podes chamar várias funções de Read e ir adicionando ao array.
            data.push(result.toString('utf-8'));
        }
    });
  res.send(data);
})*/
