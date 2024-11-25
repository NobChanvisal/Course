#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    float length,r;
    float width,area;
    int optione;

    cout<< "Area of shape app"<<endl;
    cout<< "---------------------------------------------"<<endl;
    cout<< "1.Rectangle\t2.Circle\t3.Traingle\t4.Exit"<<endl;
    cout<< "---------------------------------------------"<<endl;
    cout<< "Chose one optione[1-4] : ";
    cin>> optione;
    switch (optione)
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
    case 3:
        cout<< "Enter Height : ";
        cin>>length;
        cout<< "Enter Bath   : ";
        cin>>width;
        area = (length*width)/2;
        cout<<"This area of Triangle : "<<area;
        break;
    case 4:
        return 0;
    default:
        cout<< "No Optione !!!"<<endl;
        break;
    }
    getch();return 0;
}