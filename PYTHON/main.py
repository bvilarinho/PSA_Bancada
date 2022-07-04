# python3.6

import random
import time
from time import sleep

import pymysql.cursors
from paho.mqtt import client as mqtt_client


broker = '192.168.1.85'     #IP utilizado
port = 1883

topic5 = "temp_hum"
topic = "test\msg_unica"
###
topic2 = "ruido"
topic3 = "vibracao"
topic4 = "humidade"
###
# generate client ID with pub prefix randomly
client_id = f'python-mqtt-{random.randint(0, 100)}'
# username = 'emqx'
# password = 'public'


# Leitura do ficheiro onde está guardado o id_comp
f = open ('ID_comp.txt',"r")
id_comp = int(f.readline())
#

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
        global log_ruido
        global insert_statement
        global _aux
        global mensagem_completa
        global hora_temp_hum
        global valores_ruido

        if (msg.topic == topic):
            mensagem_completa = msg.payload.decode()
            hora_temp_hum, _temp, _hum, dia, hora_ruido, tempo_amostragem, log_ruido = mensagem_completa.split(';',6)
            valores_ruido = log_ruido.split(';',-1)
            print('mensagem completa:',mensagem_completa)
            print('hora temp e hum:', hora_temp_hum)
            print('temp:',_temp)
            print('hum:',_hum)
            print('dia', dia)
            print('hora inicio log ruido', hora_ruido)
            print('tempo_amostragem:', tempo_amostragem)
            print('ruido:', log_ruido)
            print('ruido:', valores_ruido)





        #if (msg.topic == topic3):
            #_vib = msg.payload.decode()

        #if (msg.topic == topic2):
            #print("topic2 a ser lido")


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

                print('No componente', id_comp,' são recebidas as grandezas:' )
                print('temperatura' if leitura_temp == 1 else '')
                print('humidade' if leitura_hum == 1 else '')
                print('ruido' if leitura_ruido == 1 else '')
                print('vibracao' if leitura_vib == 1 else '')


                if leitura_hum == 1 and leitura_temp == 1:
                    sql = ("INSERT INTO `%s` (`temperatura`,`humidade`) VALUES  ({},{})".format(_temp, _hum))
                    cursor.execute(sql, int(id_comp))
                    print('valores enviados de temp e hum para a tabela do componente', id_comp,' temp:', _temp, 'hum:', _hum)


                if leitura_hum == 1 and leitura_temp == 0:
                    sql = ("INSERT INTO `%s` (`humidade`) VALUES  ({})".format(_hum))
                    cursor.execute(sql, int(id_comp))
                    print('2**** h:',_hum)

                if leitura_temp == 1 and leitura_hum == 0:
                    sql = ("INSERT INTO `%s` (`temperatura`) VALUES  ({})".format(_temp))
                    cursor.execute(sql, int(id_comp))
                    print('3**** T:', _temp)

                if leitura_vib == 1:
                    sql = ("INSERT INTO `%s` (`vibracao`) VALUES  ({})".format(_vib))
                    cursor.execute(sql, int(id_comp))
                    print('4**** ', _vib)

                if leitura_ruido == 1:
                    sql = ("INSERT INTO `%s` (`ruido`) VALUES  `(%s)`")
                    cursor.execute(sql, id_comp, valores_ruido)
                    print('5*****')


            # connection is not autocommit by default. So you must commit to save
            # your changes.
            connection.commit()



    # Leitura temperatura---------topico que estiver aqui é o subscrito, por isso é que quando havia dois topics (temp_hum + ruido) o ruido so aparecia no primeiro
    client.subscribe(topic)
    client.on_message = on_message



def run():
    client = connect_mqtt()
    subscribe(client)
    #client.loop_forever()
    client.loop_start()
    sleep (20)
    client.loop_stop



if __name__ == '__main__':
    run()

