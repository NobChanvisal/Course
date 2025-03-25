class StudentManager:
    # filename = "./students.txt"

    def add_student():
        with open("./students.txt", "a") as f:
            student_id = input("Enter Student ID: ")
            name = input("Enter Student Name: ")
            course = input("Enter Course: ")
            f.write(f"{student_id} {name} {course}\n")
        print("Student added successfully!\n")


    def view_students():
        print("\nStudent List:")
        print("--------------------------------")
        try:
            with open("./students.txt", "r") as f:
                data = f.read()
                print(data if data else "No students found.\n")
        except FileNotFoundError:
            print("No students found.\n")

   
    def search_student():
        search_id = input("Enter Student ID to search: ")
        found = False
        try:
            with open("./students.txt", "r") as f:
                for line in f:
                    if line.startswith(search_id + " "):  # Ensuring exact match
                        print("Student Found:")
                        print("--------------------------------")
                        print(line.strip())
                        found = True
                        break
            if not found:
                print("Student not found.\n")
        except FileNotFoundError:
            print("No students found.\n")

    def delete_student():
        search_id = input("Enter Student ID to delete: ")
        found = False
        try:
            with open("./students.txt", "r") as f:
                lines = f.readlines()
            with open("./students.txt", "w") as f:
                for line in lines:
                    if not line.startswith(search_id + " "):  # Ensuring exact match
                        f.write(line)
                    else:
                        found = True
            print("Student deleted successfully!\n" if found else "Student not found.\n")
        except FileNotFoundError:
            print("No students found.\n")

# Main menu
while True:
    print("\n📚 Student Management System")
    print("--------------------------------")
    print("1. Add Student")
    print("2. View Students")
    print("3. Search Student")
    print("4. Delete Student")
    print("5. Exit")
    
    choice = input("Enter your choice: ")
    
    if choice == "1":
        StudentManager.add_student()
    elif choice == "2":
        StudentManager.view_students()
    elif choice == "3":
        StudentManager.search_student()
    elif choice == "4":
        StudentManager.delete_student()
    elif choice == "5":
        print("Exiting program. Goodbye!")
        break
    else:
        print("Invalid choice! Please enter a number from 1 to 5.\n")
