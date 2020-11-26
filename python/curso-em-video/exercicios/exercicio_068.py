from random import randint

def checkAndReturnIfParOrImpar(number):
    return 'Par' if number % 2 == 0 else 'Impar'

def checkAndReturnHowWin(userNumber, computerNumber, userChoose):
    numberCheckedIfParOrImpar =  checkAndReturnIfParOrImpar(userNumber+computerNumber)

    if numberCheckedIfParOrImpar[0].upper() == userChoose:
        return 'Usuario'
    return 'Computador'
     
print("============================")
print("VAMOS JOGAR PAR OU IMPAR")
print("============================")

computerNumber = randint(0, 999)
while True:
    userNumber = int(input("\nDigite o valor: "))
    userChoose = input("Par ou Impar? [P/I] ")
    nameOfWinner = checkAndReturnHowWin(userNumber, computerNumber, userChoose)    

    print(f'Voce jogou {userNumber} e o computador {computerNumber}.')
    print(f'Resultado: {userNumber+computerNumber} >> {checkAndReturnIfParOrImpar(userNumber+computerNumber)}\n')

    if nameOfWinner == 'Computador':
        print('O cumptador venceu.')
        print('Fim do jogo.')
        break

    print('Voce venceu.')
    print('Vamos jogar novamente.')