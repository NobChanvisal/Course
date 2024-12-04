#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    float l,length,r;
    float w,width,area,p;
    char opt;
    int option;

    cout<< "Area And Parimet Of Shape"<<endl;
    cout<< "--------------------------------"<<endl;
    cout<< "a.Area\nb.Parimet\nc.Exit"<<endl;
    cout<< "Enter Option : ";
    cin>>opt;

    switch (opt)
    {
    case 'a':
        cout<<endl<< "Area of shape"<<endl;
        cout<< "---------------------------------------------"<<endl;
        cout<< "1.Rectangle\n2.Circle\n4.Exit"<<endl;
        cout<< "---------------------------------------------"<<endl;
        cout<< "Chose one optione[1-4] : ";
        cin>> option;
        switch (option)
        {
        case 1:
            cout<< "Enter Length : ";
            cin>>length;
            cout<< "Enter Width  : ";
            cin>>width;
            area = length * width;
            cout<<"This area of Rectangle : "<<area;
            break;
        case 2:
            cout<< "Enter Radius : ";
            cin>>r;
            area = 3.14*(r*r);
            cout<<"This area of Circle : "<<area;
            break;
        case 4:
            return 0;
        default:
            cout<< "No Optione !!!"<<endl;
            break;
        }
        break;
    case 'b':
        cout<<endl<< "Parimet Of Shape"<<endl;
        cout<< "---------------------------"<<endl;
        cout<< "1. Rectangle"<<endl;
        cout<< "2. Circle"<< endl;
        cout<< "3. Exit"<<endl;
        cout<< "Enter Option : ";
        cin>>option;
        switch (option)
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
        case 3:
            return 0;
            break;
        default:
            cout<< "No Option"<<endl;
            break;
        }
    default:
        break;
    }
    getch();
    return 0;
}