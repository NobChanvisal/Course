#include <stdio.h>
#include <ctype.h>
int main() {
    char c[20];

    printf("Enter c :" );gets(c);
    printf("%c -> %c", c, toupper(c));

    c = 'D';
    printf("\n%c -> %c", c, toupper(c));

    c = '9';
    printf("\n%c -> %c", c, toupper(c));
    return 0;
}