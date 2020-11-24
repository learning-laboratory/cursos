from random import randint
from time import sleep
print('='*10+' JOGO DE ADIVINHA '+'='*10)
print('\n>> Vou pensar em um numero de 0 a 10. Tente adivinhar.')
numeroComputador = randint(0,5)

for palplites in range(1, 6):
    numeroUtilizador = int(input('>> Resposta: '))
    print('PROCESSANDO...')
    sleep(1)

    if numeroUtilizador < numeroComputador:
        print('\n>> Errado! O numero {} e\' menor.'.format(numeroUtilizador))
    elif numeroUtilizador > numeroComputador:
        print('\n>> Errado! O numero {} e\' maior.'.format(numeroUtilizador))
    else:
        print('\n>> PARABENS! Voce consegui!')
        print('>> Depois de {} tentativas.'.format(palplites))
        break
