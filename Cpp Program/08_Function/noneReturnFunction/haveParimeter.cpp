#include <iostream>
using namespace std;
//function definition
void printNum(int n){
    for(int i = 1; i<=n; i++){
        cout<<i<<endl;
    }
}
void printRevers(int n){
    for(int i = n; i>=1; i--){
        cout<< i<<endl;
    }
}
int main(){
    int num;
    cout<< "Enter n : ";cin>>num;
    cout<<endl<< "Print number from 1 to "<<num <<endl;
    printNum(num);//call function
    cout<<endl<< "Print number from "<<num<<" to "<<"1" <<endl;
    printRevers(num);//call function
}