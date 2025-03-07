#include <iostream>

using namespace std;
int main(){
    unsigned int id;
    string name;
    char gender;
    unsigned age;
    float salary;

    cout<<"Please Enter Data of staff"<<endl;
    cout<<"-----------------------------"<<endl;
    cout<<"\tEnter Staff ID     : ";
    cin>>id;
    
    cout<<"\tEnter Staff Name   : ";
    cin>>name;
    
    cout<<"\tEnter Staff Gender : ";
    cin>>gender;
    cout<<"\tEnter Staff Age    : ";
    cin>>age;
    cout<<"\tEnter Staff Salary : ";
    cin>>salary;

    cout<<"All Data of Staff"<<endl;
    cout<<"----------------------------"<<endl;
    cout<<"\tId     : "<<id<<endl;
    cout<<"\tName   :"<<name<<endl;
    cout<<"\tGender : "<<gender<<endl;
    cout<<"\tAge    : "<<age<<endl;
    cout<<"\tSalary : "<<salary<<endl;
    return 0;


}