#include <stdio.h>

// Function declarations
int max(int num1, int num2);
int min(int num1, int num2);

int main() 
{
    int num1, num2, maximum, minimum;
    printf("Enter num 1 : ");
    scanf("%d",&num1);
    printf("Enter num 2 : ");
    scanf("%d",&num2);
    printf("----------------------------\n");
    
    maximum = max(num1, num2);  // Call maximum function
    minimum = min(num1, num2);  // Call minimum function
    
    printf("\nMaximum = %d", maximum);
    printf("\nMinimum = %d", minimum);
    
    return 0;
}
//function for find max
int max(int num1, int num2)
{
    return (num1 > num2 ) ? num1 : num2;
}

//function for find min
int min(int num1, int num2) 
{
    return (num1 > num2 ) ? num2 : num1;
}