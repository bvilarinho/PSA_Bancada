#Boot
# Complete project details at https://RandomNerdTutorials.com

import time
from umqttsimple import MQTTClient
import ubinascii
import machine
import micropython
import network
import esp
esp.osdebug(None)
import gc
gc.collect()


#router vodafone
#ssid = 'VodafoneMobileWiFi-3BCC3D'
#password = 'rnPa719563'
#mqtt_server = '192.168.0.122'


#casa aveiro
ssid = 'Vodafone-85917F'
password = 'bsqR7wspCw'
mqtt_server ='192.168.1.85'

#dados
#ssid = 'AndroidAPF552'
#password = 'iqdl9722'
#mqtt_server ='192.168.48.177'

#ssid = 'AndroidAPF6536'
#password = '12345678'
#mqtt_server = '192.168.43.104'

#casa
#ssid = 'MEO-331EC1'
#password = 'FD3BBEF5EC'
#mqtt_server ='192.168.1.70'

client_id = ubinascii.hexlify(machine.unique_id())
topic_sub = 'test\msg_unica'
topic_pub = 'test\msg_unica'


last_message = 0
message_interval = 0.5
counter = 0

station = network.WLAN(network.STA_IF)

station.active(True)
station.connect(ssid, password)

while station.isconnected() == False:
  pass

print('Connection successful')
print(station.ifconfig())
