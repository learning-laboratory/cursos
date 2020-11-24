print('===== CALCULADORA =====\n')


def checkAndReturnBiggerNumber(firstNumber, secondNumber):
    return firstNumber if firstNumber > secondNumber else secondNumber


def calculator(firstNumber, secondNumber, operator):
    result = -1
    if operator == 'sum':
        result = firstNumber + secondNumber
    elif operator == 'sub':
        result = firstNumber - secondNumber
    elif operator == 'multiplication':
        result = firstNumber * secondNumber
    elif operator == 'division':
        result = firstNumber / secondNumber
    else:  # subtracao
        result = firstNumber - secondNumber
    return result


option = -1
result = -1
while option != 6:
    if option == -1 or option == 5:
        firstNumber = float(input('\nPrimeiro numero: '))
        secondNumber = float(input('Segundo numero: '))

    print('\n[ 1 ]. Somar')
    print('[ 2 ]. Subtrair')
    print('[ 3 ]. Multiplicar')
    print('[ 4 ]. Dividir')
    print('[ 5 ]. Novos numeros')
    print('[ 6 ]. Sair')
    option = int(input('>> '))

    if option == 1:
        result = calculator(firstNumber, secondNumber, 'sum')
    elif option == 2:
        result = calculator(firstNumber, secondNumber, 'sub')
    elif option == 3:
        result = calculator(firstNumber, secondNumber, 'multiplication')
    elif option == 4:
        result = calculator(firstNumber, secondNumber, 'division')

    if option != 5 and option != 6:
        print('\nReultado: {}'.format(result))
