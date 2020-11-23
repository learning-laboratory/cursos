number = int(input('Enter the number: '))

print('Choose the base of conversion')
print('1 -> Binary')
print('2 -> Octal')
print('3 -> Hexadecimal')
numberSelected = int(input('Option: '))

if numberSelected == 1:
    conversion = bin(number)[2:]
elif numberSelected == 2:
    conversion = oct(number)[2:]
elif numberSelected == 3:
    conversion = hex(number)[2:]
else:
    print('Your choose wrong option. Please try again.')

if  conversion:
    print('Result: {}'.format(conversion))
