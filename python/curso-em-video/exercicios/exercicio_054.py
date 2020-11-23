from datetime import  date

contadorDeMaiores = 0
contadorDeMenores = 0

for i in range(0, 7):
    anoDeNascimento = int(input('Ano de nascimento: '))
    if date.today().year - anoDeNascimento >= 18:
        contadorDeMaiores += 1
    else:
        contadorDeMenores += 1

print('Maiores: {}'.format(contadorDeMaiores))
print('Menores: {}'.format(contadorDeMenores))