def findGrade(avg):
    if avg > 95:
        return 'A'
    elif avg >=80:
        return 'B'
    elif avg >=70:
        return 'C'
    elif avg >=60:
        return 'D'
    elif avg >= 50:
        return 'E'
    else:
        return 'F'

print("Student Information")
id = int(input("enter id : "))
name = input("enter name : ")
html = float(input('enter html score : '))
css = float(input("enter css score : "))
avg = (html + css)/2
grand = findGrade(avg)

print("Print Data of student ")
print(f"{id}\t{name}\t{avg}\t{grand}")