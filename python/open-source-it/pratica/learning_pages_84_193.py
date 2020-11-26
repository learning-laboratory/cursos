import datetime as dt
#import dateutil
#Python all in one Dummies

# print(dt.date.today())
# print(f'{dt.date.today():%A, %B, %C, %D}')
# print(f'{dt.date.today():%date/%m/%Y}')
# print(dt.time())

# new_years_day = dt.date(2021, 1, 1)
# duration = dt.timedelta(days=140)
# print(new_years_day + duration)

# start_time = dt.datetime(2020, 3, 31, 8, 0, 0)
# finish_time = dt.datetime(2020, 3, 31, 14, 0, 0)
# time_between =  finish_time - start_time
# print(time_between)
# print(type(time_between))

# #get the time from computer clock
# here_now = dt.datetime.now()
#
# #get the utc datetime right now
# utc_now = dt.datetime.utcnow()
#
# #subtract to see difference
# time_difference = (here_now - utc_now)
#
# #show results
# print(f"My time   : {here_now:%I:%M %p}")
# print(f"UTC time  : {utc_now:%I:%M %p}")
# print(f"Difference: {time_difference}")

# time = dt.datetime.time(dateutil.gettz("Africa/Maputo"))
# print(f"{time:%A %D %I:%M %p %Z}")
#
# total = 100
# sales_tax_rate = 0.065
# taxable = True
# if taxable:
#     print(f"Subtotal : ${total:.2f}")
#     sales_tax = total * sales_tax_rate
#     print(f"Sales Tax: ${sales_tax:.2f}")
#     total = total + sales_tax
# print(f"Total    : ${total:.2f}")
#
# light_color = "yellow"
# if light_color == "green":
#     print("Go")
# elif light_color == "red":
#     print("Stop")
# else:
#     print("Proceed with caution")
# print("This code executes no matter wat")

# age = 14
# beverage = "beer" if age > 20 else "milk"
# print("Have a " + beverage)
#
# items = ["A", "B", "C", "D"]
# otherItems = ["E", "F", "G", "H"]

# for otherLetter in otherItems:
#     items.append(otherLetter)
#
# print(items)

# counter = 0
# while counter < len(otherItems):
#     items.append(otherItems[counter])
#     counter += 1
#
#print(items)

# LITS

# items = ["A", "B", "C", "D", "Z"]
# otherItems = ["E", "F", "G", "H"]
#
# items.append("Z") # add item
# items.insert(2, "K") # add in specific position
# items[0] = "AA" # change value of item in position 0
# items.remove("B") # remove item
# items.pop(0) #remve the first item
# items.pop() #remove the last item
# del items[2]  #delete item based in index item
# #items.clear() #clear list
# items.append("Z")
# print(items.count("Z")) # count how many times an item appears in a list
# print(items.index("C")) # return index of item
# items.extend(otherItems) #join lists
# items.sort()
# print(items)
# items.reverse()
# print(items)
# copy_items = items.copy()
# print(copy_items)

# TUPLES
# prices = (2.4, 12.4, 12, 13.78, 19.04, 12, 3, 12.90)
# print(len(prices))
# print(prices.count(12))
# print(19.04 in prices) # check if value 19.04 is on the tuples
# print(prices.index(12))
# print(prices[2])

# SETS
# sample_sets = {1.34, 12.3, 12.09, 3.67}
# sample_sets.add(11)
# sample_sets.add(-9)
# sample_sets.update([11, 22, 33, 44])
# new_set = sample_sets.copy()
# print(new_set)
# print(sample_sets)

#DICTIONARIES
# names={
#     'mario':'Mario MABANDE',
#     'justino':'Justino Jeremias',
#     'afonso':'Afonso Jeremias'
# }
# # print(names)
# # print(names.keys())
# # print(names.get("afonso"))
#
# # for key in names:
# #     print(names[key])
# #     print(key)
# del names['afonso']
# print(names)

employee = {
    'name':'Mario',
    'hire_date':'12-12-2020',
    'department':'IT'
}
print(employee)