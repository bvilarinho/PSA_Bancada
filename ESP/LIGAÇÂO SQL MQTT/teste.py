# Acesso ao Mosquitto
# python3.6

import random
from time import time
import time

# MQTT - biblioteca
from paho.mqtt import client as mqtt_client

# MySQL - Bibliotecas
import mysql.connector
from mysql.connector import errorcode


def MySql_Insere_Registo(cnx, aux,  _temp, _hum):
    # Insere linha na base de dados
    mycursor = cnx.cursor()

    #print('Insere Registo...', id)

    # sql = "INSERT INTO `TestePSA`.`Alunos` (`idAlunos`, `First Name`, `Last Name`, `Age`) VALUES ('6', 'Caraças', 'Vieira', '55')"
    sql = ("INSERT INTO `dados`(`temperatura`, `humidade`) VALUES ({},{})".format(_temp, _hum))
    mycursor.execute(sql)
    cnx.commit()
    #print('Registo inserido...')
    #print('')


#def MySql_Read_Registers(cnx):
    # Leitura dos registos de uma base de dados
    #mycursor = cnx.cursor()

    #mycursor.execute("SELECT * FROM Alunos")

    #myresult = mycursor.fetchall()

    #for x in myresult:
        #print(x)

    #print('Fim leitura base de dados...')


# Mosquitto Brokker Parâmetros
broker = '192.168.1.85'
port = 1883
topic = "temperatura"
topic2 = "humidade"
# generate client ID with pub prefix randomly
client_id = f'python-mqtt-{random.randint(0, 100)}'


# username = 'emqx'
# password = 'public'

def connect_mqtt() -> mqtt_client:
    def on_connect(client, userdata, flags, rc):
        if rc == 0:
            print("Connected to MQTT Broker!")
        else:
            print("Failed to connect, return code %d\n", rc)

    client = mqtt_client.Client(client_id)
    # client.username_pw_set(username, password)
    client.on_connect = on_connect
    client.connect(broker, port)
    return client


def publish(client):
    msg_count = 0
    while True:
        time.sleep(1)
        msg = f"messages: {msg_count}"
        result = client.publish(topic, msg)
        # result: [0, 1]
        status = result[0]
        if status == 0:
            print(f"Send `{msg}` to topic `{topic}`")
        else:
            print(f"Failed to send message to topic {topic}")
        msg_count += 1


_temp = -1
_hum = -1
_aux = 1


def subscribe(client: mqtt_client):
    def on_message(client, userdata, msg):
        print(f"Received `{msg.payload.decode()}` from `{msg.topic}` topic")
        global _temp
        global _hum
        global _aux

        if (msg.topic == topic):
            _temp = msg.payload.decode('utf8')
            #print('Temperatura', _temp)

        if (msg.topic == topic2):
            _hum = msg.payload.decode()
            #print('Humidade', _hum)


        if ((_temp != -1) and (_hum != -1)):
            MySql_Insere_Registo(cnx,  int(_aux), str(_temp), str(_hum))
            print('_ Aux : ', _aux, 'Temp : ', _temp, ' Hum : ', _hum)
            _aux = _aux + 1
            _temp = -1
            _hum = -1



    # Leitura temperatura

    client.subscribe(topic)
    client.on_message = on_message

    time.sleep(1)
    # Leitura humidade
    client.subscribe(topic2)
    client.on_message = on_message


# Esta rotina deixa de ser necessária
def run():
    client = connect_mqtt()
    subscribe(client)
    publish (client)
    client.loop_forever()


# if __name__ == '__main__':
#    run()
# Variável para controlo de toda as variáveis adquiridas
# Rotina principal
try:
    # run ()

    cnx = mysql.connector.connect(user='root', password='',
                                  host='127.0.0.1',
                                  database='psa_bancada')
    print('...')
    print('LIgação MySql OK')
    print('...')
    print('')

    print('Ligação ao MQTT')
    client = connect_mqtt()
    print('Ligação MQTT Ok...)')
    print('')
    # subscribe(client)

    # Ciclo de subscrição de mensagens
    print('Start...')
    aux = 1
    while aux < 200:
        print('..', aux)

        subscribe(client)
        client.loop()

        aux = aux + 1



except mysql.connector.Error as err:
    if err.errno == errorcode.ER_ACCESS_DENIED_ERROR:
        print("Something is wrong with your user name or password")
    elif err.errno == errorcode.ER_BAD_DB_ERROR:
        print("Database does not exist")
    else:
        print(err)
else:
    cnx.close()