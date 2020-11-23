# number = input('Type number[0-9999]: ')
# print(len(number))
# if len(number) >= 4:
#     print('Unidade: {}'.format(number[4]))
# if len(number) >= 3:
#     print('Dezena: {}'.format(number[3]))
# if len(number) >= 2:
#     print('Centena: {}'.format(number[2]))
# if len(number) >= 1:
#     print('Milhar: {}'.format(number[1]))

number = int(input('Type number[0-9999]: '))

unidade = number // 1 % 10
dezena = number // 10 % 10
centena = number // 100 % 10
milhar = number // 1000 % 10

print('Unidade: {}'.format(unidade))
print('Dezena: {}'.format(dezena))
print('Centena: {}'.format(centena))
print('Milhar: {}'.format(milhar))
