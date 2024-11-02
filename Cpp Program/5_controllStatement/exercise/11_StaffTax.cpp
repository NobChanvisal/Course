#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    int id;
    string name;
    char sex;
    float salary,money;
    float day,tax,total;

    cout<< "Please insert staff's data >>"<<endl;
    cout<< "------------------------------"<<endl;
    cout<< "Enter Id : ";
    cin>>id;
    cout<< "Enter Name : ";
    cin>> name;
    cout<< "Enter Gender[M/F] : ";
    cin>>sex;
    cout<< "Enter Day : ";
    cin>>day;
    cout<< "Enter Money Perday : ";
    cin>>money;
    
	salary = day * money;
    if(salary > 3000){
        tax = 250 + 0.015 * (salary - 3000);
    }
    else if(salary > 2000){
        tax = 150 + 0.01 * (salary - 2000);
    }
    else{
        tax = 150;
    }
    total = salary - tax;
    cout<<endl<< "View staff data "<<endl;
    cout<< "--------------------------"<<endl;
    cout<< "Staff id     : "<< id<<endl;
    cout<< "Staff name   : "<< name<<endl;
    cout<< "Staff gender : "<< sex<<endl;
    cout<< "Staff salary : "<< salary<<" $"<<endl;
    cout<< "Staff tax    : "<< tax <<" $"<<endl;
    cout<< "Staff Total Salary : "<<total<<" $"<<endl;
    getch();
    return 0;
}