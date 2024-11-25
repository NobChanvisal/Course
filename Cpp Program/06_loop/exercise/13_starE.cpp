// C++ program to display a pattern
// with 5 rows and 3 columns

#include <iostream>
#include <conio.h>
using namespace std;

int main() {
   for (int i = 1; i <= 5; ++i) {
      for (int j = 1; j <= i; ++j) {
         cout << i;
      }
      cout << endl;
   }
   getch();
   return 0;
}