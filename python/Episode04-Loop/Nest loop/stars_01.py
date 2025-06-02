count = 5
for i in range(count):
    for k in range(i,count - 1): 
        print(" ",end="")
    for j in range(i+1): 
        print("*", end="")
    print()
