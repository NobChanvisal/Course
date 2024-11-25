#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int number ;
    cout<< "Enter number > ";
    cin>>number;

    if( number % 2 == 0){
        cout << "This number is even"<<endl;
    }
    else{
        cout<< "This number is odd"<<endl;
    }
    getch();
    return 0;
}