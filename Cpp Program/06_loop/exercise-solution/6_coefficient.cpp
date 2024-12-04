#include <iostream>
#include <conio.h>

using namespace std;
int main(){
    int number,i;
    cout<<endl<< "Enter number : ";
    cin>>number;
    cout<< "--------------------------"<<endl;
    for(i = 1; i<=10; i++){
        cout<< number <<" * "<<i <<" = "<<i*number<<endl;
    }
    getch();
    return 0;
}