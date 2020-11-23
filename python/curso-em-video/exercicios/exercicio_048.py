
sum = 0
for i in range(1, 501):
    if i % 2 == 1 and i % 3 == 0:
        print(i)
        sum += i

print('Soma: {}'.format(sum))