#include <stdio.h>

int main(){
    int id = 1;//ការតាងអញ្ញាត id ជាចំនួនគត់
    char name[20] = "CITO Computer";//ការតាងអញ្ញាត name ជាអក្សរច្រើនតួរ
    char sex = 'M';//ការតាងអញ្ញាត sexជាអក្សរមួយតួរ
    float score = 98.99;//ការតាងអញ្ញាត scoreជាចំនួនទសភាគ
    double dbl = 20.123456;
    printf("Personality formation\n");
    printf("------------------------------\n");
    printf("ID    is %d \n",id);//បង្ហាញតម្លៃជាចំនួនគត់
    printf("Name  is %s \n",name);//បង្ហាញតម្លៃជាអក្សរច្រើនតួរ
    printf("Sex   is %c \n",sex);//បង្ហាញតម្លៃជាអក្សរមួយតួរ
    printf("Score is %f \n",score);//បង្ហាញតម្លៃជាចំនួនទសភាគ
    printf("dbl   is %lf \n",dbl);//បង្ហាញតម្លៃជាចំនួនទសភាគ
}