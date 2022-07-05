# python3.6

import random
import time
from time import sleep

from paho.mqtt import client as mqtt_client


broker = '192.168.1.85'     #IP utilizado
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

_temp = -1
_hum = -1
_aux = 1
_vib = -1
_ruido = 0

aux = 0

leitura_temp = 0
leitura_hum = 0
leitura_vib = 0
leitura_ruido = 0


def subscribe(client: mqtt_client):
    def on_message(client, userdata, msg):

        global _temp
        global _hum
        global _vib
        global _aux
        global _ruido
        global _temp_hum
        global leitura_temp_aux
        global leitura_hum_aux
        global leitura_vib_aux
        global leitura_ruido_aux
        global leitura_temp
        global leitura_hum
        global leitura_vib
        global leitura_ruido
        global dia
        global hora
        global tempo_amostragem
        global log_ruido_vib
        global insert_statement
        global _aux
        global mensagem_completa
        global hora_temp_hum
        global valores_ruido
        global ruido_inst
        global id_comp
        global values
        global params
        global timestamp_temp_hum
        global timestamp_ruido
        global timestamp_vib
        global valores_vib
        global tempo_amostragem_ruido
        global tempo_amostragem_vib
        global log_ruido
        global log_vib
        global valores_total


        if (msg.topic == topic):
            mensagem_completa = msg.payload.decode()
            timestamp_vib, tempo_amostragem_vib, timestamp_temp_hum, _temp, _hum, timestamp_ruido, tempo_amostragem_ruido, log_ruido_vib = mensagem_completa.split(';',7)
            valores_total = log_ruido_vib.split(';',-1)
            valores_vib = valores_total[401:]
            valores_ruido =valores_total[:400]

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
                fr = open("tempo_amostragem_vib.txt", 'a+')
                fr.write(tempo_amostragem_vib)
                fr.write("\n")

            except FileNotFoundError:
                fr = open("tempo_amostragem_vib.txt", 'a+')
                fr.write(tempo_amostragem_vib)
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
                fr = open("timestamp_vib.txt", 'a+')
                fr.write(timestamp_vib)
                fr.write("\n")

            except FileNotFoundError:
                fr = open("timestamp_vib.txt", 'a+')
                fr.write(timestamp_vib)
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
                fr = open("timestamp_temp_hum.txt", 'a+')
                fr.write(timestamp_temp_hum)
                fr.write("\n")

            except FileNotFoundError:
                fr = open("timestamp_temp_hum.txt", 'a+')
                fr.write(timestamp_temp_hum)
                fr.write("\n")

            fr.close()

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

            print('mensagem completa:',mensagem_completa)
            print('timestamp temp e hum:', timestamp_temp_hum)
            print('temp:',_temp)
            print('hum:',_hum)
            print('timestamp inicial do ruído:', timestamp_ruido)
            print('tempo_amostragem_ruido:', tempo_amostragem_ruido)
            print('timestamp inicial da vibracao:', timestamp_vib)
            print('tempo_amostragem_vib:', tempo_amostragem_vib)
            print('ruido:', valores_ruido)
            print('len(ruido)', len(valores_ruido))
            print('vibracao:', valores_vib)
            print('len(vib):',len(valores_vib))

    client.subscribe(topic)
    client.on_message = on_message



def run():
    client = connect_mqtt()
    subscribe(client)
    client.loop_forever()


if __name__ == '__main__':
    run()

