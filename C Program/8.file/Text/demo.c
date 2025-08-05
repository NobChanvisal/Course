#include <stdio.h>
#include <stdlib.h>

struct student
{
    int id;
    char name[50];
    float gpa;
};
struct student students[100];

void insert();
void read();
void save_all();
void display();
void search();
void delete_student();
void update();
int count = 0;

int main() {
    int choice;
    
    do {
        printf("\nStudent Management System\n");
        printf("--------------------------\n");
        printf("1. Insert Student\n");
        printf("2. Read Students\n");
        printf("3. Search Student\n");  
        printf("4. Delete Student\n");
        printf("5. Update Student\n");
        printf("6. Exit\n");
        printf("--------------------------\n");
        printf("Enter your option : ");
        scanf("%d", &choice);
        switch (choice)
        {
        case 1:
            insert();
            break;
        case 2:
            read();
            display();
            break;
        case 3:
            search();
            break;
        case 4:
            delete_student();
            break;
        case 5:
            update();   
            break;
        case 6:
            break;  
        default:
            break;
        }
    }while (choice != 6);
    
    
}

void insert() {
        FILE *file = fopen("students.txt", "a");
        printf("\nEnter student ID: ");
        scanf("%d", &students[count].id);
        printf("Enter student name: ");
        scanf("%s", students[count].name);
        printf("Enter student GPA: ");
        scanf("%f", &students[count].gpa);
        fprintf(file, "%d %s %.2f\n", students[count].id, students[count].name, students[count].gpa);
        count++;
        printf("Student inserted successfully.\n");
        fclose(file);
}
void read() {
    FILE *file = fopen("students.txt", "r");
    if (file == NULL) {
        printf("Error opening file.\n");
        return;
    }
    count = 0;
    while (fscanf(file, "%d %s %f", &students[count].id, students[count].name, &students[count].gpa) != EOF) {
        count++;
    }
    fclose(file);
}
void save_all() {
    FILE *file = fopen("students.txt", "w");
    for (int i = 0; i < count; i++) {
        fprintf(file, "%d %s %.2f\n", students[i].id, students[i].name, students[i].gpa);
    }
    fclose(file);
}

void display() {
    printf("\nList of Students:\n");
    printf("-----------------\n");
    for (int i = 0; i < count; i++) {
        printf("%-10d %-30s %-10.2f\n", students[i].id, students[i].name, students[i].gpa);
    }
}
void search() {
    read();
    int id;
    int found = 0;
    printf("\nEnter student ID to search: ");
    scanf("%d", &id);
    for (int i = 0; i < count; i++) {
        if (students[i].id == id) {
            printf("Student found: \n");
            printf("-----------------\n");
            printf("ID   : %d\n", students[i].id);
            printf("Name : %s\n", students[i].name); 
            printf("GPA  : %.2f\n", students[i].gpa);
            found = 1;
        }
    }
    if (found == 0) {
        printf("Student not found.\n");
    }
}
void delete_student() {
    read();
    int id;
    int found = 0;
    printf("\nEnter student ID to delete: ");
    scanf("%d", &id);
    for (int i = 0; i < count; i++) {
        if (students[i].id == id) {
            for (int j = i; j < count - 1; j++) 
            {
                students[j] = students[j + 1];
            }
            found = 1;
            count--;
            save_all();
            printf("Student deleted successfully.\n");
        } 
    }
    if (found == 0) 
    {
        printf("Student not found.\n");
    }
}
void update() {
    read();
    int id;
    int found = 0;
    printf("\nEnter student ID to update: ");
    scanf("%d", &id);
    for (int i = 0; i < count; i++)
    {
        if (students[i].id == id) 
        {
            printf("Enter new name: ");
            scanf("%s", students[i].name);
            printf("Enter new GPA: ");
            scanf("%f", &students[i].gpa);
            save_all();
            printf("Student updated successfully.\n");
            found = 1;
        } 
        
    }
    if (found == 0)
    {
        printf("Student not found.\n");
    }
    
    
}