
frase = " curso em video Python"

# print(frase[3])
# print(frase[1:12])
# print(frase[:9])
# print(frase[4:])
# print(frase[2:21:2])

print(frase.count('o'))
print(frase.find('i'))
print(frase.count('o', 0, 9))
print(frase.upper())
print(frase.lower())

print(len(frase))
print(frase.replace('Python','Java'))
novaFrase = frase.replace('Python','Java web ')
frase = novaFrase
print(frase)
print('Java' in frase)
print(frase.capitalize())
print(frase.title())
print(frase.strip())
print(frase.rstrip())
print(frase.lstrip())
print(frase.split())
frase = frase.split()
print('-'.join(frase))