
class Car:
    def __init__(self, name, serie):
        self.name = name
        self.serie = serie

    def getName(self):
        return self.name

    def setName(self, name):
        self.name = name

    def data(self):
        print(f'Name: {self.name}')
        print(f'Serie: {self.serie}')