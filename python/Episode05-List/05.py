#sum number in list
list = []
sum = 0

count = int(input("enter number you want to append : "))
for i in range(count):
    number = int(input("enter number : "))
    list.append(number)
    sum += number
for num in list:
    print(num)
print("Sum = ",sum)
avg = sum / len(list)
print("Average = ",avg)
