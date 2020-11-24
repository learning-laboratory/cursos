number = sum = counter = 0
maxNumber = minNumber = 0
answer = 'S'
while answer.upper() != 'N':
    number = float(input("Digite o numero: "))
    if counter == 0:
        minNumber = maxNumber = number
    if number < minNumber:
        minNumber = number
    if number > maxNumber:
        maxNumber = number
    sum += number
    counter += 1
    answer = input('Deseja continuar[S/N]? ')

print(f'Avarage: {sum/counter}')
print(f'Max: {maxNumber}')
print(f'Min: {minNumber}')
