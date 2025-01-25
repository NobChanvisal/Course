class Cars:
    def __init__(self, name, color, years):  
        self.name = name
        self.color = color
        self.years = years 
    def display(self):
        print(f"{self.name}\t{self.color}\t{self.years}")
        

# mycar = Cars("Tesla","Red",2025)
name = input("Enter car name: ")
color = input("Enter car color: ")
years = int(input("Enter car model year: ")) 
mycar = Cars(name, color, years)

mycar.display()