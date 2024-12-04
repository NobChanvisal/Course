#include <iostream>
#include <conio.h>

using namespace std;
int main(){
    int code;
    string name;
    int qty; 
    float price;
    float total;

    cout<< "Enter your product data : "<<endl;
    cout<< "-------------------------------"<<endl;
    cout<< "Enter Code : ";
    cin>>code;
    cout<< "Enter Name : ";
    cin>>name;
    cout<< "Enter Qty   : ";
    cin>>qty;
    cout<< "Enter price : ";
    cin>>price;
    total = qty * price;
    cout<< "Output of product data :"<<endl;
    cout<< "---------------------------"<<endl;
    cout<<"Product Code    :"<<code <<endl;
    cout<<"Product Name  :"<<name<<endl;
    cout<<"Product Qty   :"<<qty<<endl;
    cout<<"Product Price :"<<price<<endl;
    cout<<"total         :"<<total<<endl;
    getch();
    return 0;
}