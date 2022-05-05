from machine import Pin, ADC
from time import sleep

aux=True
valorADC=ADC(Pin(32)) 
#valorADC.atten(ADC.ATTN_11DB)
#valorADC.width(ADC.WIDTH_12BIT)
#v=3.3


while True:
    sleep(0.5)
    aux=not aux
    valorADC=ADC(Pin(32)) 
    adc=valorADC.read()
    #v = adc*0.00200439453/20
    adc01=valorADC/4095
    print ('Valor ADC:',adc)
    print ('valor 0 (low), 1(high)', adc01)