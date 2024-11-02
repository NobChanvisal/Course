#include <stdio.h>
#include <string.h>

#define MAX_STUDENTS 100

// Define a structure for student data
struct Student {
    int id;
    char name[50];
    float gpa;
    int age;
};

// Declare the array of students and a count of how many students are in the array
struct Student students[MAX_STUDENTS];
int student_count = 0;

void input();
void output();
void search();
void update();
void delete();

int main() {
    int opt;
    do {
        printf("\n1. Input\n2. Output\n3. Search\n4. Update\n5. Delete\n6. Exit\n");
        printf("Choose an option: ");
        scanf("%d", &opt);
        getchar(); // Clear newline character left by scanf
        switch (opt) {
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
                printf("Exiting...\n");
                break;
            default:
                printf("Invalid option! Please choose again.\n");
        }
    } while (opt != 6);

    return 0;
}

void input() {
    if (student_count >= MAX_STUDENTS) {
        printf("Maximum student limit reached.\n");
        return;
    }
    struct Student stu;
    
    // Input student data from the keyboard
    printf("Enter Student ID: ");
    scanf("%d", &stu.id);
    getchar(); // Clear newline character left by scanf
    printf("Enter Student Name: ");
    scanf(" %s",stu.name);
    printf("Enter Student GPA: ");
    scanf("%f", &stu.gpa);
    printf("Enter Student Age: ");
    scanf("%d", &stu.age);
    
    // Add student to the array
    students[student_count++] = stu;
}

void output() {
    if (student_count == 0) {
        printf("No student data available.\n");
        return;
    }
    for (int i = 0; i < student_count; i++) {
        printf("\nStudent %d Data:\n", i + 1);
        printf("Student ID: %d\n", students[i].id);
        printf("Student Name: %s\n", students[i].name);
        printf("Student GPA: %.2f\n", students[i].gpa);
        printf("Student Age: %d\n", students[i].age);
    }
}

void search() {
    if (student_count == 0) {
        printf("No student data available.\n");
        return;
    }
    int searchid;
    printf("Enter Student ID to search: ");
    scanf("%d", &searchid);
    for (int i = 0; i < student_count; i++) {
        if (students[i].id == searchid) {
            printf("\nStudent Found:\n");
            printf("Student ID: %d\n", students[i].id);
            printf("Student Name: %s\n", students[i].name);
            printf("Student GPA: %.2f\n", students[i].gpa);
            printf("Student Age: %d\n", students[i].age);
            return;
        }
    }
    printf("Student with ID %d not found.\n", searchid);
}

void update() {
    if (student_count == 0) {
        printf("No student data available.\n");
        return;
    }
    int updateid;
    printf("Enter Student ID to update: ");
    scanf("%d", &updateid);
    for (int i = 0; i < student_count; i++) {
        if (students[i].id == updateid) {
            printf("Updating data for Student ID: %d\n", updateid);
            getchar(); // Clear newline character left by scanf
            printf("Enter new Student Name: ");
            scanf("%s",students[i].name);
            printf("Enter new Student GPA: ");
            scanf("%f", &students[i].gpa);
            printf("Enter new Student Age: ");
            scanf("%d", &students[i].age);
            printf("Student data updated.\n");
            return;
        }
    }
    printf("Student with ID %d not found.\n", updateid);
}

void delete() {
    if (student_count == 0) {
        printf("No student data available.\n");
        return;
    }
    int deleteid;
    printf("Enter Student ID to delete: ");
    scanf("%d", &deleteid);
    for (int i = 0; i < student_count; i++) {
        if (students[i].id == deleteid) {
            for (int j = i; j < student_count - 1; j++) {
                students[j] = students[j + 1];
            }
            student_count--;
            printf("Student with ID %d deleted.\n", deleteid);
            return;
        }
    }
    printf("Student with ID %d not found.\n", deleteid);
}
