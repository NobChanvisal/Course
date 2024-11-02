#include<stdio.h>
#include<conio.h>
int main(){
    int num;//create variable for enter from keyboard
    float num1;
    printf("Welcome to app\n");
    printf("--------------------\n");
    //បញ្ូលតម្លៃលេខ
    printf("Enter number : ");
    scanf("%d",&num);
    printf("==============\n");  
    if(num > 0)
    {
        printf("number is position\n");
        
    }
    else if(num == 0)
    {
        printf("number is zero");
    }
    else if(num < 0)
    {
        printf("num is negative");
    }

    getch();
    return 0;
}