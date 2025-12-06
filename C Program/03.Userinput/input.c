#include<stdio.h>

int main(){
    char name[20];
    int id = 1;
    printf("Enter name : ");
    scanf(" %s",name);
    printf("%-50s %-50d",name,id);
}