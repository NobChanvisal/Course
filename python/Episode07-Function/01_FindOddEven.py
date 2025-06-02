def checkOddeven(number):
    if number % 2 == 0:
        print("The number is even.")
    else:
        print("The number is odd.")

print("Find odd even..")
print("--------------------")
number = int(input("enter number : "))
checkOddeven(number)