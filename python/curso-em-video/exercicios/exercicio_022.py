name = input('Type your name: ')

lenghtName = len(name.replace(' ', ''))
firstName = name.split()[0]

print('UPPERCASE: {}'.format(name.replace(' ', '')))
print('lowercase: {}'.format(name.lower()))
print('length of name: {}'.format(lenghtName))
print('lenght of first name: {}'.format(len(firstName)))