answer = 'S'
counterPeople =  olderOfEighteen = counterFemale = 0

while answer.upper() != 'N':
    yearsOld = int(input("Idade: "))
    sex = input("Sexo [M/F]: ")

    counterPeople += 1
    if yearsOld > 18:
        olderOfEighteen += 1
    if sex.upper() == 'F':
        counterFemale += 1
    answer = input('\nQuer continuar? [S/N]')

print(f"\nA -> Maior de 18 anos    : {olderOfEighteen}")
print(f"B -> Homens cadastrados  : {counterPeople-counterFemale}")
print(f"C -> Mulheres cadastradas: {counterFemale}")