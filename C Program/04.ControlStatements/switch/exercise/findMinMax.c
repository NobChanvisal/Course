#include<stdio.h>
#include<conio.h>

int main(){
    int a,b,min,max;
    char ch;

    printf("Welcome to find min and max app\n");
    printf("----------------------------------\n");
    printf("Enter number of a :");
    scanf("%d",&a);
    printf("Enter number of b : ");
    scanf("%d",&b);
    printf("--------------------------\n");
    printf("Press key m for min\n");
    printf("Press key n for max\n");
    printf("========================\n");
    
    ch = getch();
    switch(ch){
        case 'm': 
            if(a<b){
                min = a;
            }
            else{
                min = b;
            }
            printf("Result of Min = %d",min);
            break;
        case 'n':
            if(a>b){
                max = a;
            }
            else{
                max = b;
            }
            printf("Result of Max = %d",max);
            break;
        default:
            printf("No option !!");
    }
    // printf("\nDo you want to use this app again ?[Y/N]\n");
    // char ch1 = getch();
    // if(ch1 == 65)
    //     goto start;
}