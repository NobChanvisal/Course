#include <iostream>

using namespace std;

float minumum(float a, float b){
    if(a<b){
        return a;
    }
    else{
        return b;
    }
}
float max(float a, float b){
    if(a>b){
        return a;
    }
    else{
        return b;
    }
}
int main(){
    float number1,number2;
    cout<< "Find Minimum And Maximum Using Function : "<<endl;
    cout<< "---------------------------------------------"<<endl;
    cout<< "Enter number 1 : ";
    cin>>number1;
    cout<< "Enter number 2 : ";
    cin>>number2;
    cout<< "---------------------------------------------"<<endl;
    cout<< "Minumum : "<<minumum(number1,number2)<<endl;
    cout<< "Maximum : "<<max(number1,number2)<<endl;
}