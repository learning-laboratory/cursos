firstNumber = float(input('Enter the first number: '))
secondNumber = float(input('Enter the second number: '))

if firstNumber > secondNumber:
    print('The first number is bigger that second.')
elif secondNumber > firstNumber:
    print('The second number is bigger that first.')
else:
    print('Cannot exist the bigger number. This numbers is iguals.')
