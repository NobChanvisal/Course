filename = "Mydata.txt"

print("Enter data")
print("------------------------------")
id = input("Enter id   : ")
name = input("Enter name : ")
sex = input("Enter sex  : ")

f = open(filename, 'w')
f.write(f"{id} {name} {sex} ")

print(f"Data written to {filename}")
