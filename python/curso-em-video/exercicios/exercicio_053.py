frase = input('Digite a frase: ')
inversoFrase = frase[::-1]

# inversoFrase = ''
# for i in range(len(frase) - 1, -1, -1):
#     inversoFrase += frase[i]

inversoFrase = inversoFrase.strip().replace(' ','')
frase = frase.strip().replace(' ','')

print('Palindrome' if inversoFrase == frase else 'Nao e\' palindrome')