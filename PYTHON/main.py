import random
import time
from time import sleep

from paho.mqtt import client as mqtt_client

broker = '192.168.0.141'
#broker = '172.20.10.2'     #IP utilizado
#broker = '192.168.1.85'   #IP utilizado
#broker = '192.168.1.149' 
port = 1883

topic = "test\msg_unica"

# generate client ID with pub prefix randomly
client_id = f'python-mqtt-{random.randint(0, 100)}'

def connect_mqtt() -> mqtt_client:
    def on_connect(client, userdata, flags, rc):
        if rc == 0:
            print("Connected to MQTT Broker!\n\n")
        else:
            print("Failed to connect, return code %d\n", rc)

    client = mqtt_client.Client(client_id)
    client.on_connect = on_connect
    client.connect(broker, port)
    return client



def subscribe(client: mqtt_client):
    def on_message(client, userdata, msg):

        global _temp
        global _hum
        global tempo_amostragem
        global log_ruido_vib
        global mensagem_completa
        global valores_ruido
        global timestamp_temp_hum
        global timestamp_ruido
        global timestamp_vib
        global valores_vib
        global tempo_amostragem_ruido
        global tempo_amostragem_vib
        global log_ruido
        global valores_total
        global temp_read
        global hum_read
        global leitura_hum_aux
        global leitura_temp_aux
        global leitura_vib_aux
        global leitura_ruido_aux
        global leitura_temp
        global leitura_hum
        global leitura_ruido
        global leitura_vib

        
        if (msg.topic == topic):
            mensagem_completa = msg.payload.decode()
            timestamp_vib, tempo_amostragem_vib, timestamp_temp_hum, _temp, _hum, timestamp_ruido, tempo_amostragem_ruido, log_ruido_vib = mensagem_completa.split(';',7)
            valores_total = log_ruido_vib.split(';',-1)
            valores_vib = valores_total[201:]
            valores_ruido =valores_total[:200]

            try:
                fr = open("temperatura.txt", 'a+')
                fr.write(_temp)
                fr.write("\n")

            except FileNotFoundError:
                fr = open("temperatura.txt", 'a+')
                fr.write(_temp)
                fr.write("\n")
            fr.close()

            try:
                fr = open("humidade.txt", 'a+')
                fr.write(_hum)
                fr.write("\n")

            except FileNotFoundError:
                fr = open("humidade.txt", 'a+')
                fr.write(_hum)
                fr.write("\n")
            fr.close()

            try:
                fr = open("timestamp_temp_hum.txt", 'a+')
                fr.write(timestamp_temp_hum)
                fr.write("\n")

            except FileNotFoundError:
                fr = open("timestamp_temp_hum.txt", 'a+')
                fr.write(timestamp_temp_hum)
                fr.write("\n")

            fr.close()
           
            try:
                fr = open("vibracao.txt", 'a+')
                for item in valores_vib:
                    fr.write("%s\n" % item)

            except FileNotFoundError:
                fr = open("vibracao.txt", 'a+')
                for item in valores_vib:
                    fr.write("%s\n" % item)
            fr.close()

            try:
                fr = open("tempo_amostragem_vib.txt", 'a+')
                fr.write(tempo_amostragem_vib)
                fr.write("\n")

            except FileNotFoundError:
                fr = open("tempo_amostragem_vib.txt", 'a+')
                fr.write(tempo_amostragem_vib)
                fr.write("\n")

            fr.close()

            try:
                fr = open("timestamp_vib.txt", 'a+')
                fr.write(timestamp_vib)
                fr.write("\n")

            except FileNotFoundError:
                fr = open("timestamp_vib.txt", 'a+')
                fr.write(timestamp_vib)
                fr.write("\n")

            fr.close()

            try:
                fr = open("ruido.txt", 'a+')
                for item in valores_ruido:
                    fr.write("%s\n" % item)

            except FileNotFoundError:
                fr = open("ruido.txt", 'a+')
                for item in valores_ruido:
                    fr.write("%s\n" % item)

            fr.close()

            try:
                fr = open("tempo_amostragem_ruido.txt", 'a+')
                fr.write(tempo_amostragem_ruido)
                fr.write("\n")

            except FileNotFoundError:
                fr = open("tempo_amostragem_ruido.txt", 'a+')
                fr.write(tempo_amostragem_ruido)
                fr.write("\n")
            fr.close()
            try:
                fr = open("timestamp_ruido.txt", 'a+')
                fr.write(timestamp_ruido)
                fr.write("\n")

            except FileNotFoundError:
                fr = open("timestamp_ruido.txt", 'a+')
                fr.write(timestamp_ruido)
                fr.write("\n")
            fr.close()

    client.subscribe(topic)
    client.on_message = on_message


def run():
    client = connect_mqtt()
    subscribe(client)
    client.loop_forever()


if __name__ == '__main__':
    run()