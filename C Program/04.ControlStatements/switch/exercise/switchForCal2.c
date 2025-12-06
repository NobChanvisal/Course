#include <stdio.h>
#include <conio.h>

int main() {
    char operation;
    float num1, num2, num3, result;

    printf("\nEnter number 1: ");
    scanf("%f", &num1);
    printf("Enter number 2: ");
    scanf("%f", &num2);
    printf("Enter number 3: ");
    scanf("%f", &num3);

    start:
    printf("Enter an operation (+, -, *, /): ");
    fflush(stdin); // Ensure any remaining input is cleared
    scanf(" %c", &operation); // Notice the space before %c to consume any whitespace
    printf("\n----------------------------------------\n");

    switch(operation) {
        case '+':
            result = num1 + num2 + num3; // Adding num3 as well
            printf("Result: %.2f\n", result);
            break;
        case '-':
            result = num1 - num2 - num3; // Subtracting num3 as well
            printf("Result: %.2f\n", result);
            break;
        case '*':
            result = num1 * num2 * num3; // Multiplying num3 as well
            printf("Result: %.2f\n", result);
            break;
        default:
            printf("Invalid operation\n");
        printf("Please press Enter key to continue.\n");
        char ch = getch();
        if(ch == 13) goto start; // Go back to start if Enter key is pressed
    }

    return 0;
}
