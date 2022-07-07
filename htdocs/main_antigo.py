
# Atualizar para o main do IVAN
# Fazer código machine learning de comparação

import random
from paho.mqtt import client as mqtt_client
from scipy.fft import fht

# broker = '192.168.1.103' # IP utilizado
broker = '192.168.1.6' # IP utilizado
port = 1883
topic = "teste"
topic5 = "temp_hum"
topic2 = "ruido"
topic3 = "vibracao"

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

_temp = -1
_hum = -1
_aux = 1
_vib = -1
_ruido = 0

def subscribe(client: mqtt_client):
    def on_message(client, userdata, msg):
        # print(f"Received `{msg.payload.decode()}` from `{msg.topic}` topic")
        # print(f"Received `{msg.payload.decode()}` from `{msg.topic}` topic")
        global _temp
        global _hum
        global _vib
        global _aux
        global _ruido
        global _temp_hum
        global leitura_id_comp
        global leitura_temp
        global leitura_hum
        global leitura_vib
        global leitura_ruido

        if (msg.topic == topic5):
            _temp_hum = msg.payload.decode()
            _temp, _hum = _temp_hum.split(';', 1)
 
            try:
                ft = open("temperatura.txt", 'a+')
                ft.write(_temp)
                ft.write("\n")
            except FileNotFoundError:
                ft = open("temperatura.txt", 'a+')
                ft.write(_temp)
                ft.write("\n")
            ft.close()

            try:
                fh = open("humidade.txt", 'a+')
                fh.write(_hum)
                fh.write("\n")
            except FileNotFoundError:
                fh = open("humidade.txt", 'a+')
                fh.write(_hum)
                fh.write("\n")
            fh.close()

        if (msg.topic == topic3):
            _vib = msg.payload.decode()
            try:
                fv = open("vibracao.txt", 'a+')
                fv.write(_hum)
                fv.write("\n")
            except FileNotFoundError:
                fv = open("vibracao.txt", 'a+')
                fv.write(_hum)
                fv.write("\n")
            fv.close()

        if (msg.topic == topic2):
            _ruido = msg.payload.decode()
            try:
                fr = open("ruido.txt", 'a+')
                fr.write(_ruido)
                fr.write("\n")
            except FileNotFoundError:
                fr = open("ruido.txt", 'a+')
                fr.write(_ruido)
                fr.write("\n")
            fr.close()

    # Leitura temperatura
    client.subscribe(topic5)
    client.on_message = on_message

def run():
    client = connect_mqtt()
    subscribe(client)
    client.loop_forever()

if __name__ == '__main__':
    run()
