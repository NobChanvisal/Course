#include <fstream>
#include <iostream>
using namespace std;

int main() {
    int id;
    string name;
    char sex;
    ofstream file;  // stream class for writing data

    file.open("data.txt", ios::out);  // ios::out --> mode for writing data to file
    // file.open("data.txt", ios::app);

    cout << "Enter data " << endl;
    cout << "------------------------------" << endl;
    cout << "Enter id   : "; cin >> id;
    cout << "Enter name : "; cin >> name;
    cout << "Enter sex  : "; cin >> sex;

    // Write data 
    file << id << " " << name << " " << sex <<" " ;
    file.close();  // Close the file properly
}
