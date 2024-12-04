#include <iostream>
#include <conio.h>

using namespace std;
class Teacher{
    private:
        int id;
        string name;
        char sex;
        int age;
        float salary;
    public:
        void input();
        void output();
        void update();
        int getId(){
            return id;
        }
};
void Teacher::input(){
    cout<<endl<<"Insert Data Of Teacher : "<<endl;
    cout<< "_________________________________________"<<endl;
    cout<< "Enter id : ";
    cin>>id;
    cout<< "Enter name : ";
    cin>>name;
    cout<< "Enter sex : ";
    cin>>sex;
    cout<< "Enter age : ";
    cin>>age;
    cout<< "Enter salary : ";
    cin>>salary;
}
void Teacher::output(){
    cout<<id<< "\t"<<name<< "\t"<<sex<< "\t"<<age<< "\t"<<salary<<endl;
}
void Teacher::update() {
    cout << "Updating data for Teacher ID: " << id << "\n";
    cout<< "_________________________________________"<<endl;
    cout<< "Enter new id : ";
    cin>>id;
    cout<< "Enter new name : ";
    cin>>name;
    cout<< "Enter new sex : ";
    cin>>sex;
    cout<< "Enter new age : ";
    cin>>age;
    cout<< "Enter new salary : ";
    cin>>salary;
        cout << "Student data updated.\n";
    }