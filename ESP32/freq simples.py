from machine import Pin,ADC
from time import sleep

aux=True
ciclo=1
a1=0
a2=0
a3=0
a4=0
periodo=0
freq=0
t=0.005
while True:
    sleep(t)
    aux=not aux
    valorADC=ADC(Pin(33)) 
    adc=valorADC.read()
    adc01=adc/4095
    if ciclo==1 and adc01==1 and a2==0:
        a1=a1+1
        periodo=4*a1*t
        freq=1/periodo
    elif ciclo==1 and adc01==0 and a3==0:
        a2=a2+1
        periodo=4*a2*t
        freq=1/periodo
    elif ciclo==1 and adc01==1 and a2!=0:
        ciclo=0
    elif ciclo==0 and adc01==1 and a4==0:
        a3=a3+1
        periodo=4*a3*t
        freq=1/periodo
    elif ciclo==0 and adc01==0 and a3!=0:
        a4=a4+1
        periodo=4*a4*t
        freq=1/periodo
    elif ciclo==0 and adc01==1 and a4!=0:
        ciclo=1
        a1=0
        a2=0
        a3=0
        a4=0
    print ('ciclo:', ciclo) 
    print ('Valor ADC:',adc)
    print ('valor 0 (low), 1(high)', adc01)
    print ('a1:',a1, 'a2:',a2,'a3:',a3,'a4:',a4, 'periodo:',periodo, 'frequencia', freq) 
