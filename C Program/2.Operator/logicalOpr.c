// Working of logical operators

#include <stdio.h>

int main()

{
    int a = 15, b = 15, c = 20, results;// integer
    results = (a == b) && (c > b);// 1 --> true , 0 --> false
                //1         1  //1
    printf("(a == b) && (c > b) is %d \n", results);//1

    results = (a == b) && (c < b);
    printf("(a == b) && (c < b) is %d \n", results);//0
                //1         0
    results = (a == b) || (c < b);
    printf("(a == b) || (c < b) is %d \n", results);//1
            //1             0
    results = (a != b) || (c < b);
    printf("(a != b) || (c < b) is %d \n", results);//0
            //0           0   
    results = !(a != b);
    printf("!(a != b) is %d \n", results);
    
    results = !(a == b);
    printf("!(a == b) is %d \n", results);

    return 0;

}