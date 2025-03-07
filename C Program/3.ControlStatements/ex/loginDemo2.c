#include <stdio.h>
#include <string.h>

int main() {
    char correctUsername[] = "User123";
    char correctPassword[] = "Pass123";

    char inputUsername[50];
    char inputPassword[50];

    printf("Enter username: ");
    fflush(stdin);gets(inputUsername);

    printf("Enter password: ");
    fflush(stdin);gets(inputPassword);
    
    if (strcmpi(correctUsername, inputUsername) == 0 && strcmpi(correctPassword, inputPassword) == 0) {
        printf("Login successful!\n");
    } else {
        printf("Invalid username or password.\n");
    }

    return 0;
}
