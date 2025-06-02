
def add(num1,num2):
    return num1 + num2
def minus(num1,num2):
    return num1 - num2
def mul(num1,num2):
    return num1 * num2
def devi(num1,num2):
    return num1 / num2

print("1.Add")
print("2.Minus")
print("3.Mul")
print("4.Devi")
opt = int(input("enter option : "))
num1 = int(input("enter value num 1 : "))
num2 = int(input("enter value num 2 : "))

if opt == 1:
    add(num1,num2)
if opt == 1:
    minus(num1,num2)
if opt == 1:
    mul(num1,num2)
if opt == 1:
    devi(num1,num2)