print('>> TRIANGULO')

primeiroLado = float(input('Comprimento do lado 01: '))
segundoLado = float(input('Comprimento do lado 02: '))
terceiroLado = float(input('Comprimento do lado 03: '))

if primeiroLado + segundoLado > terceiroLado and segundoLado + terceiroLado > primeiroLado and terceiroLado + primeiroLado > segundoLado:
    if primeiroLado == segundoLado == terceiroLado:
        print('Triangulo: EQUILATERO')
    elif primeiroLado != segundoLado != terceiroLado != primeiroLado:
        print('Triangulo: ESCALENO')
    else:
        print('Triangulo: ISOSCELES')
else:
    print('Nao podemos formar um triangulo, com estes comprimentos.')