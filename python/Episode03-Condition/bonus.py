
name = input("enter name : ")
gender = input("enter gender : ")
score = float(input("enter score : "))
absent = int(input("enter absent : "))

if score < 50 or absent > 10:
    result = "Fails"
else:
    result = "Pass"
print("Student data")
print("-----------------------")
print("name : ",name)
print("gender : ",gender)
print("absent : ",absent)
print("result : ",result)

