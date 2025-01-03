#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    int voltage;
    cout<< "Enter Voltage : ";
    cin>>voltage;

    if(voltage > 225){
        cout<< "Attention"<<endl;
    }
    else if(voltage > 210){
        cout<< "Normal"<<endl;
    }
    else if(voltage > 150){
        cout<< "Low Voltage"<<endl;
    }
    else{
        cout<< "Not work"<<endl;
    }
    getch();
    return 0;
}