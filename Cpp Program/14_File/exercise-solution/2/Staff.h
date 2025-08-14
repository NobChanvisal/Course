#include <iostream>

using namespace std;

void lines(int n){
    for(int i = 0; i<n; i++){
        cout<<"-";
    }
    cout<<endl;
}
class Staff
{
    public:
        int id;
        string username;
        char gender;
        string phone;
        string password;

        void heading();
        void input();
        void output();
};
void Staff::heading() {
    cout<<left;
    cout<< setw(10) << "ID" 
        << setw(15) << "Username" 
        << setw(10) << "Gender" 
        << setw(15) << "Password"
        << setw(15) << "Phone" << endl;
    lines(65);
}
void Staff::input() {
    cout << "Enter ID: ";
    cin >> id;
    cout << "Enter username: ";
    cin >> username;
    cout << "Enter gender (M/F): ";
    cin >> gender;
    cout << "Enter phone number: ";
    cin >> phone;
    cout << "Enter password: ";
    cin >> password;
}

void Staff::output() {
    cout<<left;
    cout<< setw(10) << id 
        << setw(15) << username 
        << setw(10) << gender 
        << setw(15) << password
        << setw(15) << phone << endl;
}



