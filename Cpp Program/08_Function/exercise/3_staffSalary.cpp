//ប្រសិនបើ totalSalary()​ លើស 700 គិតពន្ធ 0.04 នៃ totalSalary()
//ប្រសិនបើ totalSalary()​ ចន្លោះពី ​​550 ​ដល់ 700 គិតពន្ធ 0.03 នៃ totalSalary()
//ប្រសិនបើ totalSalary()​ ចន្លោះពី 400 ​ដល់ 550 គិតពន្ធ 0.03 នៃ totalSalary()
//ប្រសិនបើ totalSalary()​ ចន្លោះពី ​​250 ​ដល់ 400 គិតពន្ធ 0.02 totalSalary()
//ប្រសិនបើ totalSalary()​ ក្រោម​ 250 មិនយកពន្ធ

#include <iostream>
#include <conio.h>
using namespace std;


int id;
string name;
float hour;
float salary;

void input();//for input data
void output();//for output data
float totalSalary();//caculate salary
float tax();//caculate tax by condition

int main() {
    input();
    output();
    getch();
    return 0;
}

void input() {
    cout<<endl<< "Insert Data Of Staff"<<endl;
    cout<< "---------------------------"<<endl;
    cout << "Enter ID: ";
    cin >> id;
    cout << "Enter name: ";
    cin >> name;
    cout << "Enter hours worked: ";
    cin >> hour;
    cout << "Enter salary per hour: ";
    cin >> salary;
}
void output() {
    cout<<endl<< "View Data Of Staff"<<endl;
    cout<< "---------------------------"<<endl;
    cout << "ID: " << id << endl;
    cout << "Name: " << name << endl;
    cout << "Hours worked: " << hour << endl;
    cout << "Salary per hour: " << salary << endl;
    cout << "Salary: " << totalSalary() << endl;
    cout << "Tax : "<<tax()<<endl;
    cout << "Final salary : "<<totalSalary() - tax()<<endl;
}
float totalSalary() {
    return hour * salary;
}
float tax(){
    float t;
    if(totalSalary() > 700){
        t = totalSalary() * 0.04;
    }
    else if(totalSalary() > 550){
        t = totalSalary() * 0.03;
    }
    else if(totalSalary() > 400){
        t = totalSalary() * 0.02;
    }
    else if(totalSalary() > 250){
        t = totalSalary() * 0.01;
    }
    else{
        t = 0;
    }
    return t;
}
