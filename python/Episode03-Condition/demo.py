# condition - if else

print("Insert Data ")
print("----------------------")
name =   input("Enter full name : ")
gender = input("Enter gender    : ")
score =  input("Enter score     : ")

if float(score) > 50:
    result = "Pass"
else:
    result = "False"
    
print("View Data")
print("-------------------")
print("Student name   : ",name)
print("student gender : ",gender)
print("student score  : ",score)
print("student result : ",result)
