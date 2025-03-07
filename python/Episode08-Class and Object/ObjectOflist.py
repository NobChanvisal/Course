class Cars:
    def __init__(self, name, color, years):
        self.name = name
        self.color = color
        self.years = years

    def display(self):
        print(f"{self.name}\t{self.color}\t{self.years}")

num_cars = int(input("Enter the number of cars: "))
car_list = []
for i in range(num_cars):
    print(f"Car {i+1}:")
    name = input("\tEnter name : ")
    color = input("\tEnter color : ")
    years = int(input("\tEnter model year : "))
    car = Cars(name, color, years)
    car_list.append(car)
    
print("\nCar Information:")
for car in car_list:
    car.display()