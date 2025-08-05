#include <stdio.h>
#include <stdlib.h>

typedef struct Student {
    int id;
    char name[30];
    float gpa;
} Student;
Student students[100];

void insert();
void read();
void save_all();
void display();
void search();
void delete_student();
void update();
int count = 0;

int main(){
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

    return 0;
}
void insert(){
    // fwrite(addressData, sizeData, numbersData, pointerToFile);
    Student st;
    FILE *fp = fopen("data.bin", "ab"); 
    printf("\nEnter student ID: ");
    scanf("%d", &st.id);
    printf("Enter student name: ");
    scanf("%s", st.name);
    printf("Enter student GPA: ");
    scanf("%f", &st.gpa);
    fwrite(&st, sizeof(Student), 1, fp);
    fclose(fp);

    printf("Record added successfully!\n");
}

void read() {
    // fread(addressData, sizeData, numbersData, pointerToFile);
    FILE *fp = fopen("data.bin", "rb"); 
    if (fp == NULL) {
        printf("Error opening file.\n");
        return;
    }
    count = 0;
    while (fread(&students[count], sizeof(Student), 1, fp)) {
        count++;
    }
    fclose(fp);
}
void save_all() {
    // fwrite(addressData, sizeData, numbersData, pointerToFile);
    FILE *fp = fopen("data.bin", "wb");
    for (int i = 0; i < count; i++)
    {
        fwrite(&students[i], sizeof(Student), 1, fp);
    }
     fclose(fp); 
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
            found = 1;
            for (int j = i; j < count - 1; j++) {
                students[j] = students[j + 1];
            }
            count--;
            save_all();
            printf("Student deleted successfully.\n");
            break;
        }
    }
    if (!found) {
        printf("Student not found.\n");
    }
}   

void update() {
    read();
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
            save_all();
            printf("Student updated successfully.\n");
            break;
        }
    }
    if (!found) {
        printf("Student not found.\n");
    }
}
