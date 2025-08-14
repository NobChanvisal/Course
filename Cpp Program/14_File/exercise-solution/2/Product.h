#include <iostream>
#include <iomanip>

using namespace std;
void line(int n){
    for(int i = 0; i<n; i++){
        cout<<"-";
    }
    cout<<endl;
}
class Product
{
public:
    int code;
    string name;
    int qty;
    float price;
    float total;

    void input();
    void output();
    void heading();
};
void Product::heading(){
    cout<<left;
    cout<<setw(10)<< "Code"
        <<setw(25)<< "Name"
        <<setw(10)<< "Qty"
        <<setw(10)<< "Price"
        <<setw(10)<< "Total"<<endl;
    line(65);
}
void Product::input() {
    cout << "Enter product code: ";
    cin >> code;
    cout << "Enter product name: ";
    cin>>name;
    cout << "Enter product quantity: ";
    cin >> qty;
    cout << "Enter product price: ";
    cin >> price;

    total = qty * price;
}

void Product::output() {
    cout << setw(10) << code
         << setw(25) << name
         << setw(10) << qty
         << setw(10) << fixed << setprecision(2) << price
         << setw(10) << fixed << setprecision(2) << total << endl;
}


