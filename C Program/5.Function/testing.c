#include <stdio.h>

void change(int a, int b) {
    a = 10;
    b = 20;
}

void change1(int *c, int *d) {
    *c = 10;
    *d = 20;
}

int main() {
    int a = 4, b = 3;
    int c = 4, d = 3;
    change1(&c, &d); 
    change(a, b);
    printf("a: %d\n", a);
    printf("c: %d\n", c);
    printf("d: %d\n", d);
    printf("b: %d\n", b);
    return 0;
}
