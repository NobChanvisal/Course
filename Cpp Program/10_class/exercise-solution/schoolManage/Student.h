#include <iostream>
#include <conio.h>
using namespace std;

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
        cin>>js;
        cout<<endl << "Student data updated.\n";
    }

};
