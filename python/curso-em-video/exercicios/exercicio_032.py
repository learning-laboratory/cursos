from datetime import date
year = date.today().year #int(input('Type a year:'))
answer = 'Bissexto' if year % 4 == 0 and year % 100 != 0 or year % 400 == 0 else 'Comum'

print('{} é um ano {}'.format(year, answer))
