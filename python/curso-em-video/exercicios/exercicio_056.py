
mediaIdades = 0
homemMaisVelho = 0
numMulhesComMenosVinte = 0

for i in range(0, 5):
    nome = input('Nome: ')
    idade = int(input('Idade: '))
    sexo = input('Sexo[M or F]: ')

    mediaIdades += idade

    if sexo == 'M':
        if idade > homemMaisVelho:
            homemMaisVelho = idade

    if idade < 20:
        numMulhesComMenosVinte += 1

print('\nMedia: {}'.format(mediaIdades))
print('Homem mais velho: {}'.format(homemMaisVelho))
print('Numero de mulheres com menos de 20 anos: {}'.format(numMulhesComMenosVinte))