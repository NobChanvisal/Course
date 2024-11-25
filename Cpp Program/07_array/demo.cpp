#include <iostream>
using namespace std;

int main(){
    int arr[20];

    //input
    for(int i = 1; i<=5; i++){
        cout<< "Enter element - "<<i<<": ";
        cin>>arr[i];
    }
    //output
    cout<<endl<< "Output Array"<<endl;
    for(int i = 1; i<=5; i++){
        cout<<"element "<<i <<": "<<arr[i]<<endl;
    }
}