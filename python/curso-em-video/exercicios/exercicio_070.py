answer = 'S'
totalPrice =  counterProductsGreaterThanThousand = minPrice =  countrollerNumber = 0

while answer.upper() != 'N':
    nameOfProduct = input("Nome: ")
    priceOfProduct = float(input("Preco: "))

    totalPrice += priceOfProduct

    if priceOfProduct > 1000:
        counterProductsGreaterThanThousand += 1
    
    if countrollerNumber == 0:
        minPrice = priceOfProduct
        countrollerNumber += 1
    
    if priceOfProduct < minPrice:
        minPrice = priceOfProduct


    answer = input('\nQuer continuar? [S/N]')

print(f"\nA -> Total a pagar                         : {totalPrice} MZN")
print(f"B -> N. produtos que custam mais de 1000 MZN : {counterProductsGreaterThanThousand}")
print(f"C -> Preco do produto mais barrato: {minPrice}")