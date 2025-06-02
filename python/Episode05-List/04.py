list = []
pos = 0
neg = 0
count = int(input("enter number you want to append : "))
for i in range(count):
    number = int(input("enter number : "))
    list.append(number)
# Iterate through the list
for n in list:
    if n > 0:
        pos += 1
    elif n < 0:
        neg += 1

print("---------------------------")
print("Positive number : ",pos)
print("Negative number : ",neg)