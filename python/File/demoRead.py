filename = "Mydata2.txt"
print(f"This data from file{filename}")
with open(filename, 'r') as f:
    data = f.read()
    print(data)