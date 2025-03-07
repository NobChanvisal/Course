// C++ program to display a pattern
// with 5 rows and 3 columns

#include <iostream>
using namespace std;

int main() {
   for (int i = 1; i <= 5; i++) {
    for(int k = i; k <= 5; k++){
        cout<< " ";
    }
    for (int j = 1; j <= i; j++) {
        cout << "*";
    }
    cout<<endl;
   }
   return 0;
}