# counter = 1
# while counter < 10:
#     print('>> {}'.format(counter))
#     counter += 1

# n = 1
# sum = 0
# while n != 0:
#     n = int(input('Digite um valor: '))
#     sum += n
#
# print(sum)

number = 1
par = impar = 0
while number != 0:
    number = int(input('Enter a number:'))
    if number % 2 == 0:
        par += 1
    else:
        impar += 1

print('Par: {} >> Impar: {}'.format(par, impar))