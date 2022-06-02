# Complete project details at https://RandomNerdTutorials.com



def sub_cb(topic, msg):
  print((topic, msg))
  print ('xxxx')
  if topic == b'notification' and msg == b'received':
    print('ESP received hello message')

def connect_and_subscribe():
  global client_id, mqtt_server, topic_sub, MQTTClient
  client_id = 'xxx222'
  client = MQTTClient(client_id, mqtt_server)
  #client = MQTTClient(CLIENT_ID, MQTT_SERVERI MQTT_PORT, MQTT_USER, MQTT_PASSWORD)
  client.set_callback(sub_cb)
  client.connect()
  print('Connected to %s MQTT broker, subscribed to %s topic' % (mqtt_server, topic_sub))
  return client

def restart_and_reconnect():
  print('Failed to connect to MQTT broker. Reconnecting...')
  time.sleep(10)
  machine.reset()

try:
  client = connect_and_subscribe()
except OSError as e:
  restart_and_reconnect()

##temperatura + humidade
import dht
from machine import Pin, I2C, ADC
from time import sleep

#Criação do objeto DHT11 (Carcassa Azul)
d = dht.DHT11 ( Pin(26) )
temp = 0
hum = 0
i=1
while i<20:
    i = i + 1
    try:
        sleep (2)                 #menos que 2s ha perda de dados para o MQTT
        d.measure()
        temp = d.temperature()
        hum = d.humidity()
        print ('i:', i, 'Temperatura ºC: ', temp, '-> Humidade: ', hum )
    except OSError as e:
        print ( 'Failed to read sensor.' )

##vibração#######

#while True:
    #sleep(0.05)
    #vib = ADC(Pin(32))
    #vib.width(vib.WIDTH_10BIT)
    #xx = vib.read()
    #if xx<1023:
    #    print ('Inclinação detetada!')
    #print ( 'Valor ADC :', xx)
    
##############################################
    
    try:
        client.check_msg()
        if (time.time() - last_message) > message_interval:
      
            msg = str (temp) 
            topic_pub1 = 'temperatura'
            client.publish(topic_pub, msg)
            
            msg2 = str (hum) 
            topic_pub1 = 'humidade'
            client.publish(topic_pub4, msg2)
      
      
            last_message = time.time()
            counter += 1
    except OSError as e:
        restart_and_reconnect()
        
