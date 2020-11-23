import math
import random
import emoji

# from math import sqrt

# biblioteca math
num = int(input('Type number: '))
raiz = math.sqrt(num)
print('The square root of {} is {:.2f}'.format(num, raiz))
# Mostra duas casas depois da virgula {:.2f}

# numeros aleatorios
num = random.random()  # gera numero aleatorios de 0 a 1
num1 = random.randint(2, 8)  # nnumero aleatorios de 2 a 8
num2 = random.randrange(2, 10, 2)  # numeros aleatorios de 2 a 10 com salto de 2 em 2
print(num, num1, num2)

# biblioteca de emoji
print(emoji.emojize("Ola, Mundo :sunglasses:", use_aliases=True))
