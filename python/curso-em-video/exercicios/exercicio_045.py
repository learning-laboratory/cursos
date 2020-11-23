from random import randint
print('>>>>> [JOGO] <<<<<')
print('\nFAÇA A SUA JOGADA: ')
print('0 >> PEDRA')
print('1 >> PAPEL')
print('2 >> TESOURA')

opcoes = ['pedra','papel','tesoura']
jogadaDoComputador = randint(0,2)
jogadaDoUtilizador = int(input('OPÇAO: '))

if opcoes[jogadaDoComputador] == opcoes[jogadaDoUtilizador]:
    print('EMPATE. ELE ESCOLHEU {}'.format(opcoes[jogadaDoComputador]))
elif opcoes[jogadaDoComputador] == 'pedra' and opcoes[jogadaDoUtilizador] == 'tesoura':
    print('O COMPUTADOR VENCEU. ELE ESCOLHEU {}'.format(opcoes[jogadaDoComputador].upper()))
elif opcoes[jogadaDoComputador] == 'papel' and opcoes[jogadaDoUtilizador] == 'pedra':
    print('O COMPUTADOR VENCEU. ELE ESCOLHEU {}'.format(opcoes[jogadaDoComputador].upper()))
elif opcoes[jogadaDoComputador] == 'tesoura' and opcoes[jogadaDoUtilizador] == 'papel':
    print('O COMPUTADOR VENCEU. ELE ESCOLHEU {}'.format(opcoes[jogadaDoComputador].upper()))
elif opcoes[jogadaDoUtilizador] == 'pedra' and opcoes[jogadaDoComputador] == 'tesoura':
    print('VOCE VENCEU. ELE ESCOLHEU {}'.format(opcoes[jogadaDoComputador].upper()))
elif opcoes[jogadaDoUtilizador] == 'papel' and opcoes[jogadaDoComputador] == 'pedra':
    print('VOCE VENCEU. ELE ESCOLHEU {}'.format(opcoes[jogadaDoComputador].upper()))
elif opcoes[jogadaDoUtilizador] == 'tesoura' and opcoes[jogadaDoComputador] == 'papel':
    print('VOCE VENCEU. ELE ESCOLHEU {}'.format(opcoes[jogadaDoComputador].upper()))




