import math

def calcular_area_circulo(radio):
    return math.pi * radio**2

radio = float(input("Ingrese el radio del círculo: "))
area = calcular_area_circulo(radio)
print("El área del círculo es:", area)
