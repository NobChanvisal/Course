#include "D:\RUPP\Teaching\Cpp Teaching\8.class\exercise\schoolManage\Student.h"
int student_count = 0;
Student students[100];
void Stuinput();
void Stuoutput();
void inputScore();
void Stusearch();
void Stuupdate();
void Sturemove();
void Stuheader();
class StudentMenu
{
    public:
        void menu();
};
void StudentMenu::menu(){
    int opt;
        do {
            cout << "\n1. Insert New Student\n2. Add Student Score\n3. View\n4. Search\n5. Update\n6. Delete\n7. Exit\n";
            cout << "Choose an option: ";
            cin >> opt;
            switch (opt) {
                case 1:
                    Stuinput();
                    break;
                case 2:
                    inputScore();
                    break;
                case 3:
                    Stuheader();
                    Stuoutput();
                    cout<< "---------------------------------------------"<<endl;
                    break;
                case 4:
                    Stusearch();
                    break;
                case 5:
                    Stuupdate();
                    break;
                case 6:
                    Sturemove();
                    break;
                case 7:
                    cout << "Exiting...\n";
                    break;
                default:
                    cout << "Invalid option! Please choose again.\n";
            }
        } while (opt != 7);
}

void Stuheader(){
        cout<<endl<<"Id"<<"\t"<<"Name"<<"\t\t"<<"Age"<<"\t"<<"Html"<< "\t"<<"Css"<< "\t"<< "Js"<< "\t"<<"Gpa"<<endl;
        cout<< "---------------------------------------------"<<endl;
    }
void Stuinput() {
    if (student_count >= 100) {
        cout << "Maximum student limit reached.\n";
        return;
    }
    students[student_count++].input();
}

void inputScore(){
    if (student_count == 0) {
        cout << "No student data available.\n";
        return;
    }
    int searchid;
    cout << "Enter Student ID to search: ";
    cin >> searchid;
    for (int i = 0; i < student_count; i++) {
        if (students[i].getId() == searchid) {
            cout<<endl;
            students[i].inputScore();
            return;
        }
    }
    cout << "Student with ID " << searchid << " not found.\n";
}
void Stuoutput() {
    if (student_count == 0) {
        cout << "No student data available.\n";
        return;
    }
    for (int i = 0; i < student_count; i++) {
        students[i].output();
    }
}

void Stusearch() {
    if (student_count == 0) {
        cout << "No student data available.\n";
        return;
    }
    int searchid;
    cout << "Enter Student ID to search: ";
    cin >> searchid;
    for (int i = 0; i < student_count; i++) {
        if (students[i].getId() == searchid) {
            cout << "\nStudent Found:\n";
            students[i].output();
            return;
        }
    }
    cout << "Student with ID " << searchid << " not found.\n";
}

void Stuupdate() {
    if (student_count == 0) {
        cout << "No student data available.\n";
        return;
    }
    int updateid;
    cout << "Enter Student ID to update: ";
    cin >> updateid;
    for (int i = 0; i < student_count; i++) {
        if (students[i].getId() == updateid) {
            students[i].update();
            return;
        }
    }
    cout << "Student with ID " << updateid << " not found.\n";
}

void Sturemove() {
    if (student_count == 0) {
        cout << "No student data available.\n";
        return;
    }
    int deleteid;
    cout << "Enter Student ID to delete: ";
    cin >> deleteid;
    for (int i = 0; i < student_count; i++) {
        if (students[i].getId() == deleteid) {
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

