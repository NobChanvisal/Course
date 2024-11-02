#include <stdio.h>
#include <conio.h>

int main() {
    int id[20];
    char name[20][50];
    char sex[20];
    float html[20], css[20], js[20], evg[20];

    int i, n;
    
    // Input:
    printf("====================== Input ==================\n");
    printf("Input number of students: ");
    scanf("%d", &n);

    for(i = 0; i < n; i++) {
        printf("\nStudent %d:\n", i+1);

        printf("Input Id: ");
        scanf("%d", &id[i]);
        
        printf("Input Name: ");
        scanf(" %[^\n]s", name[i]);  // Reads string with spaces
        
        printf("Input Sex (M/F): ");
        scanf(" %c", &sex[i]);

        printf("Input HTML Score: ");
        scanf("%f", &html[i]);

        printf("Input CSS Score: ");
        scanf("%f", &css[i]);

        printf("Input JS Score: ");
        scanf("%f", &js[i]);

        // Calculate average
        evg[i] = (html[i] + css[i] + js[i]) / 3.0;
    }

    // Output:
    printf("\n====================== Output ==================\n");
    for(i = 0; i < n; i++) {
        printf("\nStudent %d:\n", i+1);
        printf("Id: %d\n", id[i]);
        printf("Name: %s\n", name[i]);
        printf("Sex: %c\n", sex[i]);
        printf("HTML Score: %.2f\n", html[i]);
        printf("CSS Score: %.2f\n", css[i]);
        printf("JS Score: %.2f\n", js[i]);
        printf("Average Score: %.2f\n", evg[i]);
    }

    getch();
    return 0;
}
