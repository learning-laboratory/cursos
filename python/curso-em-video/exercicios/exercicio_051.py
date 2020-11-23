primeiroTermo = float(input('Digite o primeiro termo: '))
diferenca = float(input('Diferenca: '))

print(primeiroTermo, end=" >> ")
for i in range(1, 11):
    primeiroTermo += diferenca
    print(primeiroTermo, end=" >> ")
print("FIM")