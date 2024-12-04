#include <iostream>
#include <fstream>
#include <iomanip>
using namespace std;

int count = 0;

class Product {
    public:
        int code;
        char name[50];
        float price;
        int qty;

        void input() {
            cout << "Enter code : ";
            cin >> code;
            cout << "Enter name : "; fflush(stdin);
            cin.getline(name, 50);
            cout << "Enter price : ";
            cin >> price;
            cout << "Enter Qty   : ";
            cin >> qty;
        }

        void output() {
            cout << setw(10) << code
                 << setw(25) << name
                 << setw(10) << price
                 << setw(10) << qty << endl;
        }
};

Product pro[100];
Product product;

void write();
void read();
void header();
void display();
void search();
void update();
void deleteProduct(); // Renamed to avoid conflict with delete keyword

int main() {
    int opt;
    do {
        cout << "\nMenu:\n";
        cout << "------------------------\n";
        cout << "1. Add Product Data\n";
        cout << "2. View Product List\n";
        cout << "3. Search Product\n";
        cout << "4. Update Product\n";
        cout << "5. Delete Product\n";
        cout << "6. Exit\n";
        cout << ">>>>>>>>>>>>>>>>>>>>>>>>>\n";
        cout << "Enter your choice: ";
        cin >> opt;

        switch (opt) {
        case 1:
            write();
            break;
        case 2:
            header();
            display();
            break;
        case 3:
            search();
            break;
        case 4:
            update();
            break;
        case 5:
            deleteProduct();
            break;
        case 6:
            cout << "Exiting program...\n";
            break;
        default:
            cout << "Invalid option! Try again.\n";
            break;
        }
    } while (opt != 6);
}

void write() {
    ofstream w("product.bin", ios::binary | ios::app);
    if (!w) {
        cout << "File not found!!" << endl;
        return;
    }

    product.input();
    w.write((char*)&product, sizeof(Product));
    w.close();
}

void read() {
    ifstream r("product.bin", ios::binary);
    if (!r) {
        cout << "File not found!!" << endl;
        return;
    }
    count = 0;
    while (r.read((char*)&pro[count], sizeof(Product))) {
        count++;
    }
    r.close();
}

void header() {
    cout << left 
         << setw(10) << "Code" 
         << setw(25) << "Name"
         << setw(10) << "Price($)"
         << setw(10) << "Qty"  << endl;
    cout << "-----------------------------------------------------" << endl;
}

void display() {
    read();
    for (int i = 0; i < count; i++) {
        pro[i].output();
    }
}

void search() {
    int searchCode;
    bool found = false;
    cout << "Enter code to search: ";
    cin >> searchCode;

    read();
    for (int i = 0; i < count; i++) {
        if (pro[i].code == searchCode) {
            header();
            pro[i].output();
            found = true;
            break;
        }
    }
    if (!found) {
        cout << "Product not found!" << endl;
    }
}

void update() {
    int updateCode;
    bool found = false;
    cout << "Enter code to update: ";
    cin >> updateCode;

    read();
    for (int i = 0; i < count; i++) {
        if (pro[i].code == updateCode) {
            cout << "Enter new details: \n";
            pro[i].input();

            ofstream w("product.bin", ios::binary);
            for (int j = 0; j < count; j++) {
                w.write((char*)&pro[j], sizeof(Product));
            }
            w.close();
            cout << "Product updated successfully!\n";
            found = true;
            break;
        }
    }
    if (!found) {
        cout << "Product not found!" << endl;
    }
}

void deleteProduct() {
    int deleteCode;
    bool found = false;
    cout << "Enter code to delete: ";
    cin >> deleteCode;

    read();
    ofstream w("product.bin", ios::binary);
    for (int i = 0; i < count; i++) {
        if (pro[i].code != deleteCode) {
            w.write((char*)&pro[i], sizeof(Product));
        } else {
            found = true;
        }
    }
    w.close();
    
    if (found) {
        cout << "Product deleted successfully!\n";
    } else {
        cout << "Product not found!" << endl;
    }
}
