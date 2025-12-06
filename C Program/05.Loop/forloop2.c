#include<stdio.h>
int main(){
    int n; 
    printf("Enter n : ");
    scanf("%d",&n);
    for(int i = 1;i<=10;i++){
        printf("%d * %d = %d\n",n,i,i*n);
    }
}