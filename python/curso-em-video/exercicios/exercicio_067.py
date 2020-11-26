def showMultiplication(number):
    for i in range(1, 13):
        print(f"{number} x {i} = {number * i}")

while True:
    number = int(input("\nEnter a number: "))
    if number < 0:
        break
    showMultiplication(number)
