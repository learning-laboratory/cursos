PRICE_SHORT_TRIP = 50 # trip less to 200
PRICE_LARGE_TRIP = 45 # trip greater to 200

distanceInKm = float(input('Distance em km: '))
totalPrice = 0

if distanceInKm > 200:
    totalPrice = PRICE_LARGE_TRIP * distanceInKm
else:
    totalPrice = PRICE_SHORT_TRIP * distanceInKm

print('The check of you trip is {} MZN'.format(totalPrice))