#include <iostream>
#include <string>
using namespace std;

int main() {
    int age;
    string gender;
    string name;
    double interestRate;

    // Input age and gender
    cout<<endl<< "Insert Data "<<endl;
    cout<< "--------------------------------"<<endl;
    cout<<  "Enter name : ";
    cin>>name;
    cout << "Enter age: ";
    cin >> age;
    cout << "Enter gender (Male/Female): ";
    cin >> gender;

    // Determine the interest rate based on age and gender
    if (age >= 18 && age <= 50) {
        if (gender == "Male" || gender == "male") {
            interestRate = 6.00;
        } else if (gender == "Female" || gender == "female") {
            interestRate = 6.5;
        } else {
            cout << "Invalid gender entered." << endl;
            return 1;
        }
    } else if (age > 50) {
        if (gender == "Male" || gender == "male") {
            interestRate = 6.75;
        } else if (gender == "Female" || gender == "female") {
            interestRate = 7.5;
        } else {
            cout << "Invalid gender entered." << endl;
            return 1;
        }
    } else {
        cout << "Invalid age entered." << endl;
        return 1;
    }

    // Output the rate of interest
    cout<<endl<< "View Data "<<endl;
    cout<< "------------------------------------"<<endl;
    cout<< "Name : "<<name<<endl;
    cout<< "Sex  : "<<gender<<endl;
    cout<< "Age  : "<<age<<endl;
    cout<< "Rate : "<<interestRate<<endl;

    return 0;
}
