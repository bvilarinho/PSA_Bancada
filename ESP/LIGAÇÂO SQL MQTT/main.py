# python3.6
###### XAMPP tem que estar aberto para inicializar o SQL
import random
import time
from time import sleep

import pymysql.cursors
from paho.mqtt import client as mqtt_client



broker = '192.168.0.122'     #IP utilizado
port = 1883
topic = "temperatura"
###
topic2 = "ruído"
topic3 = "vibração"
topic4 = "humidade"
###
# generate client ID with pub prefix randomly
client_id = f'python-mqtt-{random.randint(0, 100)}'
# username = 'emqx'
# password = 'public'


# Connect to the database
connection = pymysql.connect(host='localhost',
                             user='root',
                             password='',
                             database='psa_bancada',
                             cursorclass=pymysql.cursors.DictCursor)



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



def subscribe(client: mqtt_client):
    def on_message(client, userdata, msg):
        #print(f"Received `{msg.payload.decode()}` from `{msg.topic}` topic")
        #print(f"Received `{msg.payload.decode()}` from `{msg.topic}` topic")
        global _temp
        global _hum
        global _vib
        global _aux

        if (msg.topic == topic):
            _temp = msg.payload.decode('utf8')
            print(f"Received `{_temp}` from `{msg.topic}` topic")

        if (msg.topic == topic4):
            _hum = msg.payload.decode()
            print(f"Received `{_hum}` from `{msg.topic}` topic")

        if (msg.topic == topic3):
            _vib = msg.payload.decode()
            print('vibração', _vib)





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

                if (msg.topic == topic):
                    sql = ("INSERT INTO `dados` (`temperatura`) VALUES  ({})".format(_temp))
                    cursor.execute(sql)

                if (msg.topic == topic4):
                    sql2 = ("INSERT INTO `dados` (`humidade`) VALUES  ({})".format(_hum))
                    cursor.execute(sql2)




            # connection is not autocommit by default. So you must commit to save
            # your changes.
            connection.commit()



    # Leitura temperatura
    client.subscribe(topic)
    client.on_message = on_message

    time.sleep(1)
    # Leitura humidade
    client.subscribe(topic4)
    client.on_message = on_message






def run():
    client = connect_mqtt()
    subscribe(client)
    client.loop_forever()


if __name__ == '__main__':
    run()
