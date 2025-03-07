#include <iostream>
#include <iomanip>
#include <conio.h>
using namespace std;

int main(){
    int code[20];
    string names[20];
    int qty[20], sale, saleQty;
    float price[20], amount;
    int count = 0;
    int opt, find;

    do
    {
        cout<<endl<< "Minimart"<<endl;
        cout<< "-------------------------"<<endl;
        cout<< "1.Insert\n2.View\n3.Sale\n4.Exit"<<endl;
        cout<< "-------------------------"<<endl;
        cout<< "Enter option : "; cin>>opt;
        switch (opt)
        {
        case 1:
            if (count < 20) { // Check to avoid exceeding array bounds
                cout<<endl<<"Insert Product"<<endl;
                cout<< "---------------------------"<<endl;
                cout<< "Enter code : ";
                cin>>code[count];
                cout<< "Enter name : ";
                cin>>names[count];
                cout<< "Enter Price : ";
                cin>>price[count];
                cout<< "Enter Qty   : ";
                cin>>qty[count];
                count++; 
            } else {
                cout << "Product list is full!" << endl;
            }
            break;
        case 2:
            cout<<endl<<"--------------------------------------"<<endl;
            cout<< left;
            cout<< setw(10)<<"Code";
            cout<< setw(20)<<"Name";
            cout<< setw(10)<<"Price";
            cout<< setw(10)<<"Qty"<<endl;
            cout<<"--------------------------------------"<<endl;
            for (int i = 0; i < count; i++)
            {
                cout<< setw(10)<<code[i];
                cout<< setw(20)<<names[i];
                cout<< setw(10)<<price[i];
                cout<< setw(10)<<qty[i]<<endl;
            }
            break;
        case 3:
            find = 0; 
            cout<<endl<< "Sale Product "<<endl;
            cout<< "---------------------------"<<endl<<endl;
            cout<< "Enter Product code to Sale : ";
            cin>>sale;
            for (int i = 0; i < count; i++)
            {
                if(code[i] == sale){
                    cout<<"Enter qty : ";
                    cin>>saleQty;
                    if(qty[i] < saleQty){
                        cout<< "-------------------"<<endl;
                        cout<< "Insufficient Stock"<<endl;
                    }
                    else{
                        qty[i] -= saleQty;
                        amount = price[i] * saleQty;
                        cout<<endl<< "Invoice"<<endl;
                        cout<< "------------------"<<endl;
                        cout<< "Code   : "<<code[i]<<endl;
                        cout<< "Name   : "<<names[i]<<endl;
                        cout<< "Price  : "<<price[i]<<endl;
                        cout<< "Qty    : "<<saleQty<<endl;
                        cout<< "Amount : "<<amount<<endl;
                    }
                    find = 1;
                }
            }
            if(find == 0){
                cout<< "Product not found !!"<<endl;
            }
            break;
        case 4:
            return 0;
        
        default:
            cout << "Invalid option! Please try again." << endl;
            break;
        }
    } while (opt != 4);
	getch();
    return 0;
}
