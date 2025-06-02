my_list = [
    {'id':1,'name': 'T-shirt', 'price': 30, 'qty': 100},
    {'id':2,'name': 'Jeans', 'price': 25, 'qty': 200},
    {'id':3,'name': 'Shoes', 'price': 35, 'qty': 300}
]

while True:
    print("\nMenu:")
    print("-----------------------")
    print("1. Insert Record")
    print("2. View Records")
    print("3. Search Record")
    print("4. Update Record")
    print("5. Delete Record")
    print("6. Sale products")
    print("7. Exit")
    print("-----------------------")

    opt = int(input("Enter your choice: "))

    if opt == 1:
        # Insert Record
        new_id = int(input("enter id : "))
        new_name = input("Enter name: ")
        new_price = int(input("Enter price: "))
        new_qty = int(input("Enter qty: "))
        new_record = {'id':new_id,'name': new_name, 'price': new_price, 'qty': new_qty}
        my_list.append(new_record)
        print("Record inserted successfully.")
    elif opt == 2:
        # View Records
        if not my_list:
            print("No records to display.")
        else:
            print("\n--- All Records ---")
            print(f"{'id':<10}{'name':<25}{'price':<10}{'qty':<10}")
            for record in my_list:
                print(f"{record['id']:<10}{record['name']:<25}{record['price']:<10}{record['qty']:<10}")
    elif opt == 3:
        # Search Record
        search = int(input("Enter id to search: "))
        found = False
        for record in my_list:
            if record['id'] == search:
                print("\n--- Search Result ---")
                print(f"{record['id']:<10}")
                print(f"{record['name']:<25}")
                print(f"{record['price']:<10}")
                print(f"{record['qty']:<10}")
                print()
                found = True
                break
        if not found:
            print("Record not found.")
    elif opt == 4:
        # Update Record
        update = int(input("Enter id to update: "))
        found = False
        for record in my_list:
            if record['id'] == update:
                new_id = int(input("Enter new id : "))
                new_name = input("Enter new name : ")
                new_price = int(input("Enter new price: "))
                new_qty = int(input("Enter new qty: "))
                record['id'] = new_id
                record['name'] = new_name
                record['price'] = new_price
                record['qty'] = new_qty
                print("Record updated successfully.")
                found = True
                break
        if not found:
            print("Record not found.")
    elif opt == 5:
        # Delete Record
        delete = int(input("Enter id to delete: "))
        found = False
        for record in my_list:
            if record['id'] == delete:
                my_list.remove(record)  
                print("Record deleted successfully.")
                found = True
                break
        if not found:
            print("Record not found.")
    elif opt == 6:
        update = int(input("Enter id to update: "))
        found = False
        for record in my_list:
            if record['id'] == update:
                sale = int(input("enter qty to sale : "))
                if record["qty"] >= sale:
                    record["qty"] -= sale
                    print("product sale successfully.")
                else:
                    print("product no stock !!")
                found = True
                break
        if not found:
            print("Record not found.")
    elif opt == 7:
        # Exit
        print("Exiting program.")
        break
    else:
        print("Invalid option. Please try again.")
