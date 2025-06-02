#sum number in list
list = []
mul = 1

count = int(input("enter number you want to append : "))
for i in range(count):
    number = int(input("enter number : "))
    list.append(number)
    mul *= number
for num in list:
    print(num)
print("Mul = ",mul)



