valorPagar = float(input('Digite o valor a pagar: '))

print('\n>>>>> TIPO DE PAGAMENTO <<<<<')
print('[ 1 ] Dinheiro/Cheque') #desconto de 10%
print('[ 2 ] Cartao') #desconto de 5%
print('[ 3 ] 2x No Cartao') #preco normal
print('[ 4 ] 3x Ou Mais') #juros de 20%
opcao = int(input('Opcao: '))

total = 0
if opcao == 1:
    print('10 % de desconto.')
    total = valorPagar - valorPagar * 10/100
elif opcao == 2:
    print('5% de desconto.')
    total = valorPagar - valorPagar * 5/100
elif opcao == 3:
    print('Preco normal.')
    total = valorPagar
elif opcao == 4:
    print('20% de juros.')
    total = valorPagar + valorPagar * 20/100
else:
    print('Opcao incorrecta.')

print('Valor a pagar: {} MZN'.format(total))