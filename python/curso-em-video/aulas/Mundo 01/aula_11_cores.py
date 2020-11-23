# print('\033[4;30;45mOla, Mundo\033[m')
# print('\033[1;32;41mOla, Mundo\033[m')
# print('\033[7;34;40mOla, Mundo\033[m')

name = 'Mario'

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


print('{}Ola, {}Mundo!'.format(textColors['red'],textColors['blue']))