from datetime import date

yearOfBirth = int(input('Digite o ano de nascimento: '))
age = date.today().year - yearOfBirth

if age < 18:
    print('Ainda faltam {} anos para o efectuar o Recenciamneto Militar.'.format(18-age))
elif age > 18:
    print('Ja passou {} anos da idade de efectuar o Recenciamneto Militar.'.format(age-18))
else:
    print('Voce esta na idade de efectuar o Recenciamneto Militar.')

