#include "D:\RUPP\Teaching\Cpp Teaching\8.class\exercise\schoolManage\Teacher.h"
int count = 0;
Teacher teachers[100];
void input();
void output();
void search();
void update();
void remove();
void header();
class TeacherMenu
{

public:
    void menu();
};
void TeacherMenu::menu() {
    int opt;
    do {
        cout << "\n1. Input\n2. Output\n3. Search\n4. Update\n5. Delete\n6. Exit\n";
        cout << "Choose an option: ";
        cin >> opt;
        switch (opt) {
            case 1:
                input();
                break;
            case 2:
                header();
                output();
                cout<< "---------------------------------------------"<<endl;
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
    
}


void header(){
        cout<<endl<<"Name"<<"\t\t"<<"Age"<<"\t"<<"Gpa"<<endl;
        cout<< "---------------------------------------------"<<endl;
    }
void input() {
    if (count >= 100) {
        cout << "Maximum teacher limit reached.\n";
        return;
    }
    teachers[count++].input();
}

void output() {
    cout<<endl<<"View Data Of Teacher : "<<endl;
    cout<< "--------------------------------------"<<endl;
    if (count == 0) {
        cout << "No teacher data available.\n";
        return;
    }
    for (int i = 0; i < count; i++) {
        teachers[i].output();
    }
}

void search() {
    if (count == 0) {
        cout << "No teacher data available.\n";
        return;
    }
    int searchid;
    cout << "Enter Student ID to search: ";
    cin >> searchid;
    for (int i = 0; i < count; i++) {
        if (teachers[i].getId() == searchid) {
            cout << "\nStudent Found:\n";
            teachers[i].output();
            return;
        }
    }
    cout << "Student with ID " << searchid << " not found.\n";
}

void update() {
    if (count == 0) {
        cout << "No teacher data available.\n";
        return;
    }
    int updateid;
    cout << "Enter Student ID to update: ";
    cin >> updateid;
    for (int i = 0; i < count; i++) {
        if (teachers[i].getId() == updateid) {
            teachers[i].update();
            return;
        }
    }
    cout << "Student with ID " << updateid << " not found.\n";
}

void remove() {
    if (count == 0) {
        cout << "No teacher data available.\n";
        return;
    }
    int deleteid;
    cout << "Enter Student ID to delete: ";
    cin >> deleteid;
    for (int i = 0; i < count; i++) {
        if (teachers[i].getId() == deleteid) {
            for (int j = i; j < count - 1; j++) {
                teachers[j] = teachers[j + 1];
            }
            count--;
            cout << "Student with ID " << deleteid << " deleted.\n";
            return;
        }
    }
    cout << "Student with ID " << deleteid << " not found.\n";
}
