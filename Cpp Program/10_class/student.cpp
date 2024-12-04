#include <iostream>
#include <conio.h>
using namespace std;


int count = 0;
class Student {
private:
    int id;
    string name;
    float html = 0;  
    float css = 0;
    float js = 0;
    int age;
public:
    // Student() : id(0), gpa(0.0), age(0) {}

    void input() {
        cout << "Enter Student ID: ";
        cin >> id;
        cout << "Enter Student Name: ";
        cin>>name;
        cout << "Enter Student Age: ";
        cin >> age;
    }
    void inputScore(){
        cout << "Enter HTML Score : ";
        cin >> html;
        cout << "Enter CSS Score : ";
        cin>>css;
        cout << "Enter JS Score : ";
        cin >> js;
    }
    void output(){
        cout<<id<<"\t"<<name<<"\t\t"<<age<<"\t"<< html<<"\t"<<css<<"\t"<<js<<"\t"<<gpa()<<endl;
    }

    int getId(){
        return id;
    }
    float getHtml(){return html;}
    float getCss(){return css;}
    float getJs(){return js;}
    float gpa(){
        return (getHtml() + getCss() + getJs())/3;
    }
    void update() {
        cout << "Updating data for Student ID: " << id << "\n";
        cout << "Enter new Student Name: ";
        cin>>name;
        cout << "Enter new Student Age: ";
        cin >> age;
        cout << "Enter new Student  HTML: ";
        cin >> html;
        cout << "Enter new Student CSS: ";
        cin >> css;
        cout << "Enter new Student JS: ";
        cout << "Student data updated.\n";
    }

};
Student students[100];
void input();
void output();
void inputScore();
void search();
void update();
void remove();
void header();
int main() {
    int opt;
    do {
        cout << "\n1. Insert New Student\n2. Add Student Score\n3. View\n4. Search\n5. Update\n6. Delete\n7. Exit\n";
        cout << "Choose an option: ";
        cin >> opt;
        switch (opt) {
            case 1:
                input();
                break;
            case 2:
                inputScore();
                break;
            case 3:
                header();
                output();
                cout<< "---------------------------------------------"<<endl;
                break;
            case 4:
                search();
                break;
            case 5:
                update();
                break;
            case 6:
                remove();
                break;
            case 7:
                cout << "Exiting...\n";
                break;
            default:
                cout << "Invalid option! Please choose again.\n";
        }
    } while (opt != 7);
    getch();
    return 0;
}
void header(){
        cout<<endl<<"Id"<<"\t"<<"Name"<<"\t\t"<<"Age"<<"\t"<<"Html"<< "\t"<<"Css"<< "\t"<< "Js"<< "\t"<<"Gpa"<<endl;
        cout<< "---------------------------------------------"<<endl;
    }
void input() {
    if (count >= 100) {
        cout << "Maximum student limit reached.\n";
        return;
    }
    students[count++].input();
}

void inputScore(){
    if (count == 0) {
        cout << "No student data available.\n";
        return;
    }
    int searchid;
    cout << "Enter Student ID to search: ";
    cin >> searchid;
    for (int i = 0; i < count; i++) {
        if (students[i].getId() == searchid) {
            cout<<endl;
            students[i].inputScore();
            return;
        }
    }
    cout << "Student with ID " << searchid << " not found.\n";
}
void output() {
    if (count == 0) {
        cout << "No student data available.\n";
        return;
    }
    for (int i = 0; i < count; i++) {
        students[i].output();
    }
}

void search() {
    if (count == 0) {
        cout << "No student data available.\n";
        return;
    }
    int searchid;
    cout << "Enter Student ID to search: ";
    cin >> searchid;
    for (int i = 0; i < count; i++) {
        if (students[i].getId() == searchid) {
            cout << "\nStudent Found:\n";
            students[i].output();
            return;
        }
    }
    cout << "Student with ID " << searchid << " not found.\n";
}

void update() {
    if (count == 0) {
        cout << "No student data available.\n";
        return;
    }
    int updateid;
    cout << "Enter Student ID to update: ";
    cin >> updateid;
    for (int i = 0; i < count; i++) {
        if (students[i].getId() == updateid) {
            students[i].update();
            return;
        }
    }
    cout << "Student with ID " << updateid << " not found.\n";
}

void remove() {
    if (count == 0) {
        cout << "No student data available.\n";
        return;
    }
    int deleteid;
    cout << "Enter Student ID to delete: ";
    cin >> deleteid;
    for (int i = 0; i < count; i++) {
        if (students[i].getId() == deleteid) {
            for (int j = i; j < count - 1; j++) {
                students[j] = students[j + 1];
            }
            count--;
            cout << "Student with ID " << deleteid << " deleted.\n";
            return;
        }
    }
    cout << "Student with ID " << deleteid << " not found.\n";
}
