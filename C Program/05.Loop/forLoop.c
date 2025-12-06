//Syntax:
    // for (expression 1; expression 2; expression 3) {
    //   // code block to be executed
    // }

    
// Print numbers from 1 to 10
#include <stdio.h>

int main() {
    int i;
    for (i = 1; i <= 10; ++i)
    {  
        if(i % 2 != 0)
        {
            printf("%d ", i);
        }      
    }
    return 0;
}
