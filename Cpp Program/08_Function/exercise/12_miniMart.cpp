#include <iostream>
#include <iomanip>
#include <conio.h>

using namespace std;
int countPro = 0;
int invCount = 0;

int code[50], qty[50];
string proname[50];
float price[50],total[50];

int invoiceId[50];
string invProname[50];
int invProCode[50];
float invPrice[50],invSaleQty[50],invToPrice[50];


int saleQty;
float totalSale = 0;
int opt,opt1;
int searchs;
//product
void insert();
void output();
// void search();
// void update();
// void remove();  
void sale();
void invoice();
void login();

void manageProduct();
int main() {
    cout << "Welcome to C++ Minimart" << endl;
    cout << "---------------------------------" << endl;
    login();
    return 0;
}
void login() {
    string username;
    char password[20]; // Array to store the password
    char temp1;
    int i = 0; // To track the position in the password array

    cout << endl;
    cout << "Login to your account" << endl;
    cout << "---------------------------------" << endl;
    cout << "Enter username: ";
    cin >> username;
    cout << "Enter Password: ";

    while (true) {
        temp1 = getch();
        // If Enter key is pressed, stop reading
        if (temp1 == '\r') {
            password[i] = '\0'; // Null-terminate the string
            break;
        }
        // If Backspace is pressed
        if (temp1 == '\b') {
            if (i > 0) {
                cout << "\b \b"; // Move cursor back, overwrite with space, and move back again
                i--; // Move back in the array
            }
            continue;
        }
        // Accept any printable character, including symbols and spaces
        if (i < 19 && (temp1 >= 32 && temp1 <= 126)) {
            password[i] = temp1;
            cout << "*";
            i++;
        }
    }
    int found = 0;
    if (string(password) == "admin123" && username == "Admin") {
        cout << "\nLogin Successful!" << endl;
        manageProduct();
        found = 1;
    } else {
        cout << "\nInvalid username or password." << endl;
    }
}
void manageProduct() {
    do {
        cout<<endl;
        cout << "  Product Menu"<<endl;
        cout << "------------------------------------" << endl;
        cout << "[1]. Insert Product" << endl;
        cout << "[2]. View Product" << endl;
        cout << "[3]. Search Product" << endl;
        cout << "[4]. Update Product" << endl;
        cout << "[5]. Sale Product" << endl;
        cout << "[6]. Delete Product" << endl;
        cout << "[7]. View All Invoices" << endl;
        cout << "[8]. Exit" << endl;
        cout << "------------------------------------" << endl;
        cout << "Enter option [1-8]: ";
        cin >> opt;

        switch (opt) {
            case 1: insert(); break;
            case 2: output(); break;
            // case 3: search(); break;
            // case 4: update(); break;
            case 5: sale(); break;
            // case 6: remove(); break;  
            case 7: invoice(); break;
            case 8: cout << "Exiting Product Menu..." << endl; break;
            default: cout << "Invalid option. Please try again." << endl;
        }
    } while (opt != 8);
}
void insert() {
    cout << "Enter Product Code: ";
    cin >> code[countPro];
    cout << "Enter Product Name: ";
    cin >> proname[countPro];
    cout << "Enter Quantity: ";
    cin >> qty[countPro];
    cout << "Enter Price: ";
    cin >> price[countPro];
    countPro++;
}

void output() {
    cout<<endl;
    cout << left << setw(10) << "Code" 
         << setw(20) << "Product Name" 
         << setw(10) << "Quantity" 
         << setw(10) << "Price" 
         << endl;
    cout << "---------------------------------------------------------------" << endl;

    for (int i = 0; i < countPro; i++) {
        cout << left << setw(10) << code[i] 
             << setw(20) << proname[i] 
             << setw(10) << qty[i] 
             << setw(10) << price[i] 
             << endl;
    }
}
void search() {
    
}

void update() {
    
}

void remove() {
    
}

void sale() {
    cout <<endl<< "Enter Product Code for Sale: ";
    cin >> searchs;

    int found = 0;
    for(int i = 0; i<countPro; i++){
        if(code[i] == searchs && qty[i] > 0){
            cout << "Enter Quantity to Sell: ";
            cin >> saleQty;
            if (saleQty <= qty[i]) {
                qty[i] -= saleQty; // Reduce stock
                // Store sale in invoice arrays
                total[i] = saleQty * price[i];
                invoiceId[invCount] = invCount + 1;
                invProCode[invCount] = searchs;
                invProname[invCount] = proname[i];
                invSaleQty[invCount] = saleQty;
                invPrice[invCount] = price[i];
                invToPrice[invCount] = total[i];
                invCount++;
                cout<< "Sale successfully!"<<endl;
                return;
            } else {
                cout << "Insufficient stock available." << endl;
            }
            found = 1;
        }
    }
    
        cout<< "Product not found !!"<<endl;
    
}
void invoice() {
    cout<<endl;
    cout << "----------------------------------" << endl;
    cout << "Invoice" << endl;
    cout << "----------------------------------" << endl;
    cout << left << setw(10) << "Invoice ID"
         << setw(10) << "Code"
         << setw(20) << "Product Name"
         << setw(10) << "Qty"
         << setw(10) << "Price"
         << setw(10) << "Total"
         << endl;
    cout << "------------------------------------------------------------" << endl;

    for (int i = 0; i < invCount; i++) {
        cout << left << setw(10) << invoiceId[i]
             << setw(10) << invProCode[i]
             << setw(20) << invProname[i]
             << setw(10) << invSaleQty[i]
             << setw(10) << invPrice[i]
             << setw(10) << invToPrice[i]
             << endl;
             totalSale += invToPrice[i];
    }
    
    cout << "----------------------------------" << endl;
    cout << "Total Sales: " << totalSale << endl;
    cout << "----------------------------------" << endl;
}

