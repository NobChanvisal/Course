#include <iostream>
#include <string>
using namespace std;

// Define a structure for student data
struct Student {
    int id;
    string name;
    float gpa; 
    int age;
};
// Declare the array of students and a count of how many students are in the array
Student students[100];
int student_count = 0;

void input();
void output();
void search();
void update();
void remove();

int main() {
    int opt;
    do {
        cout << "\n1. Input\n2. Output\n3. Search\n4. Update\n5. Delete\n6. Exit\n";
        cout << "Choose an option: ";
        cin >> opt;
        cin.ignore(); // Clear newline character left by cin
        switch (opt) {
            case 1:
                input();
                break;
            case 2:
                output();
                break;
            case 3:
                search();
                break;
            case 4:
                update();
                break;
            case 5:
                remove();
                break;
            case 6:
                cout << "Exiting...\n";
                break;
            default:
                cout << "Invalid option! Please choose again.\n";
        }
    } while (opt != 6);

    return 0;
}

void input() {
    if (student_count >= 100) {
        cout << "Maximum student limit reached.\n";
        return;
    }
    Student stu;
    
    // Input student data from the keyboard
    cout << "Enter Student ID: ";
    cin >> stu.id;
    cin.ignore(); // Clear newline character left by cin
    cout << "Enter Student Name: ";
    getline(cin, stu.name);
    cout << "Enter Student GPA: ";
    cin >> stu.gpa;
    cout << "Enter Student Age: ";
    cin >> stu.age;
    
    // Add student to the array
    students[student_count++] = stu;
}
void output() {
    if (student_count == 0) {
        cout << "No student data available.\n";
        return;
    }
    for (int i = 0; i < student_count; i++) {
        cout << "\nStudent " << i + 1 << " Data:\n";
        cout << "Student ID: " << students[i].id << "\n";
        cout << "Student Name: " << students[i].name << "\n";
        cout << "Student GPA: " << students[i].gpa << "\n";
        cout << "Student Age: " << students[i].age << "\n";
    }
}

void search() {
    if (student_count == 0) {
        cout << "No student data available.\n";
        return;
    }
    int searchid;
    cout << "Enter Student ID to search: ";
    cin >> searchid;
    for (int i = 0; i < student_count; i++) {
        if (students[i].id == searchid) {
            cout << "\nStudent Found:\n";
            cout << "Student ID: " << students[i].id << "\n";
            cout << "Student Name: " << students[i].name << "\n";
            cout << "Student GPA: " << students[i].gpa << "\n";
            cout << "Student Age: " << students[i].age << "\n";
            return;
        }
    }
    cout << "Student with ID " << searchid << " not found.\n";
}

void update() {
    if (student_count == 0) {
        cout << "No student data available.\n";
        return;
    }
    int updateid;
    cout << "Enter Student ID to update: ";
    cin >> updateid;
    for (int i = 0; i < student_count; i++) {
        if (students[i].id == updateid) {
            cout << "Updating data for Student ID: " << updateid << "\n";
            cout << "Enter new Student Name: ";
            getline(cin, students[i].name);
            cout << "Enter new Student GPA: ";
            cin >> students[i].gpa;
            cout << "Enter new Student Age: ";
            cin >> students[i].age;
            cout << "Student data updated.\n";
            return;
        }
    }
    cout << "Student with ID " << updateid << " not found.\n";
}

void remove() {
    if (student_count == 0) {
        cout << "No student data available.\n";
        return;
    }
    int deleteid;
    cout << "Enter Student ID to delete: ";
    cin >> deleteid;
    for (int i = 0; i < student_count; i++) {
        if (students[i].id == deleteid) {
            for (int j = i; j < student_count - 1; j++) {
                students[j] = students[j + 1];
            }
            student_count--;
            cout << "Student with ID " << deleteid << " deleted.\n";
            return;
        }
    }
    cout << "Student with ID " << deleteid << " not found.\n";
}
