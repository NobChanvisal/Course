numberList = [10, 23, 44, 12, 53, 60]
newList = []  

print("Old list")
print(numberList)
for number in numberList:
    if number % 2 == 0:
        newList.append(number)  


print("\nThis new list as Even number ")
print(newList) 