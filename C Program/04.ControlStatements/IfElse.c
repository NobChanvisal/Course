//if-else
#include <stdio.h> 
int main() 
{ 
    int i;
    printf("Enter i : ");
    scanf("%d",&i);
    if (i < 15) { //note : < --> >=, > -> <=, == , !=
        printf("i is smaller than 15"); 
    }

    else //i >= 151
    { 
        printf("i is greater than 15"); 
    } 
    printf("\nEnd of app");
    return 0; 
}