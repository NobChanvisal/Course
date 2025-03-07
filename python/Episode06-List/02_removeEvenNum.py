
numberList = [10,23,44,12,53,60]

for number in numberList:
    if number % 2 == 0:
        numberList.remove(number)

print(numberList)