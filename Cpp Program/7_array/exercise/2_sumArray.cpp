#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    int arr[50],n;
    int sum = 0;
    cout<< "Enter terms of array : ";
    cin>>n;
    for(int i = 1; i<=n; i++){
        cout<< "Enter arr-"<<i<< " : ";
        cin>>arr[i];
    }
    for(int i =1; i<=n; i++){
        sum += arr[i];
    }
    cout<<endl<<"======================"<<endl;
    cout<< "Sum of array : "<<sum <<endl;
    getch();
    return 0;
}