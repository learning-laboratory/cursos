firstNumber = float(input('Type first number: '))
secondNumber = float(input('Type second number: '))
thirdNumber = float(input('Type third number: '))

# if firstNumber > secondNumber and firstNumber > thirdNumber :
#     print('The bigger number is firt {}'.format(firstNumber))
# elif secondNumber > firstNumber and secondNumber > thirdNumber:
#     print('The bigger number is second {}'.format(secondNumber))
# else:
#     print('The bigger number is third {}'.format(thirdNumber))

bigger = firstNumber
if secondNumber > bigger:
    bigger = secondNumber
elif thirdNumber > bigger:
    bigger = thirdNumber

print('The bigger number is {}'.format(bigger))

