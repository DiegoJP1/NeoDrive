import re
import random

def generar_codigo_tarjeta():
    patron = '^3[47]\\d{0,13}'
    numero_tarjeta = ''.join(random.choices('0123456789', k=16))
    while not re.match(patron, numero_tarjeta):
        numero_tarjeta = ''.join(random.choices('0123456789', k=16))
    
    return numero_tarjeta
print("Número de tarjeta generado:", generar_codigo_tarjeta())
