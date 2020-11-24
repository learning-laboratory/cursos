primeiroTermo = float(input('Digite o primeiro termo: '))
diferenca = float(input('Diferenca: '))

print(primeiroTermo, end=" >> ")
i = 1
while i < 11:
    primeiroTermo += diferenca
    print(primeiroTermo, end=" >> ")
    i += 1
print("FIM")