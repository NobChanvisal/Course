#include <stdio.h>

int main() {
    // Declare variables for student data
    char name[50];
    int roll_no;
    float html_marks, css_marks, js_marks;
    float total, average;

    // Input student data
    printf("Enter ID: ");
    scanf("%d", &roll_no);
    printf("Enter student name: ");
    fflush(stdin);
    gets(name); // Using gets for simplicity, though it's unsafe for real applications
    
    // Input marks for 3 subjects
    printf("Enter marks for HTML: ");
    scanf("%f", &html_marks);
    printf("Enter marks for CSS: ");
    scanf("%f", &css_marks);
    printf("Enter marks for JavaScript: ");
    scanf("%f", &js_marks);

    // Calculate total and average
    total = html_marks + css_marks + js_marks;
    average = total / 3;

    // Output the student data
    printf("Student Id: %d\n", roll_no);
    printf("\nStudent Name: %s\n", name);
    printf("Marks in HTML: %.2f\n", html_marks);
    printf("Marks in CSS: %.2f\n", css_marks);
    printf("Marks in JavaScript: %.2f\n", js_marks);
    printf("Total Marks: %.2f\n", total);
    printf("Average Marks: %.2f\n", average);

    return 0;
}
