from machine import Pin,ADC
from time import sleep
import time

ciclo=1
a1=0
a2=0
periodo=0
freq=0
t1=0.05
t2=3
t_end = time.time() + t2
meiospulsos=0

def testecaudal(a1,a2,periodo,freq,meiospulsos):

    aux=True
    ciclo=1
    a1=0
    a2=0
    periodo=0
    freq=0
    t1=0.05
    t2=3
    t_end = time.time() + t2

    meiospulsos=0
    while  time.time() < t_end:
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
            periodo=t2/meiospulsos    #usar valor do intervalo de tempo que está a ser utilizado, neste caso 2s.
            freq=1/(periodo)
        print ('a1:',a1, 'a2:',a2, 'periodo:',periodo, 'frequencia', freq, 'meios pulsos:', meiospulsos) 
        return freq


i=1
while (i<20):
    i=i+1
    sleep(t1)
    
    testecaudal(a1,a2,periodo,freq,meiospulsos)
