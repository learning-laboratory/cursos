
print("======= FIBONACCI =======")
numero = int(input('\nDigite o numero: '))

anterior = 0
actual = 0
proximo = 1
print(actual, end=" >> ")
while proximo < numero:
    print(proximo, end=" >> ")
    anterior = actual
    actual = proximo
    proximo = actual + anterior
