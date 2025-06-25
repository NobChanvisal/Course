filename = "Student.txt"
studentList = []

while True:
    print("Menu")
    print("1.Insert\n2.View")
    opt = input("enter option : ")
    if opt == "1":
        id = int(input("enter id : "))
        name = input("enter name : ")
        gender = input("enter gender : ")   
        with open(filename,"a") as file:
            file.write(f"{id},{name},{gender}\n")
        print("Student added successfull !!")
    elif opt == "2":
        #read data from file append to list:
        studentList.clear()
        with open(filename,"r") as file:
            for data in file:
                id, name, gender = data.strip().split(',')
                student = {'id':id,'name': name,'gender' : gender}
                studentList.append(student)
        # show data from list:
        for student in studentList:
            print(f"{student['id']:<10}{student['name']:<20}{student['gender']:<8}")  
