import random

def generate_license_plate():
    letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z']
    numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9']
    license_plate_letters = ''.join(random.choices(letters, k=3))
    license_plate_numbers = ''.join(random.choices(numbers, k=4))
    license_plate = license_plate_letters + '-' + license_plate_numbers
    return license_plate
license_plate = generate_license_plate()
print("Matrícula generada:", license_plate)
