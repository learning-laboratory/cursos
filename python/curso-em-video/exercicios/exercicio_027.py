fullName = input('Type your name: ')
names = fullName.split()

print('first name: {}'.format(names[0]))
print('last name: {}'.format(names[len(names) - 1]))
