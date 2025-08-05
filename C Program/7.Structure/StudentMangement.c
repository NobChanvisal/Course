#include <stdio.h>


typedef struct Student {
    int id;
    char name[30];
    float gpa;
} Student;
Student students[100];
int count = 0;

void insert();
void header();
void view();
void search();
void delete_student();
void update();

int main(){
    int opt;
    do
    {
        printf("\nStudent Management System\n");
        printf("--------------------------\n");
        printf("1. Insert Student\n");
        printf("2. Views Students\n");
        printf("3. Search Student\n");  
        printf("4. Delete Student\n");
        printf("5. Update Student\n");
        printf("6. Exit\n");
        printf("--------------------------\n");
        printf("Enter your option : ");
        scanf("%d", &opt);
        
        switch (opt)
        {
            case 1:
                insert();
                break;
            case 2:
                view();
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
                printf("Invalid option! Please try again.\n");
                break;
        }
    } while (opt != 6);
    
}
void insert(){
    printf("\nEnter student ID: ");
    scanf("%d", &students[count].id);
    printf("Enter student name: ");
    scanf("%s", students[count].name);  
    printf("Enter student GPA: ");
    scanf("%f", &students[count].gpa);
    count++;
    printf("Record added successfully!\n");
}
void header() {
    printf("\n%-10s %-30s %-10s\n", "ID", "Name", "GPA");
    printf("-------------------------------\n");
}
void view(){
    printf("\nStudent Records:\n");
    printf("-----------------\n");
    header();
    for (int i = 0; i < count; i++) {
        printf("%-10d %-30s %-10.2f\n", students[i].id, students[i].name, students[i].gpa);
    }
}

void search(){
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
            break;
        }
    }
    if (!found) {
        printf("Student not found.\n");
    }
}

void delete_student() {
    int id;
    int found = 0;
    printf("\nEnter student ID to delete: ");
    scanf("%d", &id);
    for (int i = 0; i < count; i++) {
        if (students[i].id == id) {
            found = 1;
            for (int j = i; j < count - 1; j++) {         
                students[j] = students[j + 1];
            }
            count--;
            printf("Student deleted successfully.\n");
            break;
        }
    }
    if (!found) {
        printf("Student not found.\n");
    }
}

void update() {
    int id;
    int found = 0;
    printf("\nEnter student ID to update: ");
    scanf("%d", &id);
    for (int i = 0; i < count; i++) {
        if (students[i].id == id) {
            printf("Updating student details:\n");
            printf("Enter new name: ");
            scanf("%s", students[i].name);
            printf("Enter new GPA: ");
            scanf("%f", &students[i].gpa);
            found = 1;
            printf("Student updated successfully.\n");
            break;
        }
    }
    if (!found) {
        printf("Student not found.\n");
    }
}   