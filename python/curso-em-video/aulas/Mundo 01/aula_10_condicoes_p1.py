
# name = input("What is your name: ")
# if name == "Mario":
#     print('Nome bonito.')
# else:
#     print('Nome diferente')

firstResult = float(input('Type your first result: '))
secondResult = float(input('Type your second result: '))

average = (firstResult + secondResult) / 2

if(average > 10):
    print('Good job!')
else:
    print('Bad job, study more.')

print('Your average is {}'.format(average))