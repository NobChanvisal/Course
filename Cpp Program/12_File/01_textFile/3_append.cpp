#include <fstream>
#include <iostream>
using namespace std;

int main() {
    int n;
    int ids[10];
    string names[10];
    char sexes[10];
    ofstream write;  // Stream class for writing data
    ifstream read;   // Stream class for reading data

    // Writing data to the file
    write.open("student.txt", ios::app);  
    if (!write) {
        cout << "Error opening file for writing!" << endl;
        return 1;
    }

    cout << "Enter number of students: ";
    cin >> n;

    for (int i = 0; i < n; i++) {
        cout << "Enter ID   : "; cin >> ids[i];
        cout << "Enter Name : "; cin >> names[i];
        cout << "Enter Sex  : "; cin >> sexes[i];
        write << ids[i] << " " << names[i] << " " << sexes[i] << endl;  
    }

    write.close();  

    // Reading data from the file
    read.open("student.txt", ios::in); 
    if (!read) {
        cout << "Error opening file for reading!" << endl;
        return 1;
    }

    int count = 0;  // Variable to track the number of records read
    while (read >> ids[count] >> names[count] >> sexes[count]) {
        count++;
    }
    
    read.close();

    // Displaying the data read from the file
    cout << "\nData read from file:" << endl;
    for (int i = 0; i < count; i++) {
        cout << "ID   : " << ids[i] << endl;
        cout << "Name : " << names[i] << endl;
        cout << "Sex  : " << sexes[i] << endl;
        cout << "------------------------------" << endl;
    }

    return 0;
}
