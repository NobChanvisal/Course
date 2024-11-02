#include <stdio.h>
#include <conio.h> // For getch()
// #include <windows.h> // For system("cls")

int main() {
    int qty;
    float dis, save, total, pay;
    char menu;

    start:
    system("cls"); // Clear screen
    printf("\tDrink store new version                              \n");
    printf("\t____________________________________________________ \n\n");
    printf("\ta. Coca cola                2$/can                   \n");
    printf("\tb. Fanta                    1.8$/can                 \n");
    printf("\tc. Pepsi                    1.9$/can                 \n");
    printf("\td. Sting red                2.5$/can (5 up - 10%% off)\n");
    printf("\te. Exit                                              \n");
    printf("\t---------------------------------------------------- \n");
    printf("\tChoose one option: ");
    scanf(" %c", &menu); // Space before %c to consume any whitespace characters

    switch(menu) {
        case 'a': 
        case 'A': //coca cola
            printf("\tEnter qty: ");
            scanf("%d", &qty);
            total = qty * 2;
            dis = 0;
            break;
        case 'b': 
        case 'B'://fanta
            printf("\tEnter qty: ");
            scanf("%d", &qty);
            total = qty * 1.8;
            dis = 0;
            break;
        case 'c': 
        case 'C'://pepsi
            printf("\tEnter qty: ");
            scanf("%d", &qty);
            total = qty * 1.9;
            dis = 0;
            break;
        case 'd': 
        case 'D':
            printf("\tEnter qty: ");
            scanf("%d", &qty);
            total = qty * 2.5;
            if (qty >= 5) {
                dis = 10;
            } else {
                dis = 0;
            }
            break;
        case 'e': 
        case 'E':
            return 0;
        default:
            printf("\tInvalid option\n");
            getch(); // Wait for a key press
            system("cls"); // Clear screen
            goto start; // Restart the program
    }

    save = total * (dis) / 100;
    pay = total - save;

    printf("\t____________________________\n\n");
    printf("\tQty     : %d\n", qty);
    printf("\tTotal   : %.2f\n", total);
    printf("\tSave    : %.2f\n", save);
    printf("\tPayment : %.2f\n", pay);
    printf("Press any key to continue !!\n");
    getch(); // Wait for a key press
    goto start; // Restart the program
}
