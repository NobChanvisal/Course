//no return and parameter
#include <stdio.h>
void loop(int n);
int main(){

    loop(10);
}
void loop(int n){
    for(int i = 1; i<= n; i++)
    {
        printf("%d\t",i);
    }
}