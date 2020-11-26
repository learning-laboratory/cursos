

numero = sum = 0
while True:
    number = int(input('Enter a number: '))
    if number == 999:
        break
    sum += number

print(f'Sum {sum}')
print('END')