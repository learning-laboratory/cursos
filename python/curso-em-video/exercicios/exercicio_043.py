print('INDICE DE MASSA CORPORAL\n')

peso = float(input('Peso: '))
altura = float(input('Altura: '))

indiceMassaCorporal = peso / altura ** 2
print('IMC: {}'.format(indiceMassaCorporal))
if indiceMassaCorporal < 18.5:
    print('Abaixo do Peso.')
elif indiceMassaCorporal <= 25:
    print('Peso Ideal')
elif indiceMassaCorporal <= 30:
    print('Sobrepeso')
elif indiceMassaCorporal <= 40:
    print('Obesidade')
else:
    print('Obesidade morbida')