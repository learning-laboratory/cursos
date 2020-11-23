from random import shuffle
counter = 0
names = [1, 2, 3, 4]

while counter < 4:
    names[counter] = input("Type name student: ")
    counter += 1

shuffle(names)
print(names)
