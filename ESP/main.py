# Complete project details at https://RandomNerdTutorials.com
import dht
from machine import Pin, ADC, I2C
from time import sleep
import utime as time


micropython.mem_info(1)


#Configuração Sensor KY-037 - Sound
_sound = ADC(Pin(33))
_sound.atten (ADC.ATTN_11DB)       # full range 3.3V
_sound.width (ADC.WIDTH_12BIT)     # 0..4096

# Criação do objecto DHT11 (Carcassa Azul)
d = dht.DHT11 ( Pin(26) ) 

def sub_cb(topic, msg):
  print((topic, msg))
  print ('xxxx')
  if topic == b'notification' and msg == b'received':
    print('ESP received hello message')

def connect_and_subscribe():
  global client_id, mqtt_server, topic_sub
  print ('* Subscribe Start...')
  print (client_id)
  print (mqtt_server)
  print (topic_sub)  
  print ('...')
  print ()
  #client_id = 'xxx222'
  client = MQTTClient(client_id, mqtt_server)
  # client = MQTTClient(CLIENT_ID, MQTT_SERVERI MQTT_PORT, MQTT_USER, MQTT_PASSWORD)
  client.set_callback(sub_cb)
  client.connect()
  client.subscribe(topic_sub)
  # print('Connected to %s MQTT broker, subscribed to %s topic' % (mqtt_server, topic_sub))
  return client

def restart_and_reconnect():
  print('Failed to connect to MQTT broker. Reconnecting...')
  time.sleep(10)
  machine.reset()

try:
  client = connect_and_subscribe()
except OSError as e:
  restart_and_reconnect()





# *********************
# Ciclo Princioal
# *********************
aux = 1

# Variáveis auxiliares para converter o array em buffer...
global buf 


while aux<5:
  aux = aux + 1
  
  # Leitura temperatura e humidade (necessário colocar este sleep(0.5) para não dar erro)
  time.sleep(0.5)
  d.measure()
  temp = d.temperature()
  hum = d.humidity()
  print (aux, ' Temperatura ºC: ', temp,  ' Humidade : ' ,  hum  )
  
  now1 = time.gmtime()
  hh_dht= '{:02d}:{:02d}:{:02d}'.format(now1[6],now1[4],now1[5])
  
  msg =  str(temp)+' ; ' + str(hum) 

  try:
    print ( 'Intervalo de tempo entre msg : ' , time.time() - last_message )
    client.check_msg()
    if (time.time() - last_message) > message_interval:
      
        # msg = str (temp) 
        #topic_pub2 = 'teste/led'
        #client.publish(topic_pub5, msg)
       
        last_message = time.time()
        counter += 1
    else:
        print ( '[1] Intervalo de tempo entre msg, curto...' )
    
  except OSError as e:
    print ('Erro envio msg temp e humidade...')
    restart_and_reconnect()
    
  
  
  sleep (2)
  # pode-se colocar numa função
  # Inicio do tempo de aquisição
  start_time = time.ticks_ms()
  sleep (0.5)
  
  
  aux1 = 0
  log = ''
  
  while (aux1<200):
    sleep (0.001)
    _xx = _sound.read()
    
    # log.append ( [hh, _xx])
    log = log + ';' + str(_xx)
    print ( 'aux1 : ', aux1,' Sound : ', _xx )
   
    # Terminar ciclo
    aux1 = aux1 + 1
    
  
  print ( 'aux1 : ', aux1,' Sound : ', _xx )
   
  # gc.mem_free()
  
    
  # Tempo de amostragem em ms
  end_time = time.ticks_ms()
  diff_time = end_time-start_time
  print ('Tempo de amostragem: ', diff_time )
  
  now = time.gmtime()
  dia = '{:04d}-{:02d}-{:02d}'.format(now[0],now[1],now[2])
  hh_ruido = '{:02d}:{:02d}:{:02d}'.format(now[6] ,now[4],now[5])
  
  log = hh_dht + ';' + str(temp) + ';' + str(hum) + ';' + dia + ';' + hh_ruido + ';' + str (diff_time) + '' + log
  try:
    print ( '[2] Intervalo de tempo entre msg : ' , time.time() - last_message )
    client.check_msg()
    if (time.time() - last_message) > message_interval:
        # arr = toBuffer(arr)
        topic_pub = 'test\msg_unica'
        client.publish(topic_pub, log )
        print (log)
        print('msg:', msg)
        last_message = time.time()
        counter += 1
    else:
        print ( '[2] Intervalo de tempo entre msg, curto...' )
          
  except OSError as e:
    restart_and_reconnect()

  
  
 
  gc.mem_free()