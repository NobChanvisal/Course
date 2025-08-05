#include <iostream>
#include <iomanip>
#include <conio.h>
#include <string>
using namespace std;
class Banking
{
public:
    int account, balance;
    string name, password;
    public:
    void input(){
        cout<<"input account: "; cin>>account;
        cout<<"input name: "; cin>>name;
        cout<<"input password: "; cin>>password;
        cout<<"input balance: "; cin>>balance;
    }
    void header(){
        cout<<left;
        cout<<setw(10)<<"Account"<<setw(15)<<"Name"<<setw(15)<<"Password"<<setw(10)<<"Balance"<<endl;
    }
    void view(){
        cout<<left;
        cout<<setw(10)<<account<<setw(15)<<name<<setw(15)<<password<<setw(10)<<balance<<endl;
    }

};
class Invoice
{
    public:
        int invoiceId;
        int accountNo;
        float amount;
        string date;
        string type;
        void setInvoice(int invoiceId, int accountNo, float amount, string date, string type){
            this->invoiceId = invoiceId;
            this->accountNo = accountNo;
            this->amount = amount;
            this->date = date;
            this->type = type;
        }
        void header(){
            cout<<setw(10)<<"Invoice ID"<<setw(15)<<"Account No"<<setw(10)<<"Amount"<<setw(10)<<"Type"<<setw(20)<<"Date"<<endl;
        }
        void view(){
            cout<<left;
            cout<<setw(10)<<invoiceId<<setw(15)<<accountNo<<setw(10)<<amount<<setw(10)<<type<<setw(20)<<date<<endl;
        }   
};

//user
int counts = 0;
int countsInvoice = 0;
void viewBalance();
void deposit();
void withdraw();

//admin
void registerAcount();
void viewAccount();
void deleteAccount();
void updateAccount();
void viewInvoice();


 Banking bank[100];
 Invoice invoice[100];


void line(int length, string character = "-") {
    for (int i = 0; i < length; i++)
    {
        cout << character;
    }
    cout << endl;
    
}
void login();
string getCurrentDate();
void adminMenu();
void userMenu();
string getPassword();

int main(){
    login();
    return 0;
}

