name = input('What is your name? ')

if name == 'Mario':
    print('Your name is beautiful >> {} <<.'.format(name))
elif name in 'Joao Carlos Marco Marcia':
    print('Popular name. good')
else:
    print('Your name is {}'.format(name))