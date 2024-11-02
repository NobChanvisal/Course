//No return and No parameter

#include <stdio.h>
void loop();
int main(){
    loop();//call function loop()
    return 0;
}
void loop(){
    int n;
    printf("Enter n : ");
    scanf("%d",&n);
    for(int i = 1; i<= n; i++)
    {
        printf("%d\t",i);
    }
}