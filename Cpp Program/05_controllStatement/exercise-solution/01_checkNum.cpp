#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    float number;
    cout<<"Enter Number :";
    cin>>number;
    if (number < 0){
        cout<<"This number is negative ";
    }
    if(number == 0){
        cout<<"This number is Zero ";
    }
    if(number > 0){
        cout<<"This number is positive";
    }
    getch();
    return 0;
}