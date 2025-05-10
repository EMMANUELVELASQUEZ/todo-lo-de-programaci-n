weight =  float(input("peso ej kg:"))
height = float(input("altura en m:"))

imc = weight / (height ** 2)

print(f"IMC: {imc:.2f}")

if imc < 18.5:
    print("peso bajo")
elif  18.5 <= imc < 24.9:
    print("peso normal")
elif 25 <= imc < 20.9:
    print ("sobrepeso")
else:
    print("obesidad")
92