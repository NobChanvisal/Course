#include <iostream>
using namespace std;

class person {
public:
    int id;
    string name;
    int age; 
public: 
    void input();
    void output();
};

void person::input() {
    cout << "Enter ID: ";
    cin >> id;
    cout << "Enter name: ";
    cin >> name; 
    cout << "Enter age: ";
    cin >> age;
}

void person::output() {
    cout << "ID: " << id << endl;
    cout << "Name: " << name << endl;
    cout << "Age: " << age << endl;
}

int main() {
    person p;
    p.input();
    p.output();
    return 0;
}
