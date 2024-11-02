#include <iostream>
#include <conio.h>

using namespace std;

int main(){
    int arr[50],temp;
    int n,search;

    cout<< "Enter terms of array : ";
    cin>>n;
    //input
    for(int i = 1; i<=n; i++){
        cout<< "Enter value of arr-"<<i<<" : ";
        cin>>arr[i];
    }
    //output
    cout<< "Output array before sort"<<endl<<endl;
    for(int i = 1; i<=n; i++){
        cout<<arr[i]<<"\t";
    }

    //search
    cout<<endl<< "Enter data to search : ";
    cin>>search;
    int found = 0;
    for(int i = 1; i<=n; i++){
        if(arr[i] == search){
            cout<<endl<< "data found : "<<endl;
            cout<<arr[i];
            found = 1;
        }
    }
    if(!found){
        cout<< "Data not found!!"<<endl;
    }

    
}