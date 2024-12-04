#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    int a,b,result;
    char option;

    cout<< "Calculator of two number app:"<<endl;
    cout<< "-----------------------------"<<endl;
    cout<< "Enter value of number1 > ";
    cin>>a;
    cout<< "Enter value of number2 > ";
    cin>>b;
    cout<<endl<< "------------------------"<<endl;
    cout<< "Enter Your Chose[+,-,*] : ";
    cin>>option;
    switch(option)
    {
    case '+':
        result = a + b;
        break;
    case '-':
        result = a - b;
        break;
    case '*':
        result = a * b;
        break;
    default:
        cout<< "No Option !!!"<<endl;
        break;
    }
    cout<<endl<< "------------------------"<<endl;
    cout<< "Result = "<<result<<endl;
    getch();
    return 0;
}