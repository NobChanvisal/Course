#include "lib\Data.h"
#include "lib\Invoice.h"
#include <fstream>
#include <cstring>
#include <string>
#include <conio.h>

Account acc,accounts[100];
Invoice setinv;
Invoice invoices[100];
int counts = 0;
int invCount = 0;
void registerAcc();
string getPassword();
void read();
void search();
void invoiceList();
void update();
void deletes();
void admin();
void deposit();
void withdraw();
void viewBalance();
void user();
void login();
string getDate();
int getLastInvoiceId() {
    ifstream file("Invoice.txt", ios::binary);
    if (!file.is_open()) {
        return 0;
    }

    Invoice temp;
    int lastId = 0;
    while (file.read((char*)&temp, sizeof(Invoice))) {
        lastId = temp.invoiceId;  
    }

    file.close();
    return lastId;  // Return the last found ID
}

int main(){
    login();
    
}
string getDate() {
    time_t now = time(nullptr);
    tm* localTime = localtime(&now);

    string period = (localTime->tm_hour >= 12) ? " PM" : " AM";
    string minute = (localTime->tm_min < 10 ? "0" : "") + to_string(localTime->tm_min);
    int hour = localTime->tm_hour % 12;
    if (hour == 0) {
        hour = 12;  
    }
    string date = to_string(localTime->tm_mday) + "-"
                + to_string(localTime->tm_mon + 1) + "-"
                + to_string(localTime->tm_year + 1900) + "|"
                + to_string(hour) + ":"
                + minute + period;

    return date;  
}   
void registerAcc(){
    cout<< "Register Acount"<<endl;
    cout<< "--------------------"<<endl<<endl;
    ofstream w("account.txt", ios::binary | ios::app);
    acc.insertAcc();
    w.write((char*)&acc, sizeof(Account));
    w.close();
    cout << "Account created successfully!" << endl;
}
void read(){
    ifstream r("account.txt", ios::binary);
    if(!r){
        cout<< "File not found !!"<<endl;
        return;
    }
    counts = 0;
    while (r.read((char*)&accounts[counts], sizeof(Account)))
    {
        counts++;
    }
    r.close();
}
void invoiceList() {
    cout<< "Invoice List"<<endl;
    cout<< "----------------"<<endl;
    ifstream r_inv("Invoice.txt", ios::binary);
    if (!r_inv) {
        cout << "Error: Could not open Invoice.txt" << endl;
        return;  
    }
    invCount = 0;
    while (r_inv.read((char*)&invoices[invCount], sizeof(Invoice))) {
        invCount++;  
    }
    setinv.header();
    for(int i = 0; i<invCount; i++){
        invoices[i].displayList();
    }
    r_inv.close();
}

