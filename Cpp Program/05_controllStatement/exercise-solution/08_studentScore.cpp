#include <iostream>
#include <conio.h>
using namespace std;

int main(){
    int id;
    string name;
    char sex;
    float html,css,js,score;
    char g;

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
    cout<< "Enter js score : ";
    cin>>js;
    score = (html + css + js)/3;
        
        if(score >= 95){
            g = 'A';
        }
        else if(score > 85){
            g = 'B';
        }
        else if(score > 75){
            g = 'C';
        }
        else if(score > 60){
            g = 'D';
        }
        else if(score > 49)
        {
            g = 'E';
        }
        else{
            g = 'F';
        }
    cout<<endl<< "Output data"<<endl;
    cout<< "--------------------"<<endl;
    cout<< "Student id : "<<id<<endl;
    cout<< "Student name : "<<name<<endl;
    cout<< "Student sex  : "<<sex<<endl;
    cout<< "Student score : "<<score<<endl;
    cout<< "Student grand : "<<g<<endl;
    getch();
    return 0;
}