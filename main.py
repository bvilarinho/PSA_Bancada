# python3.6
###### XAMPP tem que estar aberto para inicializar o SQL
import random
import time
from time import sleep

import pymysql.cursors
from paho.mqtt import client as mqtt_client


broker = '192.168.48.177'     #IP utilizado
port = 1883

topic5 = "temp_hum"
topic = "temperatura"
###
topic2 = "ruído"
topic3 = "vibracao"
topic4 = "humidade"
###
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
    #client.username_pw_set(username, password)
    client.on_connect = on_connect
    client.connect(broker, port)
    return client

_temp = -1
_hum = -1
_aux = 1
_vib = -1
_som = 0

# variaveis a 1 e 0 conforme a seleção nas checkboxes do site de que grandezas ler para um certo componente
leitura_id_comp = 0
leitura_temp = 1            #############ler na base de dados que grandezas ler na tabela componentes(com todos os componentes)################1
leitura_hum = 0
leitura_vib = 0
leitura_som = 0



def subscribe(client: mqtt_client):
    def on_message(client, userdata, msg):
        #print(f"Received `{msg.payload.decode()}` from `{msg.topic}` topic")
        #print(f"Received `{msg.payload.decode()}` from `{msg.topic}` topic")
        global _temp
        global _hum
        global _vib
        global _aux
        global _som
        global _temp_hum
        global leitura_id_comp
        global leitura_temp
        global leitura_hum
        global leitura_vib
        global leitura_som


        if (msg.topic == topic5):
            _temp_hum = msg.payload.decode()
        _temp, _hum = _temp_hum.split(';', 1)
        print(_temp)
        print(_hum)
        print(_temp_hum)

        if (msg.topic == topic3):
            _vib = msg.payload.decode()

        if (msg.topic == topic2):
            _som = msg.payload.decode()


                # Connect to the database
        connection = pymysql.connect(host='localhost',
                                     user='root',
                                     password='',
                                     database='psa_bancada',
                                     cursorclass=pymysql.cursors.DictCursor)






        # connection with data base
        with connection:
            with connection.cursor() as cursor:
                    #Create a new record

                #if (msg.topic == topic5):

                if leitura_hum == 1 and leitura_temp == 1:
                    sql = ("INSERT INTO `dados` (`temperatura`,`humidade`) VALUES  ({},{})".format(_temp, _hum))
                    cursor.execute(sql)
                    ####trocar 'dados' para uma variavel que guarde o nome do id componente selecionado na pagina home do website##########

                if leitura_hum == 1 and leitura_temp == 0 and leitura_som == 0 and leitura_vib == 0:
                    sql = ("INSERT INTO `dados` (`humidade`) VALUES  ({})".format(_hum))
                    cursor.execute(sql)

                if leitura_temp == 1 and leitura_hum == 0 and leitura_som == 0 and leitura_vib == 0:
                    sql = ("INSERT INTO `dados` (`temperatura`) VALUES  ({})".format(_temp))
                    cursor.execute(sql)

                if leitura_vib== 1:
                    sql = ("INSERT INTO `leitura_id_comp` (`vibracao`) VALUES  ({})".format(_vib))
                    cursor.execute(sql)

                if leitura_som== 1:
                    sql = ("INSERT INTO `leitura_id_comp` (`ruído`) VALUES  ({})".format(_som))
                    cursor.execute(sql)

            # connection is not autocommit by default. So you must commit to save
            # your changes.
            connection.commit()



    # Leitura temperatura
    client.subscribe(topic5)
    client.on_message = on_message



def run():
    client = connect_mqtt()
    subscribe(client)
    client.loop_forever()


if __name__ == '__main__':
    run()
