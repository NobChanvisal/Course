//Write a C program to print numbers from 0 to 10 and 10 to 0 using two while loops.
#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int i,n;
    cout<< "Enter number of digits : ";cin>>n;
    i = n;

    while (i>0)
    {
        cout<< i<<endl;
        i--;
    }
    getch();
    return 0;
    
}
