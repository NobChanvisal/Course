#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    int code;
    string name;
    char size;
    string color;
    int qty;
    float price;

    cout<< "Enter your product data : "<<endl;
    cout<< "-------------------------------"<<endl;
    cout<< "Enter Code : ";
    cin>>code;
    cout<< "Enter Name : ";
    cin>>name;
    cout<< "Enter Size : ";
    cin>>size;
    cout<< "Enter Color : ";
    cin>>color;
    cout<< "Enter Qty   : ";
    cin>>qty;
    cout<< "Enter price : ";
    cin>>price;

    cout<< "Output of product data :"<<endl;
    cout<< "---------------------------"<<endl;
    cout<<code <<endl;
    cout<<name<<endl;
    cout<<size<<endl;
    cout<<color<<endl;
    cout<<qty<<endl;
    cout<<price<<endl;
    getch();
    return 0;
}