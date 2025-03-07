print("Student Information")
print("---------------------------")
id = input("Enter ID: ")
name = input("Enter Name: ")
gender = input("Enter Gender: ")
html = float(input("Enter HTML Score: "))
css = float(input("Enter CSS Score: "))
js = float(input("Enter JS Score: "))


total = (html + css + js) / 3


if total >= 90:
    grade = "A"
elif total >= 80:
    grade = "B"
elif total >= 70:
    grade = "C"
elif total >= 60:
    grade = "D"
elif total >= 50:
    grade = "E"
else:
    grade = "F"

print("\nResults")
print("---------------------------")
print(f"ID: {id}")
print(f"Name: {name}")
print(f"Gender: {gender}")
print(f"Total Score: {total:.2f}")
print(f"Grade: {grade}")
