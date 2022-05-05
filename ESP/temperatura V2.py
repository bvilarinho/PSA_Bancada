from machine import Pin, ADC
from time import sleep

aux = True

pot = ADC(Pin(35))
pot.atten(ADC.ATTN_11DB)
pot.width(ADC.WIDTH_12BIT)

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
    print ( 'aux: ', aux, 'Valor ADC :', xx, 'V in : ',v, ' - T em ºC: - ', T)