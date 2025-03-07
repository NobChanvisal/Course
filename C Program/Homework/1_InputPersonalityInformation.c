#include<stdio.h>
#include<stdlib.h>

int main(){
    char firt[20],last[20],future[50],school[30];
    char gender;
    int age;
    
    printf("Input Information\n");
	printf("__________________________\n");
	printf("Enter firtname   : ");fflush(stdin);gets(firt);
    printf("Enter lastname   : ");fflush(stdin);gets(last);
    printf("Enter gender : ");scanf("%c",&gender);
    printf("Enter age    : ");scanf("%d",&age);
    printf("Enter University : ");fflush(stdin);gets(school);
    printf("Enter Future Goal : ");fflush(stdin);gets(future);

    printf("Output Information\n");
    printf("==========================\n");
    printf("Name        : %s %s\n",firt,last);
	printf("Gender      : %c\n",gender);
	printf("Age         : %d\n",age);
	printf("University  : %s\n",school);
	printf("Future Goal : %s\n",future);
    getch();
    return 0;
}