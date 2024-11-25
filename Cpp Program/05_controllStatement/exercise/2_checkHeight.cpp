
#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    float height;
    cout<<"Enter height :";
    cin>>height;
    if (height < 150){
        cout<<"The person is Dwarf ";
    }
    if(height == 150){
        cout<<"The person is Average height ";
    }
    if(height >= 165){
        cout<<"The person is Tall";
    }
    getch();
    return 0;

}



