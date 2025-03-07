#include <iostream>
#include <conio.h>
using namespace std;
int main(){
    int i,n,sum = 0;    
    i = 1;
    cout<<"Enter number of digits : ";
    cin>>n;
    while (i<=n)
    {
        sum += i;
        i++;
    }
    cout<<"sum of 1 + 2 +....+ "<<n<<" = "<< sum;
    getch();
    return 0;
}