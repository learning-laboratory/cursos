import datetime

print('Federacao Nacional de Natacao')
print('Detector de categoria')
anoDeNascimento = int(input('\nAno de nascimento: '))

idade = datetime.date.today().year - anoDeNascimento

if idade <= 9:
    print('Categoria: Iniciante')
elif idade <= 14:
    print('Categoria: Infantil')
elif idade <= 19:
    print('Categoria: Junior')
elif idade <= 20:
    print('Categoria: Senior')
else:
    print('Categoria: Master')