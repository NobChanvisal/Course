import mysql
import Dbconnect
conn = Dbconnect.conn
cursor = conn.cursor()
# Menu loop
while True:
    print("\nMenu:")
    print("-----------------------")
    print("1. Insert Record")
    print("2. View Records")
    print("3. Search Records")
    print("4. Update Records")
    print("6. Exit")
    print("-----------------------")

    opt = int(input("Enter your choice: "))

    if opt == 1:
        # Insert Record
        \
        new_name = input("Enter Name: ")
        new_price = float(input("Enter Price: "))
        new_qty = int(input("Enter Qty: "))

        try:
            cursor.execute("INSERT INTO products (name, price, qty) VALUES (%s, %s, %s)",
                           (new_name, new_price, new_qty))
            conn.commit()# Save the insert
            print("Record inserted successfully.")
        except mysql.connector.Error as err:
            print("Error:", err)

    elif opt == 2:
        # View Records
        cursor.execute("SELECT * FROM products")
        records = cursor.fetchall()

        if not records:
            print("No records to display.")
        else:
            print("\nAll Records")
            print("--------------------------")
            print(f"{'Code':<10}{'Names':<30}{'Price':<10}{'Qty':<10}")
            print("--------------------------")
            for record in records:
                print(f"{record[0]:<10}{record[1]:<30}{record[2]:<10}{record[3]:<10}")
    elif opt == 3: 
        search = int(input("enter number to search : "))
        sql ="SELECT * FROM products WHERE id = %s"
        id = (search,)
        cursor.execute(sql, id)
        records = cursor.fetchone()
        
        if not records:
            print("No records to display.")
        else:
                print(f"{record[0]:<10}")
                print(f"{record[1]:<30}")
                print(f"{record[2]:<10}")
                print(f"{record[3]:<10}")
                print()
    elif opt == 4: 
        search = int(input("enter number to update : "))
        sql ="SELECT * FROM products WHERE id = %s"
        id = (search,)
        cursor.execute(sql, id)
        records = cursor.fetchone()
        if records:
            new_name = input("Enter Name: ")
            new_price = float(input("Enter Price: "))
            new_qty = int(input("Enter Qty: "))
            sql_update = "UPDATE products SET name = %s, price = %s, qty = %s WHERE id = %s"
            val_update = (new_name, new_price, new_qty, search)
            cursor.execute(sql_update, val_update)
            conn.commit()
            print("product updated successfully!")
        else:
            print("No records id.")

    elif opt == 6:
        print("Exiting program...")
        break
    else:
        print("Invalid option. Please try again.")

# Close connection
cursor.close()
conn.close()
