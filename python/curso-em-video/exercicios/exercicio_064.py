
# number = sum = counter = 0
# while number != 999:
#     number = float(input("Digite o numero: "))
#     if number != 999:
#         sum += number
#         counter += 1

# print(f'Numbers: {counter}')
# print(f'Sum: {sum}')

sum = counter = 0
while True:
    number = int(input('Enter a number: '))
    if number == 999:
        break
    sum += number
    counter += 1

print(f"Numbers {counter}")
print(f'Sum {sum}')
print('END')