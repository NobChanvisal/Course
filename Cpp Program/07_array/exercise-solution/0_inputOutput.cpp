#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int id[100];
    int n;
    cout<< "Enter terms of array : ";
    cin>>n;
    cout<< "--------------------------"<<endl;

    for(int i = 1; i<=n; i++){
        cout<< "Enter value of id-"<<i<<" : ";
        cin>>id[i];
    }

    cout<<endl<< "Output Array: "<<endl;
    cout<< "============================"<<endl;
    for(int i = 1; i <= n; i++){
        cout<<"Student : "<<id[i]<<endl;
    }
    getch();
    return 0;
}