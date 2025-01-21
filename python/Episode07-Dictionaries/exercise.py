mydict = [
    {
        "brand": "Ford",
        "model": "Mustang",
        "year": 1964
    },
    {
        "brand": "Tesla",
        "model": "Mustang",
        "year": 1964
    },
    {
        "brand": "Ford",
        "model": "Mustang",
        "year": 1966
    },
]

print(mydict)
print("\nprint cars with brand == Ford")

for car in mydict:
    if car["brand"] == "Ford":
        print("this value you want : ", car)

# Simple menu for adding, viewing, searching, and deleting
while True:
    print("\nMenu:")
    print("1. Add Car")
    print("2. View All Cars")
    print("3. Search Cars by Brand")
    print("4. Delete Car")
    print("5. Exit")
    choice = input("Enter your choice (1-5): ")

    if choice == '1':
        brand = input("Enter brand: ")
        model = input("Enter model: ")
        year = int(input("Enter year: "))
        new_car = {"brand": brand, "model": model, "year": year}
        mydict.append(new_car)
        print("Car added successfully!")

    elif choice == '2':
        print("\nAll Cars:")
        for car in mydict:
            print(car)

    elif choice == '3':
        search_brand = input("Enter brand to search: ")
        print(f"\nCars with brand '{search_brand}':")
        for car in mydict:
            if car["brand"] == search_brand:
                print(car)

    elif choice == '4':
        try:
            brand_to_delete = input("Enter brand to delete: ")  
            for i, car in enumerate(mydict):
                if car["brand"] == brand_to_delete:
                    deleted_car = mydict.pop(i)
                    print(f"Car {deleted_car} deleted successfully!")
                    break  
            else:
                print(f"No car with brand '{brand_to_delete}' found.") 
        except ValueError:
            print("Invalid input. Please enter a valid brand name.")

    elif choice == '5':
        print("Exiting...")
        break

    else:
        print("Invalid choice. Please enter a number between 1 and 5.")