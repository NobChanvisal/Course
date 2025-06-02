filename = "Mydata2.txt"

print("Enter data")
print("------------------------------")
id = input("Enter id   : ")
name = input("Enter name : ")
sex = input("Enter sex  : ")

with open(filename, 'a') as f:
    f.write(f"{id} {name} {sex}\n")

print(f"Data written to {filename}")
