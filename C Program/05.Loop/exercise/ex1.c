#include <stdio.h>

int main() {
    int i, n, sum = 0;
    printf("Culculate sum\n");
    printf("_____________________________\n");
    printf("\tEnter n: ");
    scanf("%d", &n);
    for(i = 1; i <= n; i++) {
        sum += 2 * i;
    }
    printf("\tSum = %d\n", sum); 
    return 0;
}