string getCurrentDate() {
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
string getPassword() {
    string password;
    char ch;
    
    while ((ch = getch()) != '\r') {
        if (ch == '\b') {
            if (!password.empty()) {
                cout << "\b \b"; // Erase the last character
                password.pop_back();
            }
        } else {
            password += ch;
            cout << '*'; // Display asterisks for each character
        }
    }
    cout << endl; // Move to the next line after entering the password
    return password;
}

void login() {
    int found = 0;
    cout << "\n\nWelcome to the Banking System" << endl;
    cout << "---------------------------------" << endl;
    cout<<"enter password: ";
    string password = getPassword();
    
    for (int i = 0; i < counts; i++)
    {
        if (bank[i].password == password) {
            cout << "Login successful!" << endl;
            userMenu();
            found = 1;
        }
    }
    if (password == "admin123")
    {
        cout << "Admin Login successful!" << endl;
        adminMenu();
        found = 1;
    }
    
    if (found == 0) {
        cout << "Login failed! Incorrect password." << endl;
    }
}
void adminMenu() {
    int choice;
    do {
        cout << "\nAdmin Menu" << endl;
        line(20);
        cout << "1. Register Account" << endl;
        cout << "2. View Accounts" << endl;
        cout << "3. Update Account" << endl;
        cout << "4. Delete Account" << endl;
        cout << "5. List Invoice" << endl;
        cout << "6. Logout" << endl;
        line(20, "=");
        cout << "Enter your choice: ";
        cin >> choice;

        switch (choice) {
            case 1:
                registerAcount();
                break;
            case 2:
                viewAccount();
                break;
            case 3:
                updateAccount();
                break;
            case 4:
                deleteAccount();
                break;
            case 5:
                viewInvoice();
                break;
            case 6:
               login(); // Return to login
                break;
            default:
                cout << "Invalid choice, please try again." << endl;
        }
    } while (choice != 5);
}

void registerAcount() {
    bank[counts].input();
    counts++;
    cout<<"Account registered successfully!"<<endl;
}
void viewAccount() {
    cout << "\nList of Accounts:" << endl;
    cout << "------------------" << endl;
    if (counts == 0) {
        cout << "\nNo accounts available." << endl;
        return;
    }
    else {
        bank[0].header();
        line(50, "=");
        for (int i = 0; i < counts; i++) {
            bank[i].view();
        }
    }
}
void deleteAccount() {
    int accountNo;
    int found = 0;
    cout << "\nEnter account number to delete: ";
    cin >> accountNo;

    for (int i = 0; i < counts; i++) {
        if (bank[i].account == accountNo) {
            found = 1;
            for (int j = i; j < counts - 1; j++) {
                bank[j] = bank[j + 1]; // Shift accounts left
            }
            counts--;
            cout << "Account deleted successfully!" << endl;
            return;
        }
    }
    if (!found) {
        cout << "Account not found!" << endl;
    }
    
}
void updateAccount() {
    int accountNo;
    int found = 0;
    cout << "\nEnter account number to update: ";
    cin >> accountNo;

    for (int i = 0; i < counts; i++) {
        if (bank[i].account == accountNo) {
            found = 1;
            cout << "Enter new name: ";
            cin >> bank[i].name;
            cout << "Enter new password: ";
            cin >> bank[i].password;
            cout << "Account updated successfully!" << endl;
            return;
        }
    }
    if (!found) {
        cout << "Account not found!" << endl;
    }
}
void viewInvoice() {
    cout << "\nList of Invoices:" << endl;
    cout << "------------------" << endl;
    if (countsInvoice == 0) {
        cout << "\nNo invoices available." << endl;
        return;
    }else {
        invoice[0].header();
        line(50, "=");
        for (int i = 0; i < countsInvoice; i++) {
            invoice[i].view();
        }
    }
}

void userMenu(){
    int choice;
    char answer;
    do {
        cout << "\nUser Menu" << endl;
        line(20);
        cout << "1. View Balance" << endl;
        cout << "2. Deposit" << endl;
        cout << "3. Withdraw" << endl;
        cout << "4. Exit" << endl;
        line(20, "=");
        cout << "Enter your choice: ";
        cin >> choice;

        switch (choice) {
            case 1:
                viewBalance();
                break;
            case 2:
                deposit();
                break;
            case 3:
                withdraw();
                break;
            case 4:
                cout << "Do you want go to login ? (y/n): ";
                cin >> answer;
                if (answer == 'y' || answer == 'Y') {
                    login(); // Return to login
                } else {
                    cout << "Exiting..." << endl;
                }
                
                break;
            default:
                cout << "Invalid choice, please try again." << endl;
        }
    } while (choice != 4);
}
void viewBalance() {
    int found = 0;
    int accountNo;
    cout << "\nView Balance:" << endl;
    cout << "------------------" << endl;
    cout << "Enter account number to view balance: ";
    cin >> accountNo;

    for (int i = 0; i < counts; i++) {
        if (bank[i].account == accountNo) {
            
            cout << "Your current Balance : " << bank[i].balance << endl;
            found = 1;
        }
    }
    }

void withdraw() {
    int accountNo;
    int found = 0;
    float amount;
    cout << "\nWithdraw:" << endl;
    cout << "------------------" << endl;
    cout << "Enter account number to withdraw from: ";
    cin >> accountNo;

    for (int i = 0; i < counts; i++) {
        if (bank[i].account == accountNo) {
            found = 1;
            cout << "Enter amount to withdraw: ";
            cin >> amount;
            if (amount > bank[i].balance) {
                cout << "Insufficient balance!" << endl;
            } else {
                bank[i].balance -= amount;
                invoice[countsInvoice].setInvoice(countsInvoice + 1, bank[i].account, amount, getCurrentDate(), "Withdraw");
                countsInvoice++;
                cout << "Withdrawal successful! New balance: " << bank[i].balance << endl;
            }
        }
    }
    if (found == 0)
    {
        cout << "Account not found!" << endl;

    }
    
}

void deposit(){
    int accountNo;
    int found = 0;
    float amount;
    cout << "\nDeposit:" << endl;
    cout << "------------------" << endl;
    cout << "Enter account number to withdraw from: ";
    cin >> accountNo;

    for (int i = 0; i < counts; i++) {
        if (bank[i].account == accountNo) {
            found = 1;
            cout << "Enter amount to withdraw: ";
            cin >> amount;
            
                bank[i].balance += amount;
               
                invoice[countsInvoice].setInvoice(countsInvoice + 1, bank[i].account, amount, getCurrentDate(), "Deposit");
                countsInvoice++;
                cout << "Deposit successful! New balance: " << bank[i].balance << endl;
        }
    }
    if (found == 0)
    {
        cout << "Account not found!" << endl;

    }
}