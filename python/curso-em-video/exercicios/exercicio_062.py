primeiroTermo = float(input('Digite o primeiro termo: '))
diferenca = float(input('Diferenca: '))

i = 1
numeroTermos = termos = 4
termoActual = primeiroTermo

while termos > 0:
    while i < numeroTermos:
        print(termoActual, end=" >> ")
        termoActual += diferenca
        i += 1
    termos = int(input('Pretende mostrar mais quantos termos: '))
    numeroTermos += termos

print("FIM")