#include <iostream>
#include <iomanip>

using namespace std;

class Account {
public:
    int accId;
    char name[30];
    char pw[20];
    float balance;

public:
    void insertAcc();
    void header();
    void viewAcc();
};

void Account::insertAcc() {
    cout << "Enter account Id: ";
    cin >> accId;

    cout << "Enter account name: ";
    fflush(stdin);
    cin.getline(name, 30);

    cout << "Enter account password: ";
    fflush(stdin);
    cin.getline(pw, 20);

    cout << "Enter initial balance($): ";
    cin >> balance;
    if (accId <= 0 || balance < 0) {
        cout << "Invalid input. Account number and initial balance must be positive." << endl;
        return;
    }
    
}
void Account::header(){
    cout<<endl<< left
        << setw(15) << "Account Id" 
        << setw(30) << "Name" 
        << setw(20) << "Password" 
        << setw(15) << "Balance($)" 
        << endl;
    for(int i = 0; i< 90; i++){
        cout<< "-";
    }
    cout<<endl;
}
void Account::viewAcc() {
    cout<< left
        << setw(15) << accId
        << setw(30) << name 
        << setw(20) << pw
        << setw(15) << fixed << setprecision(2) << balance << endl;
}