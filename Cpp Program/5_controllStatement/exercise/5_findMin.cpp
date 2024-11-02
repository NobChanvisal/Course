#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int a,b,min;

    cout<< "Enter a : ";
    cin>>a;
    cout<< "Enter b : ";
    cin>>b;

    if(a < b){
        min = a;
    }
    else{
        min = b;
    }
    cout<< "-----------------------------"<<endl;
    cout<< "Min = "<<min<<endl;
    getch();
    return 0;
}