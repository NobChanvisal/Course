//calculate the sum = 1 + 3 + ....+ 2i-1
#include<iostream>
#include<conio.h>

using namespace std;

int main(){
    int number,i,sum = 0;
    cout<< "Enter number of digits : ";
    cin>>number;
    for(i = 1; i<=number; i++){
        sum += (2*i-1);
    }
    cout<< "sum = "<<sum;
    getch();
    return 0;
}