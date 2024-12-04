#include<iostream>

using namespace std;
int main(){
    int opt;
    float w,l,r,p;

    cout<< "Parimet Of Shape"<<endl;
    cout<< "---------------------------"<<endl;
    cout<< "1. Rectangle"<<endl;
    cout<< "2. Circle"<< endl;
    cout<< "3. Exit"<<endl;
    cout<< "Enter Option : ";
    cin>>opt;
    switch (opt)
    {
    case 1:
        cout<<endl<< "Enter width : ";
        cin>>w;
        cout<<"Enter Height : ";
        cin>>l;
        p = 2*(w+l);
        cout<< "--------------------------"<<endl;
        cout<< "Parimet of Rectangle : "<<p<<endl;
        break;
    case 2:
        cout<<endl<< "Enter radius : ";
        cin>>r;
        p = 2*3.14*r;
        cout<< "--------------------------"<<endl;
        cout<< "Parimet of Rectangle : "<<p<<endl;
        break;
    
    default:
        cout<< "No Option"<<endl;
        break;
    }
}