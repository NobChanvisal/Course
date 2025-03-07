#include <stdio.h>
#include <string.h>

int main() {
    char name[100], gen[10];//null
    //input
    printf("\n\n");
    printf("\tEnter name  : ");
    fflush(stdin);gets(name);
    printf("\tEnter Gender: ");  
    fflush(stdin);gets(gen);//gen=female

    printf("\t______________________________\n\n");
        //condition
    if (strcmp(gen, "female") == 0 || strcmp(gen, "Female") == 0) {
        printf("\t    Ms.%s\n", name);
        printf("\t    Female\n");
    }
    if (strcmp(gen, "male") == 0 || strcmp(gen, "Male") == 0) {
        printf("\t    Name:   Mr.%s\n", name);
        printf("\t    Gender: Male\n");
    }
    printf("\t______________________________\n\n");
    return 0;
}
