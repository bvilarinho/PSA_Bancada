from machine import Pin,ADC
from time import sleep
import time


aux=True
ciclo=1
a1=0
a2=0
a3=0
a4=0
pulso=0
periodo=0
freq=0
t1=0.05 #intervalo de tempo de cada leitura de a1, a2
t2=2 #intervalo de tempo de leitura 
t_end = time.time() + t2


meiospulsos=0
while time.time() < t_end:
    sleep(t1)
    aux=not aux
    valorADC=ADC(Pin(33)) 
    adc=valorADC.read()
    adc01=adc/4095
    if ciclo==1 and adc01==1:
        a1=a1+1
    elif adc01==0 and a1!=0:
        a2=a2+1
        ciclo=0
    elif  adc01==1 and a2!=0:
        ciclo=1
        a1=0
        a2=0
        meiospulsos=meiospulsos+1
        periodo=t2/meiospulsos
        freq=1/(periodo)
    print ('a1:',a1, 'a2:',a2, 'periodo:',periodo, 'frequencia', freq, 'meios pulsos:', meiospulsos) 
