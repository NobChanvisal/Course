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

product_list = []
while True:
    print("1.insert\t2.view\t3.delete")
    opt = int(input("enter option : "))
    if opt == 1:
        count = int(input("Enter the number of products: "))
        for i in range(count):
            print(f"Product{i+1}:")
            code = input("Enter product code: ")
            name = input("Enter product name: ")
            price = float(input("Enter product price: "))
            qty = int(input("Enter product quantity: "))
            product = Products(code, name, price, qty)
            product_list.append(product)
    if opt == 2:
        print("\nProduct Information:")
        for product in product_list:
            product.view()
    if opt == 3:
        code_to_remove = input("Enter the product code to remove: ")
        for product in product_list:
            if product.code == code_to_remove:
                product_list.remove(product)
                break  # Stop after removing the first match
    if opt == 4:
        break