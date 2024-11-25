
#include <iostream>
#include<conio.h>
using namespace std;

int main() {
   for (int i = 1; i <= 5; ++i) {
      for (int j = i; j <= 5; ++j) {
         if(i % 2 == 0) cout<< "$";
         else cout<< "*";
      }
      cout << endl;
   }
   getch();
   return 0;
}