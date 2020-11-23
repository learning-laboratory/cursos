salary = float(input('Type your salary: '))

if salary > 1250:  # raise 10%
    salaryWithRaise = salary * 0.1 + salary
else:  # raise 15%
    salaryWithRaise = salary * 0.15 + salary

print('Current salary: {}'.format(salary))
print('Salary with raise: {}'.format(salaryWithRaise))