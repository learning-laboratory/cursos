a = int(input('Valor de A: '))
b = int(input('Valor de B: '))

print('ADDITION {}, MULTIPLICATION {}, DIVISION {}, SUBTRACTION {} '.format(a + b, a * b, a / b, a - b))
print('MODULES {} EXPONENTIATION {} FLOOR DIVISION {}'.format(a % b, a ** b, a // b))

name = input('What is your name? ')

# centralizar em 10 espacos
print('Ola, {:^10}'.format(name))

# alinhar a esquerda em 10 espacos
print('Ola, {:<10}'.format(name))

# alinhar a direita em 10 espacos
print('Ola, {:^10}'.format(name))

# colocar === e o name no meio
print('Ola, {:=^10}'.format(name))
