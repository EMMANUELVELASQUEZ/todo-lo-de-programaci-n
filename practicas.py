#primer ejemplo

def nueva_linea():
    print

    print (" Primera linea.")
    nueva_linea()
    print ("segunda linea. ")


#segundo  ejemplo

print ("Primera_linea.")
nueva_linea()
nueva_linea()
nueva_linea()
print("Segunda linea. ")


#segundo ejemplo

def treslineas():
    nueva_linea()
    nueva_linea()
    nueva_linea()

    print("Primera linea. ")
    treslineas()
    print("Segunda Linea.")


#tercer ejemplo

def nueva_linea():
    print

def trelineas():
    nueva_linea()
    nueva_linea()
    nueva_linea()

    print("Primera Linea.")
    trelineas()
    print("Segunda Linea.")



#ACTIVIDAD 1 de ejecucion 

    print("Primera Linea.")
    trelineas()
    print("Segunda Linea.")

    def nueva_linea():
    print    ---------------------------------->> # el error de esto es que en cierto momento estamos imprimiendo desde el principio y no obtenemos resultados.

def trelineas():
    nueva_linea()
    nueva_linea()
    nueva_linea()



#ACTIVIDAD 2 de ejecucion 

def nueva_linea():
    print

    nueva_linea()
    nueva_linea()
    nueva_linea()
def trelineas():


    print("Primera Linea.")
    trelineas()
    print("Segunda Linea.")


#ejemplo 4

def imprimeDoble(paso):
    print (paso,  paso)


#ejemplo 5

>>> latoya = 'Dafne, es mitad laurel mitad ninfa'
>>> print(latoya*2)
Dafne, es mitad laurel mitad ninfaDafne, es mitad laurel mitad ninfa

#ejemplo 6

def catDoble(parte1, parte2):
    cat = parte1 + parte2
    imprimeDoble(cat)

#ejemplo 7

>>> cantus1 = "Die jesu Domine, "
>>> cantus2 = "Dona eis requiem."

>>> print(cantus1, cantus2)

Die jesu Domine,  Dona eis requiem.
>>> print(cantus1, cantus2*2)
Die jesu Domine,  Dona eis requiem.Dona eis requiem.

>>> print(cantus1*2, cantus2*2)
Die jesu Domine, Die jesu Domine,  Dona eis requiem.Dona eis requiem.

#ejemplo 8

nueva_linea() + 7 

