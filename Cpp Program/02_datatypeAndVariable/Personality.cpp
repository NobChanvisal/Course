#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    unsigned int id  = 1;
    string name = "Robot";
    char gender = 'M';
    unsigned int age = 19;
    float gpa = 99.99;
    string school = "CITO";

    cout<<"Personal Information       "<<endl<<endl;
    cout<<"------------------------------"<<endl;
	getch();
    cout<<"Id          : "<<id <<endl;
    getch();
    cout<<"Name        : "<<name <<endl;
    getch();
	cout<<"Gender      : "<<gender <<endl;
    getch();
	cout<<"Age         : "<<age <<endl;
    getch();
	cout<<"University  : "<<school <<endl;
    getch();
    cout<<"GPA         : "<<gpa <<endl;

    return 0;

}