print("\t\t\tMultiplication Table\n")

for i in range(1,13):
    print(i, end=" "*3)
print("\n________________________________________________\n")

for j in range(1, 13):
    for k in range(1, 13):
        print(j*k, end=" "*3)
    print('\n')
