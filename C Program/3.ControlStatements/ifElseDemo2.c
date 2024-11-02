//find min
#include<stdio.h>

int main(){
    int a,b,min;
    printf("\n");
    printf("Enter a : ");
    scanf("%d",&a);
    printf("Enter b : ");
    scanf("%d",&b);
    if(a<b){
        min = a;
    }
    else{
        min = b;
    }
    // min = (a < b) ? a : b;
    printf("Min : %d",min);
    return 0;
}