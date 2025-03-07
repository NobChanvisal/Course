// C++ program to display a pattern
// with 5 rows and 3 columns

#include <iostream>
#include <conio.h>
using namespace std;

int main() {
   for (int i = 1; i <= 5; i++) {
    for(int k = 1; k <= i; k++){
        cout<< " ";
    }
    for (int j = i; j <= 5; j++) {
        cout << "*";
    }
      cout << endl;
   }
getch();
   return 0;
}