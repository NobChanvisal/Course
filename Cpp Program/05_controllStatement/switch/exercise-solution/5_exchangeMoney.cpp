#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    float reil,dolar,exchang;
    int optione;

    cout<< "Exchange Money App"<<endl;
    cout<< "---------------------------------------------"<<endl;
    cout<< "1.From Dolar To Reil\n2.From Reil To Dolar\n3.Exit"<<endl;
    cout<< "---------------------------------------------"<<endl;
    cout<< "Chose one optione[1-3] : ";
    cin>> optione;
    switch (optione)
    {
    case 1:
        cout<<endl<< "Enter Money[$] : ";
        cin>> dolar;
        cout<< "Enter Exchange Money : ";
        cin>> exchang;

        reil = dolar * exchang;
        cout <<"------------------"<<endl;
        cout <<"Money : "<< dolar<< " $ = "<<reil<<" reil";
        break;
    case 2:
        cout<<endl<< "Enter Money[reil] : ";
        cin>> reil;
        cout<< "Enter Exchange Money : ";
        cin>> exchang;

        dolar = reil / exchang;
        cout <<"------------------"<<endl;
        cout <<"Money : "<< reil<< " reil = "<<dolar<<" $";
        break;
    case 3:
        return 0;
    default:
        cout<< "No Optione !!!"<<endl;
        break;
    }
    getch();return 0;
}