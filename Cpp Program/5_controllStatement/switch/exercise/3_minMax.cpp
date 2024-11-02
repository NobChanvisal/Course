#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int a,b,min,max;
    char opt;

    cout<< "Find Minimum and Maximum App :"<<endl;
    cout<< "-----------------------------"<<endl;
    cout<< "Enter value of number1 > ";
    cin>>a;
    cout<< "Enter value of number2 > ";
    cin>>b;
    cout<<endl<< "------------------------"<<endl;
    cout<< "a.Minimum\tb.Maximum"<<endl;
    cout<< "Enter Your Chose[a,b] : ";
    cin>>opt;

    switch(opt)
    {
    case 'a':
        if(a<b) min = a;
        else min = b;
        cout<<endl<< "Minimum = "<<min<<endl;
        break;
    case 'b':
        if(a>b) max = a;
        else max = b;
        cout<<endl<< "Maximum = "<<max<<endl;
        break;
    default:
        cout<< "No Option !!!"<<endl;
        break;
    }
    getch();
    return 0;
}