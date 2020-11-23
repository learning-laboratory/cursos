print('n>> TRIANGULO')

primeiroLado = float(input('Comprimento do lado 01: '))
segundoLado = float(input('Comprimento do lado 02: '))
terceiroLado = float(input('Comprimento do lado 03: '))

if primeiroLado + segundoLado > terceiroLado and segundoLado + terceiroLado > primeiroLado and terceiroLado + primeiroLado > segundoLado:
    print('Podemos formar um triangulo.')
else:
    print('Nao podemos formar um triangulo.')