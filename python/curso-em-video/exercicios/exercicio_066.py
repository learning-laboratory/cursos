counter = sum = 0
while True:
    number = int(input('Enter a number: '))
    if number == 999:
        break
    sum += number
    counter += 1

print(f"Numbers {counter}")
print(f'Sum {sum}')
print('END')