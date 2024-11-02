#include <stdio.h>

int staff_id;
char staff_name[20];
float salaryBeform;

void input();
void output();
float calculate_tax(float salaryBeform);

int main() {
    input();
    output();
    return 0;
}
void input() {
    printf("Enter Staff ID: ");
    scanf("%d", &staff_id);
    printf("Enter Staff Name: ");
    scanf("%s", staff_name);
    printf("Enter Salary: ");
    scanf("%f", &salaryBeform);
}
void output() {
    float tax = calculate_tax(salaryBeform);
    float salary = salaryBeform - tax;
    
    printf("\nStaff ID    : %d\n", staff_id);
    printf("Name          : %s\n", staff_name);
    printf("Salary Beform : %.2f\n", salaryBeform);
    printf("Tax           : %.2f\n", tax);
    printf("Salary        : %.2f\n", salary);
}
float calculate_tax(float salary) {
    if (salary > 2000) {
        return salary * 0.02;  // 2% tax
    } else if (salary > 1500) {
        return salary * 0.01;  // 1% tax
    } else if (salary > 1000) {
        return salary * 0.005; // 0.5% tax
    } else {
        return 0; // No tax
    }
}