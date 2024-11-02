#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main() {
    string id,name, sex, address, university, futureGoal;
    

    // Input
    cout<< "Enter your data"<<endl<<endl;
    cout << "Enter your id: ";
    getline(cin, id);
    cout << "Enter your name: ";
    getline(cin, name);
    cout << "Enter your sex (M/F): ";
    getline(cin, sex);
    cout << "Enter your address: ";
    getline(cin, address);
    cout << "Enter your university: ";
    getline(cin, university);
    cout << "Enter your future goal: ";
    getline(cin, futureGoal);

    // output data
    cout<< "Your Data"<<endl;
    cout<< "---------------------------"<<endl;
    cout << "Name        : " << name << endl;
    cout << "Sex         : " << sex << endl;
    cout << "Address     : " << address << endl;
    cout << "University  : " << university << endl;
    cout << "Future Goal : " << futureGoal << endl;
    return 0;
}
