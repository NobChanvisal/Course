class Products:
    def __init__(self, code, name, price, qty):
        self.code = code
        self.name = name
        self.price = price
        self.qty = qty
        self.total = 0
        self.dis = 0

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
        print(f"Payment: ${(self.total - self.dis):.2f}")
        print("-----------------------")

# Product list to store all products
product_list = []

def load_products(filename="products.txt"):
    """Loads products from a file."""
    try:
        with open(filename, "r") as file:
            for line in file:
                code, name, price, qty = line.strip().split(",")
                product = Products(code, name, float(price), int(qty))
                product_list.append(product)
        print("Products loaded successfully!")
    except FileNotFoundError:
        print("Products file not found. Starting with an empty list.")
    except ValueError:
        print("Error reading products file. Data might be corrupted.")
        product_list.clear() # clear the list if there are errors

def save_products(filename="products.txt"):
    """Saves products to a file."""
    with open(filename, "w") as file:
        for product in product_list:
            file.write(f"{product.code},{product.name},{product.price},{product.qty}\n")
    print("Products saved successfully!")

load_products() # Load data when program starts.

while True:
    print("\nOptions:")
    print("1. Insert\n2. View\n3. Search\n4. Delete\n5. Update\n6. Exit")
    try:
        opt = int(input("Enter option: "))
    except ValueError:
        print("Please enter a valid number.")
        continue

    if opt == 1:  # Insert products
        try:
            count = int(input("Enter the number of products: "))
            for i in range(count):
                print(f"\nProduct {i+1}:")
                code = input("Enter product code: ")
                name = input("Enter product name: ")
                price = float(input("Enter product price: "))
                qty = int(input("Enter product quantity: "))
                product = Products(code, name, price, qty)
                product_list.append(product)
            print(f"{count} product(s) added successfully!")
            save_products() #save after adding products
        except ValueError:
            print("Invalid input. Please enter numeric values for price and quantity.")

    elif opt == 2:  # View all products
        if not product_list:
            print("No products available.")
        else:
            print("\nProduct Information:")
            for product in product_list:
                product.view()

    elif opt == 3:  # Search for a product by code
        if not product_list:
            print("No products available to search.")
        else:
            code_to_search = input("Enter the product code to search: ")
            found = False
            for product in product_list:
                if product.code == code_to_search:
                    print("\nProduct Found:")
                    product.view()
                    found = True
                    break
            if not found:
                print(f"No product found with code '{code_to_search}'.")

    elif opt == 4:  # Delete a product by code
        if not product_list:
            print("No products available to delete.")
        else:
            code_to_remove = input("Enter the product code to remove: ")
            found = False
            for product in product_list:
                if product.code == code_to_remove:
                    product_list.remove(product)
                    print(f"Product with code '{code_to_remove}' removed successfully!")
                    found = True
                    save_products() #save after deleting a product
                    break
            if not found:
                print(f"No product found with code '{code_to_remove}'.")

    elif opt == 5:  # Update a product by code
        if not product_list:
            print("No products available to update.")
        else:
            code_to_update = input("Enter the product code to update: ")
            found = False
            for product in product_list:
                if product.code == code_to_update:
                    print("\nEnter new details:")
                    new_code = input(f"New code : ")
                    new_name = input(f"New name : ")
                    new_price = input(f"New price : ")
                    new_qty = input(f"New quantity: ")

                    product.code = new_code
                    product.name = new_name
                    product.price = float(new_price)
                    product.qty = int(new_qty)

                    print("\nUpdated Product Details:")
                    product.view()
                    print("Product updated successfully!")
                    found = True
                    save_products() #save after updating a product
                    break

            if not found:
                print(f"No product found with code '{code_to_update}'.")

    elif opt == 6:  # Exit the program
        print("Exiting program. Goodbye!")
        break

    else:
        print("Invalid option. Please choose between 1 and 6.")