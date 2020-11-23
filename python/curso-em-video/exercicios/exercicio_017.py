from math import pow, sqrt, hypot

catetoOposto = float(input("Cateto oposto: "))
catetoAdjacente = float(input("Cateto adjacente: "))

# sumCateto = pow(catetoOposto, 2) + pow(catetoAdjacente, 2)
# hipotenusa = sqrt(sumCateto)

# hipotenusa = (catetoOposto**2 + catetoAdjacente**2)**(1/2)

hipotenusa = hypot(catetoOposto, catetoAdjacente)
print("Hipotenusa: {}".format(hipotenusa))
