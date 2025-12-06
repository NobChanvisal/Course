#include <stdio.h>
#include <string.h>

#define MAX_STUDENTS 100

int ids[MAX_STUDENTS];
char names[MAX_STUDENTS][50];
float gpas[MAX_STUDENTS];
char grades[MAX_STUDENTS];
int count = 0;

void input();
void output();
void search();
void update();
void delete();

int main() {
    int choice;

    do {
        printf("\nMenu:\n");
        printf("------------------\n");
        printf("1. Input\n2. Output\n3. Search\n4. Update\n5. Delete\n6. Exit\n");
        printf("Enter your choice: ");
        scanf("%d", &choice);

        switch (choice) {
            case 1:
                input();
                break;
            case 2:
                output();
                break;
            case 3:
                search();
                break;
            case 4:
                update();
                break;
            case 5:
                delete();
                break;
            case 6:
                return 0;
            default:
                printf("Invalid choice. Please try again.\n");
        }
    }while (choice != 6);
    
}

void input() {
    if (count < MAX_STUDENTS) {
        printf("Enter ID: ");
        scanf("%d", &ids[count]);
        printf("Enter Name: ");
        scanf("%s", names[count]);
        printf("Enter GPA: ");
        scanf("%f", &gpas[count]);
        printf("Enter Grade: ");
        scanf(" %c", &grades[count]);
        count++;
    } else {
        printf("Maximum student limit reached.\n");
    }
}

void output() {
    for (int i = 0; i < count; i++) {
        printf("ID: %d\t Name: %s\t GPA: %.2f\t Grade: %c\n", ids[i], names[i], gpas[i], grades[i]);
    }
}

void search() {
    int id;
    printf("Enter ID to search: ");
    scanf("%d", &id);

    for (int i = 0; i < count; i++) {
        if (ids[i] == id) {
            printf("ID: %d\t Name: %s\t GPA: %.2f\t Grade: %c\n", ids[i], names[i], gpas[i], grades[i]);
            return;
        }
    }
    printf("Student not found.\n");
}

void update() {
    int id;
    printf("Enter ID to update: ");
    scanf("%d", &id);

    for (int i = 0; i < count; i++) {
        if (ids[i] == id) {
            printf("Enter new Name: ");
            scanf("%s", names[i]);
            printf("Enter new GPA: ");
            scanf("%f", &gpas[i]);
            printf("Enter new Grade: ");
            scanf(" %c", &grades[i]);
            printf("Student record updated.\n");
            return;
        }
    }
    printf("Student not found.\n");
}

void delete() {
    int id;
    printf("Enter ID to delete: ");
    scanf("%d", &id);

    for (int i = 0; i < count; i++) {
        if (ids[i] == id) {
            for (int j = i; j < count - 1; j++) {
                ids[j] = ids[j + 1];
                strcpy(names[j], names[j + 1]);
                gpas[j] = gpas[j + 1];
                grades[j] = grades[j + 1];
            }
            count--;
            printf("Student record deleted.\n");
            return;
        }
    }
    printf("Student not found.\n");
}
