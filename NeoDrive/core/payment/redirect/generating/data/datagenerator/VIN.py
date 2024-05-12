import random

def generate_vin():
    characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
    length = 17
    vin = ''.join(random.choices(characters, k=length))
    return vin

vin = generate_vin()

print("VIN generado:", vin)
