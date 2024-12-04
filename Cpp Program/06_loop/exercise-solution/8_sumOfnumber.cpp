//calculate the sum = 3 + 8 + 13 + ....
#include<iostream>
#include<conio.h>

using namespace std;

int main(){
    int number,i,sum = 0;
    cout<< "Enter number of digits : ";
    cin>>number;
    cout<< "-------------------------"<<endl;
    for(i = 1; i<=number; i++){
        sum += (5*i-2);
    }
    cout<< "sum = "<<sum;
    getch();
    return 0;
}