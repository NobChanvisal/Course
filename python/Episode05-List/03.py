
list = []
even = 0
odd = 0

count = int(input("enter number you want to append : "))
for i in range(count):
    number = int(input("enter number : "))
    list.append(number)
for num in list:
    if num % 2 == 0:  
        even += 1
    else:  
        odd += 1

print("-------------------------")
print("Even numbers:", even)
print("Odd numbers:", odd)