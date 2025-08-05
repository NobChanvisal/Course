#include <fstream>
#include <iostream>
#include <iomanip>
using namespace std;

int ids[100];
string names[100];
char sexes[100];
int stuCount = 0;

void writeData();
void readData();
void heading();
void displayData();
void searchData();
void updateData();
void deleteData();

int main() {
    int choice;

    do {
        cout << "\nMenu:\n";
        cout << "1. Insert Data\n";
        cout << "2. Display Data\n";
        cout << "3. Search Data\n";
        cout << "4. Update Data\n";
        cout << "5. Delete Data\n";
        cout << "6. Exit\n";
        cout << "Enter your choice: ";
        cin >> choice;

        switch (choice) {
            case 1:
                cout << "\n-------------------\nInsert Data\n-------------------\n";
                writeData();
                break;
            case 2:
                cout << "\n-------------------\nView Data\n-------------------\n";
                readData();
                displayData();
                break;
            case 3:
                cout << "\n-------------------\nSearch Data\n-------------------\n";
                readData();
                searchData();
                break;
            case 4:
                cout << "\n-------------------\nUpdate Data\n-------------------\n";
                readData();
                updateData();
                break;
            case 5:
                cout << "\n-------------------\nDelete Data\n-------------------\n";
                readData();
                deleteData();
                break;
            case 6:
                cout << "Exiting program..." << endl;
                break;
            default:
                cout << "Invalid choice! Try again." << endl;
        }
    } while (choice != 6);

    return 0;
}

void heading() {
    cout << left;
    cout << setw(8) << "ID" << setw(15) << "Name" << setw(8) << "Sex" << endl;
    cout << "------------------------------------------" << endl;
}

void writeData() {
    ofstream write("data.txt", ios::app);  // Append mode
    if (!write) {
        cout << "Error opening file for writing!" << endl;
        return;
    }

    cout << "Enter ID   : "; cin >> ids[stuCount];
    cout << "Enter Name : "; cin >> names[stuCount];
    cout << "Enter Sex  : "; cin >> sexes[stuCount];
    write << ids[stuCount] << " " << names[stuCount] << " " << sexes[stuCount] << endl;
    stuCount++;

    write.close();
}

void readData() {
    ifstream read("data.txt", ios::in);
    if (!read) {
        cout << "Error opening file for reading!" << endl;
        return;
    }

    stuCount = 0;  // Reset stuCount before reading

    while (read >> ids[stuCount] >> names[stuCount] >> sexes[stuCount]) {
        stuCount++;
    }

    read.close();
}

void displayData() {
    heading();
    for (int i = 0; i < stuCount; i++) {
        cout << setw(8) << ids[i] << setw(15) << names[i] << setw(8) << sexes[i] << endl;
    }
}

void searchData() {
    int searchId;
    cout << "Enter ID to search: ";
    cin >> searchId;

    for (int i = 0; i < stuCount; i++) {
        if (ids[i] == searchId) {
            cout << "Record found:\n";
            cout << setw(8) << ids[i] << setw(15) << names[i] << setw(8) << sexes[i] << endl;
            return;
        }
    }
    cout << "Record not found!" << endl;
}

void updateData() {
    int updateId;
    cout << "Enter ID to update: ";
    cin >> updateId;

    for (int i = 0; i < stuCount; i++) {
        if (ids[i] == updateId) {
            cout << "Enter new Name: "; cin >> names[i];
            cout << "Enter new Sex: "; cin >> sexes[i];

            ofstream write("data.txt", ios::out);  // Overwrite file
            for (int j = 0; j < stuCount; j++) {
                write << ids[j] << " " << names[j] << " " << sexes[j] << endl;
            }
            write.close();
            cout << "Record updated!" << endl;
            return;
        }
    }
    cout << "Record not found!" << endl;
}

void deleteData() {
    int deleteId;
    cout << "Enter ID to delete: ";
    cin >> deleteId;

    ofstream write("temp.txt", ios::out);  // Temporary file
    bool found = false;

    for (int i = 0; i < stuCount; i++) {
        if (ids[i] == deleteId) {
            found = true;
            continue;  // Skip the record to be deleted
        }
        write << ids[i] << " " << names[i] << " " << sexes[i] << endl;
    }

      // Rename temp.txt to data.txt

    if (found) {
        cout << "Record deleted!" << endl;
    } else {
        cout << "Record not found!" << endl;
    }
}
