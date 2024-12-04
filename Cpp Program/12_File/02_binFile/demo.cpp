#include <iostream>
#include <fstream>
#include <iomanip>
#include <cstring>

using namespace std;

// Global variables

const int MAX_STUDENTS = 100;
int count = 0;                

class Student {
    public:
    int rollNo;
    char name[50];
    float grade;


    void input() {
        cout << "Enter roll number: ";
        cin >> rollNo;
        cin.ignore(); // Clear input buffer
        cout << "Enter name: ";
        cin.getline(name, 50);
        cout << "Enter grade: ";
        cin >> grade;
    }
    void display(){
        cout << left << setw(10) << rollNo 
             << setw(25) << name 
             << fixed << setprecision(2) << grade << endl;
    }
};
Student students[MAX_STUDENTS];  


void writeStudentData() {
    ofstream outFile("studentdata.bin", ios::binary | ios::app);
    if (!outFile) {
        cout << "File could not be opened!" << endl;
        return;
    }

    Student stu;
    stu.input(); 
    outFile.write(reinterpret_cast<char*>(&stu), sizeof(Student)); // Write data to file
    outFile.close();

    cout << "Data written to file successfully!" << endl;
}

void readStudentData() {
    ifstream inFile("studentdata.bin", ios::binary);
    if (!inFile) {
        cout << "File could not be opened!" << endl;
        return;
    }

    count = 0;
    while (inFile.read(reinterpret_cast<char*>(&students[count]), sizeof(Student))) {
        count++;
    }
    inFile.close();
}


void displayAllStudents() {
    cout << left << setw(10) << "Roll No" << setw(25) << "Name" << setw(10) << "Grade" << endl;
    cout << "-----------------------------------------------------" << endl;

    for (int i = 0; i < count; i++) {
        students[i].display();  
    }
}

int main() {
    int choice;

    do {
        cout << "\nMenu:\n";
        cout << "1. Add Student Data\n";
        cout << "2. Display All Students\n";
        cout << "3. Exit\n";
        cout << "Enter your choice: ";
        cin >> choice;

        switch (choice) {
            case 1:
                writeStudentData();
                break;
            case 2:
                readStudentData();
                displayAllStudents();
                break;
            case 3:
                cout << "Exiting...\n";
                break;
            default:
                cout << "Invalid choice! Please try again.\n";
        }
    } while (choice != 3);

    return 0;
}
