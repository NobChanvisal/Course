#include <stdio.h>
#include <conio.h>
#include <stdbool.h>

int main() {
    int id[20];
    char name[20][50];
    char sex[20];
    int searchId;

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
        scanf("%s", name[i]);  
        printf("Input Sex (M/F): ");
        scanf(" %c", &sex[i]);
    }

    // Output:
    printf("\n====================== Output ==================\n");
    for(i = 0; i < n; i++) {
        printf("\nStudent %d:\n", i+1);
        printf("Id: %d\n", id[i]);
        printf("Name: %s\n", name[i]);
        printf("Sex: %c\n", sex[i]);
    }
    
    // Search:
    printf("\n\nEnter Id to search: ");
    scanf("%d", &searchId);

    bool found = false; // Flag to check if data is found
    for(i = 0; i < n; i++) {
        if(id[i] == searchId) {
            printf("This is your search data:\n");
            printf("Id: %d\n", id[i]);
            printf("Name: %s\n", name[i]);
            printf("Sex: %c\n", sex[i]);
            return;
        }
    }
    if (!found) { 
        printf("Data not found!!!\n");//if execute when condition true
    }
    getch();
    return 0;
}
