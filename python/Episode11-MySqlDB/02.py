#student data
import mysql
import mysql.connector
import Dbconnect

conn = Dbconnect.conn
cursor = conn.cursor()
def insert():
    name = input("enter name : ")
    gender = input("enter gender : ")
    gpa = float(input("enter gpa : "))
    try:
        sql = "INSERT INTO tbstudents(fullname, gender, gpa) VALUES (%s, %s, %s)"
        cursor.execute(sql,name,gender,gpa)
        conn.commit()
    except mysql.connector.Error as errMessage:
        print("Error : ",errMessage)
def Views():
    sql = "SELECT * FROM tbstudents"
    cursor.execute(sql)
    students = cursor.fetchall()
    if not students: 
        print("No students records please register !!")
    else:
        print("\nStudents lists")
        print("--------------------------")
        print(f"{'Id':<10}{'Names':<30}{'Gender':<10}{'GPA':<10}")
        print("--------------------------")
        for stu in students:
            print(f"{stu[0]:<10}{stu[1]:<30}{stu[2]:<10}{stu[3]:<10}")
while True:
    print("\nMenu:")
    print("-----------------------")
    print("1. Insert Record")
    print("2. View Records")
    print("3. Search Records")
    print("4. Update Records")
    print("6. Exit")
    print("-----------------------")

    opt = int(input("Enter your choice: "))
    if opt == 1:
        insert()
    elif opt == 2:
        Views()
        