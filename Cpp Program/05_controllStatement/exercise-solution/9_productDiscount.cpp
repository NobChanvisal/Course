#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int code,qty,dis;
    string name;
    float price,total,payment,save;
    
    cout<< "Please Enter Your Product Data :"<<endl;
    cout<< ">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>"<<endl<<endl;
    cout<< "Enter code     : ";
    cin>>code;
    cout<< "Enter name     : ";
    cin>>name;
    cout<< "Enter price($) : ";
    cin>>price;
    cout<< "Enter qty      : ";
    cin>>qty;
    total = qty * price;
        if(total >= 500){
            dis = 50;
        }
        else if(total > 400){
            dis = 40;
        }
        else if(total > 300){
            dis = 30;
        }
        else if(total > 200){
            dis = 20;
        }
        else{
            dis = 0;
        }
    save = total * dis/100;
    payment = total - save;
    cout<< "Output Data Of Product > "<<endl;
    cout<< "==================================="<<endl;
    cout<< "Product code     : "<<code<<endl;
    cout<< "Product name     : "<<name<<endl;
    cout<< "Product price    : "<<price<<"$"<<endl;
    cout<< "Product qty      : "<<qty<<endl;
    cout<< "Product total    : "<<total<<"$"<<endl;
    cout<< "Product discount : "<<dis<<"%"<<endl;
    cout<< "Save Money       : "<<save<<"$"<<endl;
    cout<< "Product payment  : "<<payment<<"$"<<endl;
    getch();
    return 0;
}