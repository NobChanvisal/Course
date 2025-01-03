#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int id;
    string name;
    char sex;
    float html,css,score;
    string g;

    cout<< "Enter Your Data :"<<endl;
    cout<< "-------------------"<<endl;
    cout<< "Enter id : ";
    cin>>id;
    cout<< "Enter name : ";
    cin>>name;
    cout<< "Enter sex  : ";
    cin>>sex;
    cout<< "Enter html score : ";
    cin>>html;
    cout<< "Enter css score : ";
    cin>>css;
        score = html + css;

        if(score >= 50){
            g = "Pass";
        }
        else{
            g = "Fail";
        }
    cout<<endl<< "Output data"<<endl;
    cout<< "--------------------"<<endl;
    cout<< "Student id : "<<id<<endl;
    cout<< "Student name : "<<name<<endl;
    cout<< "Student sex  : "<<sex<<endl;
    cout<< "Student html score : "<<html<<endl;
    cout<< "Student css score : "<<html<<endl;
    cout<< "Student grand : "<<g<<endl;
    getch();
    return 0;
}