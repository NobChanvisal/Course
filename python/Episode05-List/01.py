#print even numbers in a list

list = []

count = int(input("enter number you want to append : "))
for i in range(count):
    number = int(input("enter number : "))
    list.append(number)
    
print("this is even numbers : ")  
for num in list:
    if num % 2 == 0:
        print(num)
