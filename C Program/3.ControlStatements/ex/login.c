#include <stdio.h>
#include <string.h>

int main() {
    char inputUsername[50];
    char inputPassword[50];

    printf("Enter username: ");
    fflush(stdin);gets(inputUsername);

    printf("Enter password: ");
    fflush(stdin);gets(inputPassword);
    //can't compare uppercase with lowercase
    if (strcmp(inputUsername,"User123") == 0 && strcmp(inputPassword,"Pass123") == 0) {
        printf("Login successful!\n");
    } else {
        printf("Invalid username or password.\n");
    }
    return 0;
}
