print("Student information")
print("---------------------------")
id = input("Enter id  : ")
name = input("Enter name : ")
gender = input("Enter gender : ")
html = input("Enter html score : ")
css = input("Enter css score : ")
js = input("Enter js score : ")

total = float(html) + float(css) + float(js)/3

print("---------------------------")
print("id : ",id)
print("name : ",name)
print("gender : ",gender)
print("html score : ",html)
print("css score : ",css)
print("javascrit score : ",js)
print("total score : ",total)