
//note: tolower : use for convert upercase to lowercase 
//                ex. D ->> d
//      loupper : use for convert lowercase to upercase
#include<stdio.h>
#include<conio.h>
#include<ctype.h>

int main(){
    float dollar,riel,rate;
    char ch;
    start:
    
    printf("Welcome to exchange money app\n");
    printf("--------------------------\n");
    printf("Press key r for exchange dollar to reil\n");
    printf("Press key d for exchage reil to dollar\n");
    printf("========================\n");
    // ch = tolower(getch());//cuz case use lowercase letter
    //                     // if we press upercase letter
    //                     // it convert that to lowercase letter
    ch = getch();
    switch(ch){
        case 'r': 
            printf("Enter dollar : ");
            scanf("%f",&dollar);
            printf("Enter rate   : ");
            scanf("%f",&rate);
            riel = dollar * rate; 
            printf("Riel = %.2f",riel); 
            break;
        case 'd':
            printf("Enter riel  : ");
            scanf("%f",&riel);  
            printf("Enter rate   : ");
            scanf("%f",&rate);
            dollar = riel/rate;
            printf("Dollar : %.2f",dollar);
            break;
        default:
            printf("No option !!");
    }
    printf("\nDo you want to use this app again ?[Y/N]\n");
    char ch1 = getch();
    if(ch1 == 'Y')
        goto start;
}