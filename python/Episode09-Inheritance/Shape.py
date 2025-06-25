
class Rectangle:
    def __init__(self, length=1, width=1):
        self.length = length
        self.width = width

    def _print_data(self):
        print(f"\t{self.length:<10.4g}{self.width:<10.4g}{self.area():<10.4g}{self.perimeter():<10.4g}", end="")

    def area(self):
        return self.length * self.width

    def perimeter(self):
        return 2 * (self.length + self.width)
    
class Cube(Rectangle):
    def __init__(self, length=1, width=1, height=1):
        super().__init__(length, width)
        self.height = height

    def _print_data(self):
    
        super()._print_data()
        print(f"{self.height:<10.4g}{self.volume():<10.4g}", end="")
    def area(self):
        return 2 * (super().area() + self.height * (self.width + self.length))

    def volume(self):
        return super().area() * self.height
    def heading():
        print(f"\t{'Length':<10}{'Width':<10}{'Area':<10}{'Perimeter':<10}{'Height':<10}{'Volume':<10}")
        print("\t-----------------------------------------------")
def main():
    cube = Cube(1.5, 2.5, 3.5)
    Cube.heading()
    cube._print_data()
if __name__ == "__main__":
    main()