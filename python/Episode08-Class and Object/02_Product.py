class Products:
    def __init__(self, code, name, price, qty):
        self.code = code
        self.name = name
        self.price = price
        self.qty = qty
        self.total = 0
        self.dis = 0
        self.payment = 0

    def find_discount(self):
        self.total = self.qty * self.price
        if self.total >= 500:
            self.dis = 50
        elif self.total > 400:
            self.dis = 40
        elif self.total > 300:
            self.dis = 30
        elif self.total > 200:
            self.dis = 20
        else:
            self.dis = 0
        return self.dis

    def view(self):
        print(f"Code: {self.code}")
        print(f"Name: {self.name}")
        print(f"Price: ${self.price:.2f}")  
        print(f"Quantity: {self.qty}") 
        print(f"Discount: ${self.find_discount():.2f}")
        print(f"Total Amount: ${self.total:.2f}")
        print(f"Payment : ${(self.total - self.total * self.find_discount()/100):.2f}")
        print("-----------------------")
# product = Products(111,"Coca", 3, 100)
# product.view()

count = int(input("Enter the number of products: "))
product_list = []
for i in range(count):
    print(f"Product{i+1}:")
    code = input("Enter product code: ")
    name = input("Enter product name: ")
    price = float(input("Enter product price: "))
    qty = int(input("Enter product quantity: "))
    product = Products(code, name, price, qty)
    product_list.append(product)
print("\nProduct Information:")
for product in product_list:
    product.view()


    