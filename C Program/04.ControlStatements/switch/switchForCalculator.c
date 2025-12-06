#include<stdio.h>
int main() {
    char operation;
    float num1, num2, result;
    
    printf("\nEnter numbers of 1: ");
    scanf("%f", &num1);
    printf("Enter numbers of 2: ");
    scanf("%f", &num2);
    printf("Enter an operation (+, -, *): ");
    fflush(stdin);scanf("%c",&operation);
    printf("\n----------------------------------------\n");
  
    switch(operation) {
        case '+':
            result = num1 + num2;
            printf("Result: %.2f\n", result);
            break;
        case '-':
            result = num1 - num2;
            printf("Result: %.2f\n", result);
            break;
        case '*':
            result = num1 * num2;
            printf("Result: %.2f\n", result);
            break;
        default: 
            printf("Invalid operation\n");
    }

    return 0;
}