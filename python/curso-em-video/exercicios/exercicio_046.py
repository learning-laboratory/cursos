import time

textColors = {
    'clear':'\033[m',
    'white': '\033[30m',
    'red': '\033[31m',
    'green': '\033[32m',
    'yellow': '\033[33m',
    'blue': '\033[34m',
    'purple': '\033[35m',
    'cyan': '\033[36m',
    'gray': '\033[37m',
}

print('>>>>> CONTAGEM REGRESSIVA <<<<<')
print('\n Iniciando...')

for i in range(11, 0, -1):
    time.sleep(1)
    if i <= 3:
        print('{}{}'.format(textColors['green'], i))
    elif i <= 6:
        print('{}{}'.format(textColors['yellow'], i))
    elif i <= 10:
        print('{}{}'.format(textColors['red'], i))

time.sleep(0.90)
print('\nFELIZ ANO NOVO!')