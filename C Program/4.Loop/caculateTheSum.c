// Program to calculate the sum of first n natural numbers
// Positive integers 1,2,3...n are known as natural numbers

#include <stdio.h>
int main()
{
    int num,i, sum = 0;

    printf("Enter a positive integer: ");
    scanf("%d", &num);

    // for loop terminates when num is less than count
    for(int i = 1; i<= num; i++){
        sum += i;
    }

    printf("Sum = %d", sum);

    return 0;
} 