from random import randint
from time import sleep

print('=' * 10 + ' JOGO DE ADIVINHA ' + '=' * 10)
print('\n>> Vou pensar em um numero de 0 a 10. Tente adivinhar.')
numeroComputador = randint(0, 10)

for palpites in range(1,6):
    numeroUtilizador = int(input('>> Resposta: '))

    print('>> PROCESSANDO...')
    sleep(1)

    if numeroUtilizador == numeroComputador:
        print('\n>> PARABENS! Voce consegui.!')
        print('>> Presicou de {} palpites para certar.'.format(palpites))
        break
    elif numeroUtilizador > numeroComputador:
        print('\n>> Nao acertou, É um numero menor que {}'.format(numeroUtilizador))
    else:
        print('\n>> Nao acertou, É um numero maior que {}'.format(numeroUtilizador))

