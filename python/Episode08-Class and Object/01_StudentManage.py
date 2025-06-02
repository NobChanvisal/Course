class Student:
    def __init__(self, id, name, gender, html, css, js):
        self.id = id
        self.name = name
        self.gender = gender
        self.html = html
        self.css = css
        self.js = js
    def cal_score(self):
        return self.html + self.css + self.js
    def view(self): 
        print(f"{self.id:<5}\t{self.name:<20}\t{self.gender:<10}\t{self.html:<7}\t{self.css:<7}\t{self.js:<7}\t{self.cal_score():<15}")


studentsList = []

def insert():
    id = int(input("enter id : "))
    name = input("enter name : ")
    gender = input("enter gender : ")
    html = float(input("enter HTML score: "))
    css = float(input("enter CSS score: "))
    js = float(input("enter JavaScript score: "))
    stu = Student(id,name,gender,html,css,js)
    studentsList.append(stu)
def header():
    print("------------------------")
    print(f"{'ID':<5}\t{'Name':<20}\t{'Gender':<10}\t{'HTML':<7}\t{'CSS':<7}\t{'JS':<7}\t{'Total Score':<15}")
    print("-----------------------------------------------------------------------------------------")
def viewList():
    print("\nStudent record ")
    header()
    for stu in studentsList:
        stu.view()
    print("-----------------------------------------------------------------------------------------")
    
def search():
    searchid = int(input("enter student id to search : "))
    found = False
    for stu in studentsList:
        if stu.id == searchid:
            found = True
            header()
            stu.view()
    if not found:
        print(f"student id not found !!")
def update():
    searchid = int(input("enter student id to search : "))
    found = False
    for stu in studentsList:
        if stu.id == searchid:
            found = True
            newid = int(input("enter id : "))
            newname = input("enter name : ")
            newgender = input("enter gender : ")
            newhtml = float(input("enter HTML score: "))
            newcss = float(input("enter CSS score: "))
            newjs = float(input("enter JavaScript score: "))

            stu.id = newid
            stu.name = newname
            stu.gender = newgender
            stu.html = newhtml
            stu.css = newcss
            stu.js = newjs
            print(f"Student id {stu.id} update successfull !!")
    if not found:
        print(f"student id not found !!")
    
def deletes():
    searchid = int(input("enter student id to search : "))
    found = False
    for stu in studentsList:
        if stu.id == searchid:
            found = True
            studentsList.remove(stu)
            print(f"Student id {stu.id} update successfull !!")
    if not found:
        print(f"student id not found !!")
        
while True:
        print("\n--- Student Management System ---")
        print("1. Add Student")
        print("2. View All Students")
        print("3. Search Student")
        print("4. Update Student")
        print("5. Delete Student")
        print("6. Exit")

        choice = input("Enter your choice: ")

        if choice == '1':
            insert()
        elif choice == '2':
            viewList()
        elif choice == '3':
            search()
        elif choice == '4':
            update()
        elif choice == '5':
            deletes()
        elif choice == '6':
            break
        else:
            print("Invalid choice. Please try again.")