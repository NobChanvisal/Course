#include <fstream>
#include <iostream>
using namespace std;

int main() {
    int id;
    string name;
    char sex;
    ifstream file;  // stream class for reading data

    file.open("data.txt", ios::in);  // Open the file for reading

    if (!file) {
        cout << "Error opening file!" << endl;
        return 1;
    }

    // Reading the data from the file
    while (1) {
        file>>id>>name>>sex;
        if(file.eof()) break;

        // Display the data
        cout << "ID   : " << id << endl;
        cout << "Name : " << name << endl;
        cout << "Sex  : " << sex << endl;
        cout << "------------------------------" << endl;
    }

    file.close();  // Close the file
    return 0;
}
