#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    float width,length,area,p;
    cout<< "Enter data of rectangle :"<<endl;
    cout<< "-----------------------------"<<endl;
    cout<< "Enter width  : ";
    cin>>width;
    cout<< "Enter length : ";
    cin>>length;

    area = length * width;
    p = 2*(length + width);

    cout<< "Output Data Of Rectangle"<<endl;
    cout<< "------------------------------"<<endl;
    cout<<endl<<"Length : "<<length<<endl;
    cout<<"Width  : "<<width<<endl;
    cout<<"Area   : "<<area<<endl;
    cout<<"perimet : "<<p;
    getch();
    return 0;
}