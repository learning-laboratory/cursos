maiorPeso  = 0
menorPeso = 0

for i in range(0,5):
    peso = float(input('Peso: '))
    if(i == 0):
        maiorPeso = peso
        menorPeso = peso
    elif maiorPeso < peso:
        maiorPeso = peso
    elif menorPeso > peso:
        menorPeso = peso

print('Maior peso: {}'.format(maiorPeso))
print('Menor peso: {}'.format(menorPeso))