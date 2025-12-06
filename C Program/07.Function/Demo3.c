// Return value and no parameter:

#include <stdio.h>
int getN();
int main(){
    //value of n get from function
    int n = getN();//call function getN()
    for(int i = 1; i<= n; i++)
    {
        printf("%d\t",i);
    }
    return 0;
}
int getN(){
    int n;
    printf("Enter n : ");
    scanf("%d",&n);
    return n;
}