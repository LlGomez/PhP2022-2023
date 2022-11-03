

def posicion_primera_ocurrencia(vector, numero):

    i = 0
    encontrado = False
    posicion = -1
    while i<len(vector) and encontrado == False:
        if (vector[i]==numero):
            encontrado = True
            posicion = i

        i = i + 1

    

    return posicion






numeros = [6, 7, 7,0]

resultado = posicion_primera_ocurrencia(numeros,7)

if (resultado!=-1):
    print(resultado)
else:
    print("No se ha encontrado el numero")

    