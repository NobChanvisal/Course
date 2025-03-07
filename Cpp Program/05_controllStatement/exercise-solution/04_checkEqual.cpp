#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int number ;
    int number2;
    cout<< "Enter value of number1 > ";
    cin>>number;
    cout<< "Enter value of number2 >";
    cin>>number2;

    if( number == number2){
        cout << "Number1 and Number2 are equal"<<endl;
    }
    else{
        cout<< "Number1 and Number2 are not equal"<<endl;
    }
    getch();
    return 0;
}