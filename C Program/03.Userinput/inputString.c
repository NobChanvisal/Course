#include <stdio.h>

int main() {
    int id;
    char name[50];
    char gender;
    char address[50];
    float english, math, physics, avg; 

    // Input student data 
    printf("\nStudent information system\n");
    printf("---------------------------------\n");
    printf("Enter student's ID: ");
    scanf("%d", &id);

    printf("Enter student's name: ");
    fflush(stdin);gets(name);

    printf("Enter student's gender (M/F): ");
    scanf("%c", &gender);

    printf("Enter student's address: ");
    fflush(stdin);gets(address);

    printf("Enter student's English score: ");
    scanf("%f", &english);

    printf("Enter student's Math score: ");
    scanf("%f", &math);

    printf("Enter student's Physics score: ");
    scanf("%f", &physics);

    // // Calculate the average grade គណនាមធ្ឈមភាគ
    // avg = (english + math + physics) / 3;

    // Output student data​
    printf("\nStudent Information:\n");
    printf("----------------------------------\n");
    printf("%-10s %-20s %-10s %-30s %-10s %-10s %-10s %-10s\n","ID","NAME","GENDER","ADDRESS","ENGLISH","MATH","PHYSICS","AVERAGE");
    printf("%-10d %-20s %-10c %-30s %-10.2f %-10.2f %-10.2f %-10.2f\n",id,name,gender,address,english,math,physics);
    return 0;
}
