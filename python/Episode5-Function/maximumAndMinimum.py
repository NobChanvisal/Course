def max(a,b):
    if a > b:
        max = a;
    else:
        max = b;
    print("Maximum : ",max)
def min(a,b):
    if a > b:
        min = b;
    else:
        min = a;
    print("Minimum : ",min)
    
print("1.Find maximum")
print("2.Find minimum")
opt = int(input("enter option : "))
a = int(input("enter value num 1 : "))
b = int(input("enter value num 2 : "))
if opt == 1:
    max(a,b)
if opt == 2:
    min(a,b)