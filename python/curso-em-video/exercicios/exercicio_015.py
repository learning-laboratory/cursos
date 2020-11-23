diasAlugel = int(input("Quanto dias alugados? "))
kmAndados = float(input("Quantos KM andados? "))

custo = 60 * diasAlugel + kmAndados *0.15;
print("O total a pagar é de {}".format(custo))