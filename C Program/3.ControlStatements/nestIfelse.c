//if-else-if
#include<stdio.h>
#include<conio.h>
int main(){
    
    float score;
    char rank;
    printf("Enter score : ");
    scanf("%f",&score);

    //condition
    if(score >= 100){
        rank = 'A';
    }
    else if(score >= 85){  
        rank = 'B';
    }
    else if(score >= 70){
        rank = 'C';
    }
    else if(score >= 60){
        rank = 'D';
    }
    else if(score >= 50){
        rank = 'E';
    }
    else{
        rank = 'F';
    }
    
    printf("Score : %.2f",score);
    printf("Rank  : %c",rank);
}