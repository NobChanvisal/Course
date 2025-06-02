list = []
found = False
while True:
    print("------------------------------------")
    print("1.Insert\n2.View\n3.Search\n4.Update\n5.Remove\n6.Exit")
    print("------------------------------------")
    opt = int(input("enter option : "))
    if opt == 1:
        count = int(input("enter number you want to append : "))
        for i in range(count):
            number = int(input("enter number : "))
            list.append(number)
    if opt == 2:
        for item in list:
            print(item,end="\t")
        print()
    if opt == 3:
        search = int(input("enter number to search : "))
        for item in list:
            if(item == search):
                print("this search number : ",item)
                found = True
        if found == False:
            print("the number not found !!")
    if opt == 4:
        search = int(input("enter number to search : "))
        for i in range(len(list)):
            if(list[i] == search):
                found = True
                newNum = int(input("enter new number : "))
                list[i] = newNum
                print("Update successfull !!")       
        if found == False:
            print("the number not found !!")
    if opt == 5:
        remove_num = int(input("enter number to remove : "))
        list.remove(remove_num)
        print("Remove successfull !!.")
    if opt == 6:
        break
        