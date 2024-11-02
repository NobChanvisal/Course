// Return value and parameter:

#include <stdio.h>

int addNum(int a, int b);
int main(){
    int x,y,result;
    printf("Enter x an y : \n");
    scanf("%d %d",&x,&y);

    result = addNum(x,y);
    printf("Result = %d",result);
}
int addNum(int a, int b){
    return a + b;
}
