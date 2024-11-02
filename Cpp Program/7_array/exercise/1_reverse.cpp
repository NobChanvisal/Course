#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int array[100];
    int n;
    cout<< "Enter terms of array : ";
    cin>>n;
    for(int i = 1; i<=n; i++){
        cout<< "Enter value of arr-"<<i<<" : ";
        cin>>array[i];
    }

    cout<<endl<< "Output Array befor reverse : "<<endl;
    for(int i = 1; i <= n; i++){
        cout<<array[i]<<"\t";
    }

    cout<<endl<< "Output Array after reverse : "<<endl;
    for(int i = n; i >= 1; i--){
        cout<<array[i]<<"\t";
    }
    getch();
    return 0;
}