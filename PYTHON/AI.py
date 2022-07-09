def criarAlerta(value, index):
    try:
        read = open("alertas.txt", "r").readlines()
        read[index] = str (value)
        fal_temp = open("alertas.txt", "w")
        fal_temp.writelines(read)
        fal_temp.close()
    except FileNotFoundError:
        fal_temp = open("alertas.txt", "w+")
        fal_temp.write(value + "\n \n \n")
        fal_temp.close()

def criarKm(value1, value2, value3):
    try:
        ftemp = open("KM0_novo.txt", 'a+')
        ftemp.write(str(value1))
        ftemp.write("\n") 
        ftemp.write(str(value2))
        ftemp.write("\n")
        ftemp.write(str(value3))
        ftemp.write("\n")
        ftemp.close()
    except FileNotFoundError:
        ftemp = open("KM0_novo.txt", 'a+')
        ftemp.write(str(value1))
        ftemp.write("\n") 
        ftemp.write(str(value2))
        ftemp.write("\n")
        ftemp.write(str(value3))
        ftemp.write("\n")
        ftemp.close()

f = open("KM0.txt","r")
lines = f.readlines()
cal = float(lines[0])
print("Entrei")
# 0 se não estiver calibrado
# 1 se estiver 
if cal == 1:
    #temperatura
    if(lines[3] == '\n'):
        criarAlerta("\n",0)
    else:
        temp_med = float(lines[3])
        ftemp = open("temperatura.txt","r")
        KM0_temp = 1.05 * temp_med
        idx = 0
        for temp in ftemp:
            if(float(temp) > KM0_temp): idx = idx+1
        if idx > 0:
            criarAlerta(str(idx) + "\n",0)
   
    #humidade
    if(lines[6] == '\n'):
        criarAlerta("\n",1)
    else:
        hum_med = float(lines[6])
        fhum = open("humidade.txt","r")
        KM0_hum = 1.05 * hum_med
        idh = 0
        for hum in fhum:
            if(float(hum) > KM0_hum): idh = idh+1
        if idh > 0:
            criarAlerta(str(idh) + "\n",1)
   
    #vibração
    if(lines[9] == '\n'): 
        criarAlerta("\n",2)
    else:
        vib_med = float(lines[9])
        fvib = open("vibracao.txt","r")
        #KM0_vib = 0,25
        KM0_vib = 1.05 * vib_med
        idv = 0
        for vib in fvib:
            if(float(vib) > KM0_vib): 
                idv = idv+1
        if idv > 0:
            criarAlerta(str(idv) + "\n",2)
    
    #ruido
    if(lines[12] == '\n'):
        criarAlerta("\n",3)
    else:
        rui_med = float(lines[12])
        frui = open("ruido.txt","r")
        KM0_rui = 1.05 * rui_med
        idr = 0
        for rui in frui:
            if(float(rui) > KM0_rui): idr = idr+1
        if idr > 0:
            criarAlerta(str(idr) + "\n",3)
else:
    print("aqui!!")
    #temperatura
    ft = open("temperatura.txt","r")
    temp_read = list(map(int,ft.readlines()))
    tem_med = 1.05 * sum(temp_read)/len(temp_read)
    max_value = None
    for num in temp_read:
        if (max_value is None or num > max_value):
            max_value = num
    tem_min = min(temp_read)
    ft.close()
    criarKm(tem_min,max_value, tem_med)

    #humidade
    fh = open("humidade.txt","r")
    hum_read = list(map(int,fh.readlines()))
    hum_med = 1.05 * sum(hum_read)/len(hum_read)
    maxh_value = None
    for num in hum_read:
        if (maxh_value is None or num > maxh_value):
            maxh_value = num
    hum_min = min(hum_read)
    fh.close()
    criarKm(hum_min,maxh_value, hum_med)

    #vibracao
    fv = open("vibracao.txt","r")
    vib_read = list(map(int,fv.readlines()))
    vib_med = 1.05 * sum(vib_read)/len(vib_read)
    maxv_value = None
    for num in vib_read:
        if (maxv_value is None or num > maxv_value):
            maxv_value = num
    vib_min = min(vib_read)
    fv.close()
    criarKm(vib_min,maxv_value, vib_med)

    #ruido
    fr = open("ruido.txt","r")
    rui_read = list(map(int,fr.readlines()))
    rui_med = 1.05 * sum(rui_read)/len(rui_read)
    maxr_value = None
    for num in rui_read:
        if (maxr_value is None or num > maxr_value):
            maxr_value = num
    rui_min = min(rui_read)
    fr.close()
    criarKm(rui_min,maxr_value, rui_med)