
staffid     = input("Enter id   : ")
name   = input("Enter full name : ")
gender = input("Enter gender    : ")
hour   = input("Enter hourwork  : ")
money =  input("Enter money/h   : ")

salary = float(hour) * float(money)

if salary > 500:
    tax = salary * 0.05
elif salary > 300:
    tax = salary * 0.04
elif salary > 250:
    tax = salary * 0.03
else:
    tax = salary * 0.02

total = salary - tax

print("Id : ",staffid)
print("Name : ",name)
print("Gender : ",gender)
print("Salary : ",salary)
print("Tax : ",tax)
print("Total : ",total) 

