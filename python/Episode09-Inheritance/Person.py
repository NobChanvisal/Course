class Person:
    def __init__(self,id,name,gender):
        self.id = id
        self.name = name
        self.gender = gender
    def input(self):
        self.id = int(input("enter id : "))
        self.name = input("enter name : ")
        self.gender = input("enter gender : ")
    def display(self):
        print(f"{self.id:<5}\t{self.name:<20}\t{self.gender:<10}")
class Student(Person):
    def __init__(self, id, name, gender,classroom,html,css):
        super().__init__(id, name, gender)
        self.classroom = classroom
        self.html = html
        self.css = css
        self.score = (html + css)/2
    def input(self):
        super().input()
        self.classroom = input("Enter Student Classroom: ")
        self.html = float(input("Enter Html score : "))
        self.css = float(input("Enter css score : "))
    def find_grade(self, score):
        if score >= 90:
            return "A"
        elif score >= 80:
            return "B"
        elif score >= 70:
            return "C"
        elif score >= 60:
            return "D"
        else:
            return "F"
    def display(self):
        print(f"{self.id:<5} {self.name:<20} {self.gender:<10} {self.classroom:<15} {self.score:<10} {self.find_grade(self.score):<10}")

#class Staff --> please do it by yourselt. with (hour, money/h, def FindSalary);
            # note : tax of salary get from condition.

print("--- Person Information ---")
person1 = Person("P001", "Alice Smith", "Female")
person1.display()
print("---")

print("\n--- Student Information ---")
student1 = Student("S001", "Bob Johnson", "Male", "Room 101",100,55)
student1.display()


print("\n--- Create a New Student ---")
id = input("Enter Student ID: ")
name = input("Enter Student Name: ")
gender = input("Enter Student Gender: ")
classroom = input("Enter Student Classroom: ")
html = float(input("Enter Html score : "))
css = float(input("Enter css score : "))
student2 = Student(id,name,gender,classroom,html,css)
student2.display()


