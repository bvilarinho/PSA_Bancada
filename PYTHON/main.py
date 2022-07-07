# python3.6

import random
import time
from time import sleep
import pymysql

from paho.mqtt import client as mqtt_client


broker = '192.168.1.85'     #IP utilizado
port = 1883

topic = "test\msg_unica"

# generate client ID with pub prefix randomly
client_id = f'python-mqtt-{random.randint(0, 100)}'


# Leitura do ficheiro onde está guardado o id_comp
f = open ('ID_comp.txt',"r")
id_comp = int(f.readline())


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

        # Connect to the database
        connection = pymysql.connect(host='localhost',
                                     user='root',
                                     password='',
                                     database='psa_bancada',
                                     cursorclass=pymysql.cursors.DictCursor)

        # connection with data base
        with connection:
            with connection.cursor() as cursor:
                # deteção das grandezas a ler para o componente selecionado

                sql1 = "select `temperatura` from `componentes` where `id_comp` = %s "
                cursor.execute(sql1, id_comp)
                leitura_temp_aux = cursor.fetchone()
                leitura_temp = int(leitura_temp_aux['temperatura'])

                sql2 = "select `humidade` from `componentes` where `id_comp` = %s"
                cursor.execute(sql2, id_comp)
                leitura_hum_aux = cursor.fetchone()
                leitura_hum = int(leitura_hum_aux['humidade'])

                sql3 = "select `ruido` from `componentes` where `id_comp` = %s"
                cursor.execute(sql3, id_comp)
                leitura_ruido_aux = cursor.fetchone()
                leitura_ruido = int(leitura_ruido_aux['ruido'])

                sql4 = "select `vibracao` from `componentes` where `id_comp` = %s"
                cursor.execute(sql4, id_comp)
                leitura_vib_aux = cursor.fetchone()
                leitura_vib = int(leitura_vib_aux['vibracao'])

                print('No componente', id_comp, ' são recebidas as grandezas:')
                print('temperatura' if leitura_temp == 1 else '')
                print('humidade' if leitura_hum == 1 else '')
                print('ruido' if leitura_ruido == 1 else '')
                print('vibracao' if leitura_vib == 1 else '')



        if (msg.topic == topic):
            mensagem_completa = msg.payload.decode()
            timestamp_vib, tempo_amostragem_vib, timestamp_temp_hum, _temp, _hum, timestamp_ruido, tempo_amostragem_ruido, log_ruido_vib = mensagem_completa.split(';',7)
            valores_total = log_ruido_vib.split(';',-1)
            valores_vib = valores_total[201:]
            valores_ruido =valores_total[:200]

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

            ### Deteção de anomalias

            #ruído
            ruido_int = list(map(int, valores_ruido))
            print ('ruido int:', ruido_int)
            km0_ruido = 1.15 * sum(ruido_int) / len(ruido_int)
            print('km0 ruido:', km0_ruido)
            for item in ruido_int:
                if item > km0_ruido and leitura_ruido ==1:
                    print('Alerta ruido!')
                    try:
                        fr = open("alerta_ruido.txt", 'a+')
                        fr.write('1')
                        fr.write("\n")

                    except FileNotFoundError:
                        fr = open("alerta_ruido.txt", 'a+')
                        fr.write('1')
                        fr.write("\n")

                    fr.close()
                else:
                    try:
                        fr = open("alerta_temp.txt", 'a+')
                        fr.write('0')
                        fr.write("\n")

                    except FileNotFoundError:
                        fr = open("alerta_temp.txt", 'a+')
                        fr.write('0')
                        fr.write("\n")

                    fr.close()



            #vibração
            counter = 0
            vib_int = list(map(int, valores_vib))
            for item in vib_int:
                if item < 50:
                    counter = counter + 1
            print('counter', counter)
            print('vib int:', vib_int)
            km0_vib = 0.25
            print('vib:', counter/len(vib_int))
            if counter/len(vib_int) > km0_vib:
                print('Alerta vibração!')


            #temperatura

            ft = open("temperatura.txt","r")
            temp_read = list(map(int,ft.readlines()))
            print('temp_read:',temp_read)
            ft.close()
            km0_temp = 1.05 * sum(temp_read)/len(temp_read)
            print('km0 temp:', km0_temp)
            if int(_temp) > km0_temp:
                print('Alerta Temperatura')
                try:
                    fr = open("alerta_temp.txt", 'a+')
                    fr.write('1')
                    fr.write("\n")

                except FileNotFoundError:
                    fr = open("alerta_temp.txt", 'a+')
                    fr.write('1')
                    fr.write("\n")

                fr.close()
            else:
                try:
                    fr = open("alerta_temp.txt", 'a+')
                    fr.write('0')
                    fr.write("\n")

                except FileNotFoundError:
                    fr = open("alerta_temp.txt", 'a+')
                    fr.write('0')
                    fr.write("\n")

                fr.close()

            #humidade

            fh = open("humidade.txt", "r")
            hum_read = list(map(int, fh.readlines()))
            print('hum_read:', hum_read)
            fh.close()
            km0_hum = 1.05 * sum(hum_read) / len(hum_read)
            print('km0 hum:', km0_hum)
            if int(_hum) > km0_hum:
                print('Alerta Humidade')
                try:
                    fr = open("alerta_hum.txt", 'a+')
                    fr.write('1')
                    fr.write("\n")

                except FileNotFoundError:
                    fr = open("alerta_hum.txt", 'a+')
                    fr.write('1')
                    fr.write("\n")

                fr.close()
            else:
                try:
                    fr = open("alerta_hum.txt", 'a+')
                    fr.write('0')
                    fr.write("\n")

                except FileNotFoundError:
                    fr = open("alerta_hum.txt", 'a+')
                    fr.write('0')
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

