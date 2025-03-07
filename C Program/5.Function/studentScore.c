#include <stdio.h>

int id;
char name[20];
float html, css, js;

float avg();
void input();
void output();
char grade(float avg);

int main() {
    input();
    output();
    return 0;
}

void input() {
    printf("Enter ID: ");
    scanf("%d", &id);
    printf("Enter Name: ");
    scanf("%s", name);
    printf("Enter HTML score: ");
    scanf("%f", &html);
    printf("Enter CSS score: ");
    scanf("%f", &css);
    printf("Enter JS score: ");
    scanf("%f", &js);
}

void output() {
    printf("\nID: %d\n", id);
    printf("Name: %s\n", name);
    printf("HTML: %.2f, CSS: %.2f, JS: %.2f\n", html, css, js);
    printf("Average: %.2f\n", avg());
    printf("Grade: %c\n", grade(avg()));
}

float avg() {
    return (html + css + js) / 3;
}

char grade(float average) {
    if (average >= 85) return 'A';
    else if (average >= 75) return 'B';
    else if (average >= 65) return 'C';
    else if (average >= 50) return 'D';
    else return 'E';
}

