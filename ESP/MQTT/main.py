# Complete project details at https://RandomNerdTutorials.com

#
from machine import Pin, ADC
from time import sleep
#

def sub_cb(topic, msg):
  print((topic, msg))
  print ('xxxx')
  if topic == b'notification' and msg == b'received':
    print('ESP received hello message')

def connect_and_subscribe():
  global client_id, mqtt_server, topic_sub
  client_id = 'xxx222'
  client = MQTTClient(client_id, mqtt_server)
  # client = MQTTClient(CLIENT_ID, MQTT_SERVERI MQTT_PORT, MQTT_USER, MQTT_PASSWORD)
  client.set_callback(sub_cb)
  client.connect()
  client.subscribe(topic_sub)
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


# Config Entrada analógca
pot = machine.ADC(machine.Pin(35))
pot.atten (machine.ADC.ATTN_11DB)       # full range 3.3V
pot.width (machine.ADC.WIDTH_12BIT)     # 0..4096

#
v = 3.3
v = v/1000

a0 = 0.2265846
a1 = 24152.109
a2 = 67233.425
a3 = 2210340.7
a4 = -860963915
a5 = 4.83506*(10**10)
a6 = -1.18452*(10**12)
a7 = 1.38690*(10**13)
a8 = -6.33708*(10**13)

gain = 1700
cjc = 20

while True:
    sleep(0.5)
    xx = pot.read()
    v = xx*0.000805 /gain
    T = a0 + a1 * v + a2 * (v**2) +a3 * (v**3) + a4 * (v**4) +cjc
#

# Resolução 3.3 / 4096 = 0.000805
#aux = 1 
#while aux<100:
#  time.sleep (0.1)
#  xx = pot.read()
   
  #print ( 'Valor ADC : ', xx,'V in : ', xx * 0.000805 )
#  vin = xx * 0.000805
    
    try:
        client.check_msg()
        if (time.time() - last_message) > message_interval:
      
            msg = b'Hello #%d' % counter
            topic_pub2 = 'teste/led'
            client.publish(topic_pub2, msg)
      
            msg = str (T) #'Vin = {:0.2f} ',format(vin)  #= %f0.2', vin #vin em vez de T
            topic_pub1 = 'teste/nivel'
            client.publish(topic_pub1, msg)
      
      
            last_message = time.time()
            counter += 1
    except OSError as e:
        restart_and_reconnect()
