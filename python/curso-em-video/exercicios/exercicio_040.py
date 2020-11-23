import math

primeiraNota = float(input('Primeira nota: '))
segundaNota = float(input('Segunda nota: '))
media = math.ceil((primeiraNota + segundaNota) / 2)
print('MEDIA: {}'.format(media))

if media < 10:
    print('SITUACAO: EXCLUIDO')
elif media < 14:
    print('SITUACAO: ADMITIDO')
else:
    print('SITUACAO: PARABENS! DISPENSADO.')


