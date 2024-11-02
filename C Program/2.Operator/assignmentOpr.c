// Examples of assignment operators

#include <stdio.h>
int main()
{
    int a = 7, b;
    b = a;      //
        printf("b = %d\n", b);
    b += a;     // b = b + a
        printf("b = %d\n", b);
    b -= a;     //b = b - a
        printf("b = %d\n", b);
    b *= a;     //b = b * a
        printf("b = %d\n", b);
    b /= a;     //b = b / a
        printf("c = %d\n", b);
       ;     //b = b % a
        printf("b = %d\n", b);

    return 0;
}