sexo = 'none'
while sexo.upper() not in ('M', 'F'):
    sexo = input('Sexo[M/F]: ')
    if sexo.upper() not in ('M', 'F'):
        print('Digite um valor valido!\n')