void search() {
    int searchid;
    bool found = false;
    cout<< "Search Account"<<endl;
    cout<< "--------------------"<<endl<<endl;
    cout << "Enter id to search: ";
    cin >> searchid;
    read();
    for (int i = 0; i < counts; i++) {
        if (accounts[i].accId == searchid) {
            acc.header();
            accounts[i].viewAcc();
            found = true;
            break;
        }
    }
    if (!found) {
        cout << "Product not found!" << endl;
    }
}
void update() {
    int updateid;
    bool found = false;
    cout<< "Edit Account"<<endl;
    cout<< "--------------------"<<endl<<endl;
    cout << "Enter id to update: ";
    cin >> updateid;

    read();
    for (int i = 0; i < counts; i++) {
        if (accounts[i].accId == updateid) {
            cout << "Enter new data: \n";
            cout<< "Enter new name : ";
            cin>> accounts[i].name;
            cout<< "Enter new password   : ";
            cin>>accounts[i].pw;

            ofstream w("account.txt", ios::binary);
            for (int j = 0; j < counts; j++) {
                w.write((char*)&accounts[j], sizeof(Account));
            }
            w.close();
            cout << "Account updated successfully!\n";
            found = true;
            break;
        }
    }
    if (!found) {
        cout << "Account not found!" << endl;
    }
}
void deletes(){
    int deleteid;
    bool found = false;
    cout<< "Delete Account"<<endl;
    cout<< "--------------------"<<endl<<endl;
    cout << "Enter id to delete: ";
    cin >> deleteid;
    read();
    ofstream w("account.txt", ios::binary);
    for (int i = 0; i < counts; i++) {
        if (accounts[i].accId != deleteid) {
            w.write((char*)&accounts[i], sizeof(Account));
        } else {
            found = true;
        }
    }
    w.close();
    
    if (found) {
        cout << "Account deleted successfully!\n";
    } else {
        cout << "Account not found!" << endl;
    }
}
void deposit() {
    string depw;
    float demoney;
    string da = getDate();
    char dates[50];
    strcpy(dates,da.c_str());
    int find = 0;

    cout << "Deposit Money" << endl;
    cout << "--------------------" << endl << endl;
    cout << "Enter Password to deposit: ";
    depw = getPassword();  // Assuming this function is defined elsewhere

    for (int i = 0; i < counts; i++) {
        if (accounts[i].pw == depw) {
            find = 1;
            cout << "\nEnter money to deposit: ";
            cin >> demoney;
            accounts[i].balance += demoney;

            ofstream w("account.txt", ios::binary);
            for (int j = 0; j < counts; j++) {
                w.write((char*)&accounts[j], sizeof(Account));
            }
            w.close();

            Invoice setinv(getLastInvoiceId() + 1, accounts[i].name, demoney, 0,dates);

            
            ofstream w_inv("Invoice.txt", ios::binary | ios::app);
            w_inv.write((char*)&setinv, sizeof(Invoice));
            w_inv.close();

            cout << "Deposit successful!" << endl;
            setinv.printInvoice(); 
            break;
        }
    }

    if (find == 0) {
        cout << "Account not found !!!" << endl;
    }
}
void withdraw(){
    string depw;
    float demoney;
    string da = getDate();
    char dates[50];
    strcpy(dates,da.c_str());
    int find = 0;

    cout << "Withdraw Money" << endl;
    cout << "--------------------" << endl << endl;
    cout << "Enter Password to withdraw: ";
    depw = getPassword();  

    for (int i = 0; i < counts; i++) {
        if (accounts[i].pw == depw) {
            find = 1;
            cout << "\nEnter money to withdraw: ";
            cin >> demoney;
            if (accounts[i].balance >= demoney)
            {
                accounts[i].balance -= demoney;

                ofstream w("account.txt", ios::binary);
                for (int j = 0; j < counts; j++) {
                    w.write((char*)&accounts[j], sizeof(Account));
                }
                w.close();


                Invoice setinv(getLastInvoiceId() + 1, accounts[i].name, 0, demoney,dates);

                
                ofstream w_inv("Invoice.txt", ios::binary | ios::app);
                w_inv.write((char*)&setinv, sizeof(Invoice));
                w_inv.close();

                cout << "Withdraw successful!" << endl;
                setinv.printInvoice(); 
                break;
            }
            else {
                cout << "Insufficient funds!" << endl;
            }
        }
    }

    if (find == 0) {
        cout << "Account not found !!!" << endl;
    }
}
void viewBalance(){
    string pw;
    cout << "View Balance" << endl;
    cout << "--------------------" << endl << endl;
    cout << "Enter Password : ";
    pw = getPassword(); 
    int find = 0;
    for (int i = 0; i < counts; i++) {
        if(accounts[i].pw == pw) {
            find = 1;
            cout<<endl<< "Your money Balance is : $"<< accounts[i].balance<<endl;
        }
    }
    if(find == 0){
        cout<< "Passs Incorrect!!"<<endl;
    }
}
void admin(){
    int opt;
    
    do
    {   system("cls");  
        cout<< "       Admin"<<endl;   
        cout<< "------------------"<<endl;
        cout<< "(1). Register Account"<<endl;
        cout<< "(2). View Account List"<<endl;
        cout<< "(3). Find Account  "<<endl;
        cout<< "(4). Update Data"<<endl;
        cout<< "(5). Delete Data"<<endl;
        cout<< "(6). Invoice List"<<endl;
        cout<< "(7). Exit"<<endl;
        cout<< "------------------"<<endl;
        cout<< "Enter Option > ";
        cin>>opt;
        cout<<endl;
        switch (opt)
        {
        case 1:
            system("cls"); 
            registerAcc();
            cout<<endl<< "Press any key to countinue !!";
            getch();
            break;
        case 2:
            system("cls"); 
            read();
            cout<< "List Of Account"<<endl;
            cout<< "--------------------"<<endl<<endl;
            acc.header();
            for(int i = 0; i<counts; i++){
                accounts[i].viewAcc();
            }
            cout<<endl<< "Press any key to countinue !!";
            getch();
            break;
        case 3:
            system("cls"); 
            search();
            cout<< "Press any key to countinue !!";
            getch();
            break;
        case 4:
            system("cls"); 
            update();
            cout<<endl<< "Press any key to countinue !!";
            getch();
            break;
        case 5:
            system("cls"); 
            deletes();
            getch();
            cout<<endl<< "Press any key to countinue !!";
            break;
        case 6:
            system("cls"); 
            invoiceList();
            cout<<endl<< "Press any key to countinue !!";
            getch();
            break;
        default:
            break;
        }
    } while (opt != 7);
    
}
void user(){
    cout<< "User"<<endl;
    int opt;
    cout<< "Admin"<<endl;
    do
    {   
        cout<< "------------------"<<endl;
        cout<< "(1). View Balance"<<endl;
        cout<< "(2). Deposit"<<endl;
        cout<< "(3). With Draw  "<<endl;
        cout<< "(4). Exit"<<endl;
        cout<< "------------------"<<endl;
        cout<< "Enter Option > ";
        cin>>opt;
        cout<<endl;
        switch (opt)
        {
        case 1:
            viewBalance();
            break;
        case 2:
            deposit();
            break;
        case 3:
            withdraw();
            break;
        default:
            break;
        }
    } while (opt != 4 );
}
string getPassword() {
    string password;
    char temp1;

    while (true) {
        temp1 = getch();
        // If Enter key is pressed, stop reading
        if (temp1 == '\r') {
            break;
        }
        // If Backspace is pressed
        if (temp1 == '\b') {
            if (!password.empty()) {
                cout << "\b \b"; // Move cursor back, overwrite with space, and move back again
                password.pop_back(); // Remove the last character
            }
            continue;
        }
        // Accept any printable character, including symbols and spaces
        if (temp1 >= 32 && temp1 <= 126) {
            password += temp1;
            cout << "*";
        }
    }

    return password;
}
void login() {
    string username;
    string password;
    read();
    
    cout << endl;
    cout << "Login to your account" << endl;
    cout << "---------------------------------" << endl;
    cout << "Enter username: ";
    cin>>username;
    cout << "Enter Password: ";
    password = getPassword();

    int found = 0;
    for (int i = 0; i < counts; i++) {
        
        if(string(accounts[i].pw) == password && string(accounts[i].name) == username) {
            cout << endl << endl << "  --> Login successfully" << endl;
            getch();
            system("cls");
            user();
            found = 1;
            break;
        }
    }

    if (password == "admin123" && username == "Admin") {
        cout << "\nLogin Successful!" << endl;
        admin();
        found = 1;
    }

    if (found == 0) {
        cout << "\nInvalid username or password." << endl;
    }
}
