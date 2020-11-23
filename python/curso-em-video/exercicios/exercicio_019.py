from random import randrange, randint, choice

counter = 0
names = [1, 2, 3, 4]

while counter < 4:
    names[counter] = input("Type name student: ")
    counter += 1

#indexSelected = randrange(0, 3, 1)
#indexSelected = randint(0, 3)
name = choice(names)

#print("The student is {}".format(names[indexSelected]))
print("The student is {}".format(name))
