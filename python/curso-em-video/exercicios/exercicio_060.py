number = int(input('Factorial of '))

result = number
index = 1
while index < number:
    result = result * index
    index += 1

print('is : {}'.format(result))