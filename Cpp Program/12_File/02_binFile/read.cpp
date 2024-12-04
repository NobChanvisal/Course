#include <iostream>
#include <fstream>
#include <iomanip>

using namespace std;

// Global variables
const char* filename = "students.bin";
const int MAX_STUDENTS = 100;
int count = 0;                   // Number of students read

struct Student {
    int rollNo;
    char name[50];
    float grade;

    // Function to display individual student data
    void display() const {
        cout << left << setw(10) << rollNo 
             << setw(25) << name 
             << fixed << setprecision(2) << grade << endl;
    }
};
Student students[MAX_STUDENTS];  // Array to store student data

// Function to read student data from the binary file
void readStudentData() {
    ifstream inFile(filename, ios::binary);
    if (!inFile) {
        cerr << "File could not be opened!" << endl;
        return;
    }

    count = 0;
    while (inFile.read(reinterpret_cast<char*>(&students[count]), sizeof(Student))) {
        count++;
    }

    inFile.close();
}

// Function to display all student data
void displayAllStudents() {
    cout << left << setw(10) << "Roll No" << setw(25) << "Name" << setw(10) << "Grade" << endl;
    cout << "-----------------------------------------------------" << endl;

    for (int i = 0; i < count; i++) {
        students[i].display();  // Call display method of each student
    }
}

int main() {
    // Read student data from the file
    readStudentData();

    // Display all the student data
    displayAllStudents();

    return 0;
}
