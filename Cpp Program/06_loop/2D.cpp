// C++ program to display a pattern
// with 5 rows and 3 columns

#include <iostream>
using namespace std;

int main() {
   for (int i = 1; i <= 3; ++i) {
      for (int j = 1; j <= 3; ++j) {
         cout << "*  ";
      }
      cout << endl;
   }

   return 0;
}