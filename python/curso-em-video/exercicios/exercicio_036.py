placeValue = float(input('Enter the place value: '))
clientSalary = float(input('Enter the client salary: '))
yearToPay = float(input('Enter number of year of payment: '))

valuePayToMonth = placeValue / yearToPay * 12
minimValue = clientSalary * 30 / 100

if valuePayToMonth > minimValue :
   print('Cannot take money.')
   print('Your recev {} and your value that you will pay per month is {} '.format(clientSalary, valuePayToMonth))
else:
    print('Your will pay {} in {} years per month'.format(valuePayToMonth, yearToPay))