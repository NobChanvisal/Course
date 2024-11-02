#include<stdio.h>
int main(){
    float score;
    char grand;
    printf("Enter score : ");
    scanf("%f",&score);

    if(score >= 90){
        grand = 'A';
    }

    printf("grand : %c",grand);
}