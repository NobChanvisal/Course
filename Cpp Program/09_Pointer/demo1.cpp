#include <iostream>
using namespace std;
int main() {
    int var = 5;

    // store address of var
    int* point_var = &var;

    cout << "value of var = " << var << endl;
    cout << "Address of var (&var) = " << &var << endl
         << endl;
    cout << "Adress of point_var = " << point_var << endl;
    cout << "Value of the address pointed to by point_var (*point_var) = " << *point_var << endl;
    
    return 0;
}