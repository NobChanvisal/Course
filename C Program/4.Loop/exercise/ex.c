#include <stdio.h>

int main() {
    int num;
    int sum;
    printf("Enter number : ");scanf("%d",&num);
    printf("-------------------------------------\n");
    for (int i = 0; i < num; i++) 
    {//5
        // Check if the number is even
        if (i % 2 == 0) {
            sum += i;
        }
    }
    printf("sum = %d",sum);
    return 0;
}

// //condition:
//     syntax:
//         if(condition){
//             statement;
                // .......
                // statement;
//         }