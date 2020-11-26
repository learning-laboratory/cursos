print(">> Notas disponiveis <<")
print("50 MZN >> 20 MZN >> 10 MZN >> 1 MZN\n")

valueOfWithdrew = float(input("Digite o valor de levantamento: "))

notesOfFifty = valueOfWithdrew // 50
notesOfTwenty = valueOfWithdrew // 20
notesOfTen = valueOfWithdrew // 10
notesOfOne = valueOfWithdrew // 1

print("O  caixa ira retirar: ")
if notesOfFifty > 0:
    print(f"{notesOfFifty} notas de 50 MZN")
if notesOfTwenty > 0:
    print(f"{notesOfTwenty} notas de 20 MZN")
if notesOfTen > 0:
    print(f"{notesOfTen} notas de 10 MZN")
if notesOfOne > 0:
    print(f"{notesOfOne} notas de 1 MZN")