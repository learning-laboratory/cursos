velocidadeActualDoCarro = 96
velocidadeLimite = 80
MULTA_VELOCIDADE_ACIMA_LIMITE = 65

if velocidadeActualDoCarro > velocidadeLimite:
    multa = (velocidadeActualDoCarro - velocidadeLimite) * MULTA_VELOCIDADE_ACIMA_LIMITE
    print('>> Ultrapassou a velocidade limite de 80km/h.')
    print('>> MULTA: {} MZN'.format(multa))