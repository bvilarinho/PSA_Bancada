# python3.6

import random

import pymysql.cursors


from paho.mqtt import client as mqtt_client


broker = '192.168.1.85'
port = 1883
topic = "teste/nivel"
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


def subscribe(client: mqtt_client):
    def on_message(client, userdata, msg):
        print(f"Received `{msg.payload.decode()}` from `{msg.topic}` topic")
        # Connect to the database
        connection = pymysql.connect(host='localhost',
                                     user='root',
                                     password='',
                                     database='psa_bancada',
                                     cursorclass=pymysql.cursors.DictCursor)
        # connection with data base
        with connection:
            with connection.cursor() as cursor:
                # Create a new record
                sql = "INSERT INTO `dados` (`temperatura`) VALUES  (%s)"
                cursor.execute(sql, (msg.payload.decode()))

            # connection is not autocommit by default. So you must commit to save
            # your changes.
            connection.commit()


    client.subscribe(topic)
    client.on_message = on_message


def run():
    client = connect_mqtt()
    subscribe(client)
    client.loop_forever()


if __name__ == '__main__':
    run()
